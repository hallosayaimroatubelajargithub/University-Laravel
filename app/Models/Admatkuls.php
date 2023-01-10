<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admatkuls extends Model
{
    protected $fillable = ['nama', 'sks', 'hari', 'pukul', 'ruang'];
    // use HasFactory;
}
