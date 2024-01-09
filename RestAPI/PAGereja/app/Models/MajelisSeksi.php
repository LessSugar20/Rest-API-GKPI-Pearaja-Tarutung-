<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MajelisSeksi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'majelis_seksi';

    protected $guarded = [];

    public function anggota_majelis_seksi(){
        return $this->hasMany(AnggotaMajelisSeksi::class);
    }
}
