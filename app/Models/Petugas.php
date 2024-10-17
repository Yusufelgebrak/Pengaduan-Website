<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\user as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $table = 'petugas';

    protected $primarykey = 'nik';

    protected $fillable = [
    'id_petugas',
    'nama_petugas' ,
    'username_petugas',
    'password',
    'telp',
    'level',
    ];
}
