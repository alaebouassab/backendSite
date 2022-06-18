<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    function getUsers(Request $request){
        return User::all();
    }
}
