<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transactions'; // Nama tabel di database

    protected $fillable = [
        'id_booking',
        'id_pelanggan',
        'tanggal_masuk',
        'tanggal_keluar',
        'total_biaya',
        'status'
    ];
    public function listtransaksi()
    {
        return $this->belongsTo(listtransaksi::class);
    }
}

