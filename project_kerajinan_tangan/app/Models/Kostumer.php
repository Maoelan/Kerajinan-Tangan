<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kostumer extends Model
{
    use HasFactory;
    protected $table = 'kostumer';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'id_kostumer', 'nama_lengkap', 'alamat_kostumer', 'telpon'];
    public $timestamps = false;
}
