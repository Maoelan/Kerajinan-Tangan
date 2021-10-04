<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idkategori extends Model
{
    use HasFactory;
    protected $table = "idkategori";
    protected $primarykey = "id";
    protected $fillabel = ['id','idkategori'];
    public $timestamps = false;

    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
