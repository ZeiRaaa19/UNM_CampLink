<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>CAMPLINK - Edit Data Tenda</title>
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
        .form-control[readonly] {
            background-color: #e9ecef;
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

    <div class="container mt-4 flex-grow-1">
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
        <div class="mt-4">
            <h4>Edit Data Tenda</h4>
            <form>
                <div class="mb-3">
                    <label class="form-label" for="namaTipeCamp">Nama Tipe Camp</label>
                    <input class="form-control" id="namaTipeCamp" readonly type="text" value="Tenda Kapasitas 4 Orang"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="harga">Harga</label>
                    <input class="form-control" id="harga" readonly type="text" value="195.000"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" readonly rows="3">Matras 2 Bed, Toilet Outside (water heater), Termasuk Sarapan (4 pax), Bonfire, Gratis Tiket Masuk Wahana Sekitar Camping</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="jumlahCamp">Jumlah Camp</label>
                    <input class="form-control" id="jumlahCamp" readonly type="text" value="5"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="fotoCamp">Foto Camp</label>
                    <div>
                        <img alt="Foto tenda di area camping dengan latar belakang pepohonan" class="img-thumbnail" height="150" src="https://storage.googleapis.com/a1aa/image/Hn9b9CcEpl4TOheXKKWBbkv89wp3hxm4hkLH75J0RfAvww2TA.jpg" width="200"/>
                        <button class="btn btn-primary mt-2" type="button">Tambah Foto</button>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="button">Tambah Tipe</button>
                </div>
            </form>
        </div>
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