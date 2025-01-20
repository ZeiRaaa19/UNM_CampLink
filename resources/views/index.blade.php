@extends('layouts.homepage')
@section('content')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .input-group {
            max-width: 300px;
            /* Membatasi lebar input group */
        }

        .input-group-text {
            font-size: 1.5rem !important;
        }

        .campcard {
            width: 100%;
        }

        .btn-search {
            height: 100%;
            width: auto !important;
        }

        #top-input .icon-input {

        }
    </style>

    <!-- Search Section -->
    <section class="bg-light p-4" id="top-input">
        <div class="container d-flex justify-content-center flex-wrap">
            <div class="input-group mb-3 mx-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-input fas fa-map-marker-alt"></i></span>
                </div>
                <input class="form-control" placeholder="Location" type="text" />
            </div>
            <div class="input-group mb-3 mx-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-input fas fa-calendar-alt"></i></span>
                </div>
                <input class="form-control" placeholder="Check-in" type="text" />
            </div>
            <div class="input-group mb-3 mx-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-input fas fa-calendar-alt"></i></span>
                </div>
                <input class="form-control" placeholder="Check-out" type="text" />
            </div>
            <button class="btn-search btn btn-warning mx-2">Search</button>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container p-4">
        <!-- Featured Section -->
        <section class="campcard">
            <h2 class="h4 font-weight-bold mb-4">Feel at home wherever you go</h2>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="card mb-4">
                        <img src="https://storage.googleapis.com/a1aa/image/krJk80B23tIzBNdMrjElFUIGVzkUodAWgNGNperObmvW5x6JA.jpg"
                            class="card-img-top" alt="Camping Ground 1" />
                        <div class="card-body">
                            <p class="card-text">Camping Ground 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="card mb-4">
                        <img src="https://storage.googleapis.com/a1aa/image/fp9R94kdSnVBZ6x5enx8P48fYaD7MU2TyIJiwwKHNqCklHrnA.jpg"
                            class="card-img-top" alt="Camping Ground 2" />
                        <div class="card-body">
                            <p class="card-text">Camping Ground 2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="card mb-4">
                        <img src="https://storage.googleapis.com/a1aa/image/ioJezAcisB2IPCXkeoCudANKs0QffMyWxDANvKX0clnyKPWPB.jpg"
                            class="card-img-top" alt="Camping Ground 4" />
                        <div class="card-body">
                            <p class="card-text">Camping Ground 3</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="card mb-4">
                        <img src="https://storage.googleapis.com/a1aa/image/NhhyBT3C0yJYMNdeoMbzGjHclVoiUkPf6WHoVUOOjQTvyj1TA.jpg"
                            class="card-img-top" alt="Camping Ground 5" />
                        <div class="card-body">
                            <p class="card-text">Camping Ground 4</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Booking Section -->
        <section class="mt-4">
            <h2 class="h4 font-weight-bold mb-4">Booking made easy</h2>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card p-4 mb-4 text-center">
                        <i class="fas fa-money-bill-wave fa-2x text-gray-500 mb-2"></i>
                        <div class="card-body">
                            <h3 class="font-weight-bold">No hidden fees</h3>
                            <p>Transparent pricing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card p-4 mb-4 text-center">
                        <i class="fas fa-check-circle fa-2x text-gray-500 mb-2"></i>
                        <div class="card-body">
                            <h3 class="font-weight-bold">Instant confirmation</h3>
                            <p>Book with confidence</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card p-4 mb-4 text-center">
                        <i class="fas fa-exchange-alt fa-2x text-gray-500 mb-2"></i>
                        <div class="card-body">
                            <h3 class="font-weight-bold">Flexibility</h3>
                            <p>Free cancellation</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
