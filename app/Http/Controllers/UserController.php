<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Pastikan model Booking ada
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profil()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        return view('user.profil', compact('user')); // Pastikan Anda memiliki view ini
    }

    public function index()
    {
        // Menampilkan dashboard user
        return view('user.index'); // Ganti dengan view dashboard user Anda
    }

    public function invoice()
    {
        // Logika untuk menampilkan invoice pengguna
        $invoices = Invoice::where('user_id', auth()->id())->get(); // Ambil invoice berdasarkan pengguna yang login
        return view('user.invoice', compact('invoices')); // Ganti dengan view invoice Anda
    }

    public function bookingCamp(Request $request)
    {
        // Logika untuk melakukan booking camp baru
        $request->validate([
            'camp_id' => 'required|exists:camps,id',
            'tanggal_masuk' => 'required|date',
            'tanggal_keluar' => 'required|date|after:tanggal_masuk',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'camp_id' => $request->camp_id,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar,
            // Tambahkan kolom lain sesuai kebutuhan
        ]);

        return redirect()->route('user.booking')->with('success', 'Booking berhasil dibuat.');
    }

}
