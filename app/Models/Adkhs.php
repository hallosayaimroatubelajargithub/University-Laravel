<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adkhs extends Model
{
    protected $fillable = ['id_mhs', 'id_matkul', 'nama_matkul', 'sks', 'grade_huruf', 'ipk'];
    // use HasFactory;
}
