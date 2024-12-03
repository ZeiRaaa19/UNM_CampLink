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
        .nav-tabs .nav-link {
            color: #000;
        }
        .nav-tabs .nav-link.active {
            background-color: #D4AF37;
            color: #000;
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .btn-accept {
            background-color: #28a745;
            color: white;
        }
        .btn-reject {
            background-color: #dc3545;
            color: white;
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
        .btn-custom {
            background-color: #F5F5DC;
            color: #333;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CAMP<span>LINK</span></a>
            <div class="ms-auto">
                <button class="btn btn-custom me-2">Profil</button>
                <button class="btn btn-custom">Keluar</button>
            </div>
        </div>
    </nav> --}}

    <div class="container mt-4 flex-grow-1"> <!-- flex-grow-1 untuk mengisi ruang yang tersedia -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#">List Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Aproval Mitra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Setting Payment</a>
            </li>
        </ul>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Mitra</th>
                    <th>Nama Mitra</th>
                    <th>Alamat Mitra</th>
                    <th>Nama Pemilik</th>
                    <th>Nomor Izin Usaha</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>001</td>
                    <td>Mitra A</td>
                    <td>Alamat A</td>
                    <td>Pemilik A</td>
                    <td>123456</td>
                    <td><button class="btn btn-accept">Terima</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>002</td>
                    <td>Mitra B</td>
                    <td>Alamat B</td>
                    <td>Pemilik B</td>
                    <td>654321</td>
                    <td><button class="btn btn-reject">Tolak</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>003</td>
                    <td>M itra C</td>
                    <td>Alamat C</td>
                    <td>Pemilik C</td>
                    <td>789012</td>
                    <td><button class="btn btn-accept">Terima</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>004</td>
                    <td>Mitra D</td>
                    <td>Alamat D</td>
                    <td>Pemilik D</td>
                    <td>345678</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
    {{-- <footer class="footer mt-5">
        <p>CAMP<span>LINK</span></p>
        <p>Platform digital pertama dalam reservasi camping ground di Indonesia.</p>
    </footer>
</body>
</html> --}}