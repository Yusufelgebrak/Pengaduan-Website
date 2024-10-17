<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $primarykey = 'nik';

    protected $fillable = [
    'id_tanggapan',
    'id_pengaduan' ,
    'tgl+tanggapan',
    'tanggapan',
    'id_petugas',
    ];
}
