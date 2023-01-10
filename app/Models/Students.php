<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = ['nama', 'nim', 'jk', 'ttl', 'agama', 'alamat', 'fak', 'prodi', 'smstr'];
    // use HasFactory;
}
