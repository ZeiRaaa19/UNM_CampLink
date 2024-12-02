<html>

<head>
    <title>Order Detail - CAMPLINK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #333;
            padding: 10px;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar .btn {
            background-color: #f8f9fa;
            color: #333;
            border: none;
            margin-left: 10px;
        }

        .content {
            padding: 20px;
        }

        .order-detail,
        .payment-detail {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .order-detail h5,
        .payment-detail h5 {
            font-weight: bold;
        }

        .order-detail table,
        .payment-detail table {
            width: 100%;
        }

        .order-detail table td,
        .payment-detail table td {
            padding: 5px 0;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CAMPLINK</a>
            <div class="d-flex">
                <button class="btn btn-outline-light me-2">Profil</button>
                <button class="btn btn-outline-light">Keluar</button>
            </div>
        </div>
    </nav>
    <div class="content container">
        <div class="row">
            <div class="col-12">
                <button class="btn btn-light mb-3">Kembali Pilih Tipe Camp</button>
            </div>
            <div class="col-md-8">
                <div class="order-detail">
                    <h5>Order Detail</h5>
                    <table>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Jl. Kebon Jeruk Raya No.27, Jakarta Barat, DKI Jakarta, Indonesia</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>John Doe</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>john.doe@example.com</td>
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td>+62 812 3456 7890</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>20 Oktober 2023</td>
                        </tr>
                        <tr>
                            <td>Durasi</td>
                            <td>:</td>
                            <td>3 Hari</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-detail">
                    <h5>Detail Pembayaran</h5>
                    <table>
                        <tr>
                            <td>Tenda Kapasitas 6 Orang</td>
                            <td>IDR 235.000</td>
                        </tr>
                        <tr>
                            <td>Biaya Layanan</td>
                            <td>IDR 5.000</td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <td><strong>IDR 240.000</strong></td>
                        </tr>
                    </table>
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" value="" id="termsCheck">
                        <label class="form-check-label" for="termsCheck">
                            Saya menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan
                                Privasi</a>
                        </label>
                    </div>
                    <button class="btn btn-primary mt-3 w-100">Lanjutkan Pembayaran</button>
                </div>
            </div>
            <div class="col-12">
                <div class="order-detail">
                    <h5>Detail Pemesan</h5>
                    <table>
                        <tr>
                            <td>Nama Pemesan</td>
                            <td>:</td>
                            <td>John Doe</td>
                        </tr>
                        <tr>
                            <td>Email Pemesan</td>
                            <td>:</td>
                            <td>john.doe@example.com</td>
                        </tr>
                        <tr>
                            <td>Telepon Pemesan</td>
                            <td>:</td>
                            <td>+62 812 3456 7890</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>CAMPLINK - Platform sewa peralatan dalam mencari camping ground</p>
        <a href="#">KEMBALI</a>
    </div>
</body>

</html>
