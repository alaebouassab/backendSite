<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    use HasFactory;

    function lists(){

        return $this->hasOne(ListNFT::class,'nft_id','id');
    }
}