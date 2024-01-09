<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bphj extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bphj';

    protected $guarded = [];

    public function periode(){
        return $this->belongsTo(Periode::class);
    }

    public function user_jemaat(){
        return $this->belongsTo(UserJemaat::class);
    }
    
}
