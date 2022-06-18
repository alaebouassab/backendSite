<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nftanalysique;

class NftanalysiquesController extends Controller
{
    function getAnalis(Request $request){
        return Nftanalysique::all();
    }
}
