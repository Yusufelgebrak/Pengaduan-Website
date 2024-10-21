<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_petugas';

    protected $fillable = [
    'nama_petugas' ,
    'username_petugas',
    'password',
    'telp',
    'level',
    ];
}
