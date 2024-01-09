<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tardidi extends Model
{
     use HasFactory, SoftDeletes;

     protected $table = 'tardidi';

     protected $guarded = [];

     public function user_jemaat(){
          return $this->belongsTo(UserJemaat::class);
     }

     public function sektor(){
          return $this->belongsTo(Sektor::class);
     }
}
