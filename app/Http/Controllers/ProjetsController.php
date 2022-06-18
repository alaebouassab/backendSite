<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class ProjetsController extends Controller
{
    function getProjets(Request $request){
        return Projet::all();
    }
}
