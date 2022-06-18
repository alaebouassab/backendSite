<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankInfo extends Model
{
    use HasFactory;

      protected $table = "rankinginfos";

        function list(){

        return $this->hasOne(ListNFT::class,"rank_info_id","id");
        
    }
}