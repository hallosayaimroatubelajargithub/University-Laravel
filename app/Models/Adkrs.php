<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adkrs extends Model
{
    protected $fillable = ['id_mhs', 'id_matkul', 'nama_matkul', 'id_dosen', 'hari', 'pukul', 'id_ruang'];
    // use HasFactory;
}
