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

        .table th,
        .table td {
            border: 1px solid #ddd;
            text-align: center;
        }

        .status-booking {
            background-color: green;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .status-selesai {
            background-color: blue;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .footer {
            background-color: #333;
            color: #D4AF37;
            padding: 1rem;
            text-align: center;
            margin-top: auto;
            /* Menjaga footer tetap di bawah */
        }

        .footer span {
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
    </style>

    <div class="container mt-4 flex-grow-1">
        <div class="admin-navtab">
            @include('layouts.admin')
        </div>

        <table class="table mt-3">
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
                    <td>01 Nov 2024</td>
                    <td></td>
                    <td><span class="status-booking">Booking</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>0002</td>
                    <td>1002</td>
                    <td>11111</td>
                    <td>11111</td>
                    <td>1111</td>
                    <td><span class="status-selesai">Selesai</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>0003</td>
                    <td>1003</td>
                    <td>02 Nov 2024</td>
                    <td>03 Nov 2024</td>
                    <td>500000</td>
                    <td><span class="status-booking">Booking</span></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>0004</td>
                    <td>1004</td>
                    <td>04 Nov 2024</td>
                    <td>05 Nov 2024</td>
                    <td>750000</td>
                    <td><span class="status-selesai">Selesai</span></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>0005</td>
                    <td>1005</td>
                    <td>06 Nov 2024</td>
                    <td>07 Nov 2024</td>
                    <td>300000</td>
                    <td><span class="status-booking">Booking</span></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
