<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partangiangan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'partangiangan';

    protected $guarded = [];

    
}
