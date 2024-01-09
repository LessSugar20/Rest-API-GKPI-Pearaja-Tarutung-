<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnggotaMajelisSeksi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'anggota_majelis_seksi';

    protected $guarded = [];

    public function majelis_seksi(){
        return $this->belongsTo(MajelisSeksi::class);
    }

    public function user_jemaat(){
        return $this->belongsTo(UserJemaat::class);
    }

    public function periode(){
        return $this->belongsTo(Periode::class);
    }
    
}
