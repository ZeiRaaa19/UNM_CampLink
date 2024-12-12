<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenda; // Pastikan model Tenda ada
use App\Models\Booking; // Jika Anda menggunakan model Booking

class PartnerController extends Controller
{
    public function dashboard()
    {
        return view('partner.dashboard'); // Pastikan Anda memiliki view ini
    }

    public function listTenda()
    {
        $tendas = Tenda::all(); // Ambil semua data tenda
        return view('partner.listtenda', compact('tendas')); // Ganti dengan view listtenda Anda
    }

    public function editTenda($id)
    {
        $tenda = Tenda::findOrFail($id); // Ambil data tenda berdasarkan ID
        return view('partner.edittenda', compact('tenda')); // Pastikan Anda memiliki view ini
    }

    public function tambahTenda()
    {
        return view('partner.tambahtenda'); // Ganti dengan view untuk form tambah tenda
    }

    public function savetenda(Request $request)
    {
        $request->validate([
            'nama_tipe' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'jumlah_camp' => 'required|integer',
            'fotoCamp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan foto jika ada
        if ($request->hasFile('fotoCamp')) {
            $file = $request->file('fotoCamp');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
        }

        // Simpan data tenda ke database
        Tenda::create([
            'nama_tipe' => $request->nama_tipe,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'jumlah_camp' => $request->jumlah_camp,
            'foto' => isset($filename) ? $filename : null, // Gunakan isset untuk menghindari error jika tidak ada file
        ]);

        return redirect()->route('partner.listtenda')->with('success', 'Data tenda berhasil disimpan.');
    }

    public function dataBooking()
    {
        $bookings = Booking::all(); // Ambil semua data booking
        return view('partner.databooking', compact('bookings')); // Ganti dengan view databooking Anda
    }
}