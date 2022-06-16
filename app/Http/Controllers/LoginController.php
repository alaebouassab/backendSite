<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        
        
    $validator = Validator::make($request->all(),
      [
      'email' => 'required|email',
      'password' => 'required'
      ]
);
    if ($validator->fails())
{   
        return response()->json(["status"=>false,"message"=>$validator->messages(),"pass"=>$request->password]);
}
// success validator

    $user = User::where('email', $request->email)->first();
   
    if (!$user || ! Hash::check($request->password, $user->password)) {
        // unverify
        return response()->json(["status"=>false,"message"=>"The provided credentials are incorrect."]);
    }else{
        // verify
        $token = $user->createToken("user_token");
        return response()->json(["status"=>true,"message"=>$token->plainTextToken]); 
    }
 
    }

    public function logout(Request $request){
             
        $$request->user()->tokens()->where('id', $tokenId)->delete();
        return response()->json(["status"=>true]);
    }

    public function getUser(Request $request){

        return $request->user();
    }
}