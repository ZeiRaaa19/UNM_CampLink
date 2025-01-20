<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tipe',
        'harga',
        'deskripsi',
        'jumlah_camp',
        'foto',
    ];
}