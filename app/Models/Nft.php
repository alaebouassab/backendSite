<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    use HasFactory;

    function listes(){

        return $this->hasOne(ListeNFT::class,'nft_id','id');
    }
}