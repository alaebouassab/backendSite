<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RankInfo;

class RankinginfosController extends Controller
{
    function getRank(Request $request){
        return RankInfo::all();
    }
}
