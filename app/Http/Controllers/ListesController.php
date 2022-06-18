<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Liste;

class ListesController extends Controller
{
    function getListes(Request $request){
        return Liste::all();
    }
}
