@extends('layouts.main')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Mengatur tinggi minimum body */
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
    </style>

        <div class="container mt-4 flex-grow-1"> <!-- flex-grow-1 untuk mengisi ruang yang tersedia -->
            
            <div class="partner-tabs">
                @include('layouts.partner')
            </div>

            <div class="mt-4">
                <h2>Data Booking</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Booking</th>
                            <th>ID Pelanggan</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Keluar</th>
                            <th>Total Biaya</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>0001</td>
                            <td>1001</td>
                            <td>01 Nov 2024</td>
                            <td>02 Nov 2024</td>
                            <td>195,000</td>
                            <td><span class="status-booking">Booking</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>0002</td>
                            <td>1002</td>
                            <td>01 September 2024</td>
                            <td>01 September 2024</td>
                            <td>195,000</td>
                            <td><span class="status-selesai">Selesai</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>0003</td>
                            <td>1003</td>
                            <td>05 November 2024</td>
                            <td>06 November 2024</td>
                            <td>250,000</td>
                            <td><span class="status-booking">Booking</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>0004</td>
                            <td>1004</td>
                            <td>10 November 2024</td>
                            <td>12 November 2024</td>
                            <td>300,000</td>
                            <td><span class="status-selesai">Selesai</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
