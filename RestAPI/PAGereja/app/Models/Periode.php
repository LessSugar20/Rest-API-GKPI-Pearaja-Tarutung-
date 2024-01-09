<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periode extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'periode';

    protected $guarded = [];

    public function anggota_majelis_seksi(){
        return $this->hasMany(AnggotaMajelisSeksi::class);
    }

    public function bphj(){
        return $this->hasOne(Bphj::class);
    }
}
