<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik', 'nama_peminjam', 'email', 'telepon', 'judul_buku', 'isbn', 'tanggal_peminjaman', 'tanggal_pengembalian'
    ];
}
