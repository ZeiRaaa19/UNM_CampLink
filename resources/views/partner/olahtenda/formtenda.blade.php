<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
        CAMPLINK - Data Tenda Camping
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
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
        .table img {
            width: 100px;
            height: auto;
        }
        .table th, .table td {
            vertical-align: middle; /* Menjaga agar konten di tengah */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CAMP<span>LINK</span></a>
            <div class="ms-auto">
                <button class="btn btn-custom me-2">Profil</button>
                <button class="btn btn-custom">Keluar</button>
            </div>
        </div>
    </nav>

    <div class="container my-4 flex-grow-1">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Pengelolaan Tenda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Data Booking</a>
            </li>
        </ul>
        <h3 class="mt-4">Data Tenda Camping</h3>
        <p>
            <a href="#" class="btn btn-primary">+ Tambah Tipe</a>
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
                    <td >Tenda Kapasitas 4 Orang</td>
                    <td>195.000</td>
                    <td>Matras 2 Bed, Toilet Outdoor, View Hutan, Termasuk Sarapan, BB (1 pax), Bonfire, Welcome Drink, Tiket Masuk Wisata Sekitar Camping</td>
                    <td>
                        <img alt="Tenda Kapasitas 4 Orang" src="https://storage.googleapis.com/a1aa/image/QXJzmkM6P46FP9l4MPinMyIa7Wn8gcHidawpmecjTeA9Bx2TA.jpg"/>
                    </td>
                    <td>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tenda Kapasitas 6 Orang</td>
                    <td>255.000</td>
                    <td>Matras 2 Bed, Toilet Outdoor, View Hutan, Termasuk Sarapan, BB (1 pax), Bonfire, Welcome Drink, Tiket Masuk Wisata Sekitar Camping</td>
                    <td>
                        <img alt="Tenda Kapasitas 6 Orang" src="https://storage.googleapis.com/a1aa/image/k0fXYcadDvRoXKqlMFJS5lUIEJobDPzB5VmocXbooAmfBx2TA.jpg"/>
                    </td>
                    <td>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="footer mt-5">
        <div class="container">
            <p>CAMP<span>LINK</span></p>
            <p>Platform digital pertama dalam reservasi camping ground di Indonesia.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Y5q5n5hb7ie1F6LrN9I6N9+8w5y5" crossorigin="anonymous"></script>
</body>
</html>