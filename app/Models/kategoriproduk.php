<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriproduk extends Model
{
    use HasFactory;
    protected $table = 'kategori_produk';
    protected $fillable = ['nama_kat','jumlah_produk'];
}