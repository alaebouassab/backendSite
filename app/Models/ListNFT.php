<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListNFT extends Model
{
    use HasFactory;

    protected $table = "lists";

    function nft(){

        return $this->belongsTo(NFT::class,'nft_id','id');
    }

    function rankInfo(){

        return $this->belongsTo(RankInfo::class,"rank_info_id","id");
        
    }
}