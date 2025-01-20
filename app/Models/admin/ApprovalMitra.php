<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalMitra extends Model
{
    use HasFactory;

    protected $table = 'approval_mitra';

    protected $fillable = [
        'id',
        'partner_id', // ganti dengan kolom yang sesuai
        'admin_id',
        'status',
        'comments',
        'created_at',
        'updated_at', // ganti dengan kolom yang sesuai
        // tambahkan kolom lainnya sesuai kebutuhan
    ];

    // Relasi banyak ke satu dengan Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}