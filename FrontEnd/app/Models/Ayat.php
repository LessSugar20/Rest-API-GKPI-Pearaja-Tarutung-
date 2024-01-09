<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ayat extends Model
{
    use HasFactory;

    protected $table = 'ayat';

    protected $guarded = [];
    
    public function alkitab(){
     return $this->belongsTo(Alkitab::class);
 }
    
}
