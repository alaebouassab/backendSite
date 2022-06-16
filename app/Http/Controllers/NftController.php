<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;
use App\Models\Project;
class NftController extends Controller
{
    
    function getNFTS(Request $request){

       return Nft::with(['lists','lists.rankInfo'])->get();
        
    }
    function getNftDetails(Request $request,NFT $nft){

       return $nft->load("lists");
    }

    function getProjects(){

        return Project::all();
    }
    function getProjectsBySearch(Request $req){

        return Project::where("title","like","%{$req->search}%")->get();
    }
}