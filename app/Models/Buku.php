<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode', 'judul', 'isbn', 'pengarang', 'penerbit', 'tahun_terbit', 'jumlah_stok'
    ];
}
