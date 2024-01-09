<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Malua extends Model
{
     use HasFactory, SoftDeletes;

     protected $table = 'malua';

     protected $guarded = [];

     public function user_jemaat(){
          return $this->belongsTo(UserJemaat::class);
     }

     public function alkitab(){
          return $this->belongsTo(Alkitab::class);
     }
}
