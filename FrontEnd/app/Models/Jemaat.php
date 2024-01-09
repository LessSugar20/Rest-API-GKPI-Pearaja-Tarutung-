<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jemaat extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'jemaat';

    protected $guarded = [];

    public function user_jemaat(){
        return $this->hasMany(UserJemaat::class);
    }
}
