<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkuls extends Model
{
    protected $fillable = ['nama', 'sks', 'hari', 'pukul', 'ruang'];
    // use HasFactory;
}
