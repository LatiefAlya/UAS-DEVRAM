<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik', 'nama', 'judul_buku', 'isbn', 'tanggal_pinjam', 'tanggal_pengembalian', 'kondisi_buku', 'denda'
    ];
}
