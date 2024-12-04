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

        .table img {
            width: 100px;
            height: auto;
        }

        .table th,
        .table td {
            vertical-align: middle;
            /* Menjaga agar konten di tengah */
        }
    </style>




    <div class="container my-4 flex-grow-1">
        <div class="partner-tabs">
            @include('layouts.partner')
        </div>
        </ul>
        <h3 class="mt-4">Data Tenda Camping</h3>
        <p>
            <a href="{{ route('partner.tambahtenda') }}" class="btn btn-primary">+ Tambah Tipe</a>
        </p>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tipe</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tenda Kapasitas 4 Orang</td>
                    <td>195.000</td>
                    <td>Matras 2 Bed, Toilet Outdoor, View Hutan, Termasuk Sarapan, BB (1 pax), Bonfire, Welcome Drink,
                        Tiket Masuk Wisata Sekitar Camping</td>
                    <td>
                        <img alt="Tenda Kapasitas 4 Orang"
                            src="https://storage.googleapis.com/a1aa/image/QXJzmkM6P46FP9l4MPinMyIa7Wn8gcHidawpmecjTeA9Bx2TA.jpg" />
                    </td>
                    <td>
                        <div class="btn-aksi d-flex justify-content-between gap-1">
                            <a href="{{ route('partner.edittenda') }}" type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                            <a href="#" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                Hapus</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tenda Kapasitas 6 Orang</td>
                    <td>255.000</td>
                    <td>Matras 2 Bed, Toilet Outdoor, View Hutan, Termasuk Sarapan, BB (1 pax), Bonfire, Welcome Drink,
                        Tiket Masuk Wisata Sekitar Camping</td>
                    <td>
                        <img alt="Tenda Kapasitas 6 Orang"
                            src="https://storage.googleapis.com/a1aa/image/k0fXYcadDvRoXKqlMFJS5lUIEJobDPzB5VmocXbooAmfBx2TA.jpg" />
                    </td>
                    <td>
                        <div class="btn-aksi d-flex justify-content-between gap-1">
                            <a href="{{ route('partner.edittenda') }}" type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                            <a href="#" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                Hapus</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
