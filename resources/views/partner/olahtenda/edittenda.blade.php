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

        .form-control[readonly] {
            background-color: #e9ecef;
        }
    </style>

    <div class="container mt-4 flex-grow-1">
        <a href="{{ route('partner.listtenda') }}?tab=pengelolaantenda">
            <button class="btn-kembali btn btn-secondary">kembali</button>
        </a>
        <div class="mt-4">
            <h4 class="title-page my-3 fw-bold">Tambah Data Tenda</h4>
            <form action="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" for="namaTipeCamp">Nama Tipe Camp</label>
                    <input class="form-control" id="namaTipeCamp" type="text" value="Tenda Kapasitas 4 Orang" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="harga">Harga</label>
                    <input class="form-control" id="harga" type="text" value="195000" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3">Matras 2 Buah, Toilet Outside (water heater), Termasuk Sarapan (4 pax), Bonfire, Gratis Tiket Masuk Wahana Satelit Camping</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="jumlahCamp">Jumlah Camp</label>
                    <input class="form-control" id="jumlahCamp" type="text" value="5" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="fotoCamp">Foto Camp</label>
                    <input class="form-control" id="jumlahCamp" type="file" />
                </div>

                {{-- <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <img alt="Foto Camp - Tenda di alam terbuka dengan latar belakang pepohonan dan langit biru"
                            class="me-3" height="100"
                            src="https://storage.googleapis.com/a1aa/image/XoINpibGqCpbKBJDYoBdzmZYgIzwTlfN5sRs2VC7lOfT3w2TA.jpg"
                            width="100" />
                        <button class="btn btn-primary" type="button">Tambah Foto</button>
                    </div>
                </div> --}}

                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
