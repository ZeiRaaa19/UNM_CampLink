<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai dengan konvensi Laravel, Anda bisa mendefinisikannya
    protected $table = 'admins';

    // Jika Anda ingin mengizinkan mass assignment, tentukan kolom yang bisa diisi
    protected $fillable = [
        'id', // ganti dengan kolom yang sesuai
        'admin_id',
        'report_type',
        'description',
        'created_at',
        'updated_at',
        
         // ganti dengan kolom yang sesuai
        // tambahkan kolom lainnya sesuai kebutuhan
    ];

    // Relasi satu ke banyak dengan Report
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    // Relasi satu ke banyak dengan ApprovalMitra
    public function approvalMitra()
    {
        return $this->hasMany(ApprovalMitra::class);
    }
}