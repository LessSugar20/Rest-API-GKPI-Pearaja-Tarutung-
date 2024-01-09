<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserJemaat extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_jemaat';

    protected $guarded = [];

    public function jemaat(){
        return $this->belongsTo(Jemaat::class);
    }
    
    public function penatua(){
        return $this->hasOne(Penatua::class);
    }

    public function bphj(){
        return $this->hasOne(Bphj::class);
    }

    public function malua(){
        return $this->hasOne(Malua::class);
    }

    public function tardidi(){
        return $this->hasOne(Tardidi::class);
    }

    public function anggota_majelis_seksi(){
        return $this->hasOne(AnggotaMajelisSeksi::class);
    }
}
