<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alkitab extends Model
{
    use HasFactory;

    protected $table = 'alkitab';
    
    public function ayat(){
        return $this->hasOne(Ayat::class);
    }

    public function malua(){
        return $this->hasOne(Malua::class);
    }
}
