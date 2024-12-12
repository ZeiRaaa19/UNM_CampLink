@extends('layouts.main')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Mengatur tinggi minimum body */
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #333;
            padding: 1rem;
        }

        .navbar-brand {
            color: #D4AF37;
            font-weight: bold;
        }

        .navbar-brand span {
            color: #fff;
        }

        .btn-custom {
            background-color: #F5F5DC;
            color: #333;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin-left: 10px;
            /* Memberikan jarak antara tombol */
        }

        .nav-tabs .nav-link {
            color: #000;
        }

        .nav-tabs .nav-link.active {
            background-color: #D4AF37;
            color: #000;
        }

        .footer {
            background-color: #333;
            color: #D4AF37;
            padding: 1rem;
            text-align: center;
            margin-top: auto;
            /* Memastikan footer tetap di bawah */
        }

        .footer span {
            color: #fff;
        }

        .form-control[readonly] {
            background-color: #e9ecef;
        }
    </style>

<div class="container mt-4 flex-grow-1">
    <a href="{{ route('partner.listtenda') }}?tab=pengelolaantenda">
    <button class="btn-kembali btn btn-secondary">Kembali</button>
    </a>
    <div class="mt-4">
        <h4 class="title-page my-3 fw-bold">Tambah Data Tenda</h4>
        <form action="{{ route('partner.savetenda') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="namaTipeCamp">Nama Tipe Camp</label>
                <input class="form-control" id="namaTipeCamp" name="namaTipeCamp" type="text" required />
            </div>
            <div class="mb-3">
                <label class="form-label" for="harga">Harga</label>
                <input class="form-control" id="harga" name="harga" type="text" required />
            </div>
            <div class="mb-3">
                <label class="form-label" for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="jumlahCamp">Jumlah Camp</label>
                <input class="form-control" id="jumlahCamp" name="jumlahCamp" type="text" required />
            </div>
            <div class="mb-3">
                <label class="form-label" for="fotoCamp">Foto Camp</label>
                <input class="form-control" id="fotoCamp" name="fotoCamp" type="file" required />
            </div>

            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
