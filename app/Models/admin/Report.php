<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'id', // ganti dengan kolom yang sesuai
        'admin_id',
        'report_type',
        'description',
        'created_at',
        'updated_at',// ganti dengan kolom yang sesuai
        // tambahkan kolom lainnya sesuai kebutuhan
    ];

    // Relasi banyak ke satu dengan Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}