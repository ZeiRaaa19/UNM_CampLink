<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function approvalMitra()
    {
        // Logika untuk menampilkan halaman approval mitra
        return view('admin.approvalmitra'); // Pastikan Anda memiliki view ini
    }

    public function listTransaksi()
    {
        // Logika untuk menampilkan daftar transaksi
        return view('admin.listtransaksi'); // Pastikan Anda memiliki view ini
    }

    public function report()
    {
        // Logika untuk menampilkan laporan
        return view('admin.report'); // Pastikan Anda memiliki view ini
    }

    public function settingpayment()
    {
        // Logika untuk menampilkan laporan
        return view('admin.settingpayment'); // Pastikan Anda memiliki view ini
    }
}