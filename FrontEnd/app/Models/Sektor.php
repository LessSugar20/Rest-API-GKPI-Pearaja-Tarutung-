<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sektor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sektor';

    protected $guarded = [];

    public function penatua(){
        return $this->hasMany(Penatua::class);
    }

    public function tardidi(){
        return $this->hasMany(Tardidi::class);
    }

}
