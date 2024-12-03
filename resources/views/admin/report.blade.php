@extends('layouts.main')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Mengatur tinggi minimum body */
        }
        .navbar {
            background-color: #333;
            padding: 1rem;
        }
        .navbar-brand {
            color: #D4AF37;
            font-weight: bold;
        }
        .navbar-nav span {
            color: #fff;
        }
        .navbar-nav .nav-link {
            color: #d4af37;
        }
        .btn-logout {
            background-color: #F5F5DC;
            color: #333;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }
        .btn-logout {
            background-color: #e2e6ea;
        }
        .nav-tabs .nav-link.active {
            background-color: #D4AF37;
            color: #000;
        }
        .nav-tabs .nav-link {
            color: #000;
        }
        .card {
            background-color: #add8e6;
            padding: 1rem;
            text-align: center;
            margin: 1rem;
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
        .btn-custom {
            background-color: #F5F5DC;
            color: #333;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin-left: 10px; /* Memberikan jarak antara tombol */
        }
    </style>


    <div class="container mt-4 flex-grow-1"> <!-- flex-grow-1 untuk mengisi ruang yang tersedia -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#">List Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Aproval Mitra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Setting Payment</a>
            </li>
        </ul>
        <div class="mt-4">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="card">
                        <h5>Total Transaksi</h5>
                        <h3>5000</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h5>Total Transaksi hari ini</h5>
                        <h3>5000</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h5>Total Transaksi minggu ini</h5>
                        <h3>5000</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h5>Total Transaksi bulan ini</h5>
                        <h3>5000</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
