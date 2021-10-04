<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'id_produk', 'id_kategori', 'nama_produk', 'deskripsi', 'harga'];
    public $timestamps = false;
}
