<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';
    protected $fillable = ['kode_buku', 'judul_buku', 'penulis_buku', 'penerbit_buku', 'jumlah_halaman'];
}
