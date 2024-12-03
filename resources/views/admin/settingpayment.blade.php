@extends('layouts.main')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
        .btn-logout {
            background-color: #F5F5DC;
            color: #333;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }
        .btn-custom {
            background-color: #F5F5DC;
            color: #333;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin-left: 10px; /* Memberikan jarak antara tombol */
        }
        .nav-tabs .nav-link {
            color: #000;
        }
        .nav-tabs .nav-link.active {
            background-color: #D4AF37;
            color: #000;
        }
        .form-control {
            background-color: #D3D3D3;
        }
        .btn-save {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }
        .footer {
            background-color: #333;
            color: #D4AF37;
            padding: 1rem;
            text-align: center;
        }
        .footer span {
            color: #fff;
        }
    </style>
    
    <div class="container mt-4 flex-grow-1">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#">List Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Aproval Mitra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Setting Payment</a>
            </li>
        </ul>
        <div class="mt-4">
            <h4>Payment</h4>
            <form>
                <div class="mb-3">
                    <label for="namaBank" class="form-label">Nama Bank</label>
                    <input type="text" class="form-control" id="namaBank">
                </div>
                <div class="mb-3">
                    <label for="nomorRekening" class="form-label">Nomor Rekening</label>
                    <input type="text" class="form-control" id="nomorRekening">
                </div>
                <div class="mb-3">
                    <label for="namaRekening" class="form-label">Nama Rekening</label>
                    <input type="text" class="form-control" id="namaRekening">
                </div>
                <button type="submit" class="btn btn-save">Simpan</button>
            </form>
        </div>
    </div>
    @endsection