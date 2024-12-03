@extends('layouts.main')
@section('content')
<style>

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

    </style>

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
    @endsection