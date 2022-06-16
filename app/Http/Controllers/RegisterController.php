<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
class RegisterController extends Controller
{
    public function register(Request $request){

        $validator = Validator::make($request->all(),
                    [
                    'name' => 'required',
                    'password' => 'required|min:8',
                    'email' => 'required|email|unique:users'
                ],
              
        );

       if ($validator->fails())
{
        return response()->json(["status"=>false]);
}

       $user =  User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "isAdmin"=>isset($request->isAdmin) ? $request->isAdmin : 0  ,
            "password"=>Hash::make($request->password)
            
        ]);

        if(!$user){

                return response()->json(["status"=>false,"message"=>"Incorrect to register."]);
        }else{

                $token = $user->createToken("user_token");
                return response()->json(["status"=>true,"message"=>$token->plainTextToken]); 
        }
        
    }
}