@extends('layouts.main')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Mengatur tinggi minimum body */
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
            margin-left: 10px; /* Memberikan jarak antara tombol */
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
            margin-top: auto; /* Memastikan footer tetap di bawah */
        }
        .footer span {
            color: #fff;
        }
        .content {
            padding: 20px;
            flex-grow: 1; /* Memastikan konten mengisi ruang yang tersedia */
        }
        .card-custom {
            background-color: #d3d3d3;
            padding: 20px;
            margin: 10px 0;
        }
        .highlight {
            background-color: #ffff00;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
    </style>

    <div class="container mt-4 flex-grow-1">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pengelolaan Tenda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Data Booking</a>
            </li>
        </ul>
        
        <div class="content">
            <h2>Dashboard</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-custom text-center">
                        <h5>Total Pendapatan</h5>
                        <p>Rp 30.000.000</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-custom text-center">
                        <h5>Total Transaksi</h5>
                        <p>1500</p>
                    </div>
                </div>
            </div>
            <div class="highlight">
                Booking 2
            </div>
        </div>
    </div>

    @endsection