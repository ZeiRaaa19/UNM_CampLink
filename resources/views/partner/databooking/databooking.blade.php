<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
        CAMPLINK - Data Booking
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
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

    <div class="container mt-4 flex-grow-1"> <!-- flex-grow-1 untuk mengisi ruang yang tersedia -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pengelolaan Tenda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Data Booking</a> <!-- Data Booking yang aktif -->
            </li>
        </ul>

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

    <footer class="footer mt-5">
        <p>CAMP<span>LINK</span></p>
        <p>Platform digital pertama dalam reservasi camping ground di Indonesia.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Y5q5n5hb7ie1F6LrN9I6N9+8w5y5" crossorigin="anonymous"></script>
</body>
</html>