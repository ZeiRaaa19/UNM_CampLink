<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Camplink</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .input-group {
            max-width: 300px; /* Membatasi lebar input group */
        }
        .campcard {
            width: 100%;
        }
        
    </style>
</head>
<body class="bg-light">
    <!-- Header -->
    <header class="bg-dark text-white p-4 d-flex justify-content-between align-items-center">
        <div class="h2 font-weight-bold">CAMPLINK</div>
        <div>
            <button class="btn btn-warning mr-2">Daftar</button>
            <button class="btn btn-warning">Masuk</button>
        </div>
    </header>
    <!-- Search Section -->
<section class="bg-light p-4">
    <div class="container d-flex justify-content-center flex-wrap">
        <div class="input-group mb-3 mx-2">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <input class="form-control" placeholder="Location" type="text"/>
        </div>
        <div class="input-group mb-3 mx-2">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input class="form-control" placeholder="Check-in" type="text"/>
        </div>
        <div class="input-group mb-3 mx-2">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input class="form-control" placeholder="Check-out" type="text"/>
        </div>
        <button class="btn btn-warning mx-1">Search</button>
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
                    <img src="https://storage.googleapis.com/a1aa/image/krJk80B23tIzBNdMrjElFUIGVzkUodAWgNGNperObmvW5x6JA.jpg" class="card-img-top" alt="Camping Ground 1"/>
                    <div class="card-body">
                        <p class="card-text">Camping Ground 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="card mb-4">
                    <img src="https://storage.googleapis.com/a1aa/image/fp9R94kdSnVBZ6x5enx8P48fYaD7MU2TyIJiwwKHNqCklHrnA.jpg" class="card-img-top" alt="Camping Ground 2"/>
                    <div class="card-body">
                        <p class="card-text">Camping Ground 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="card mb-4">
                    <img src="https://storage.googleapis.com/a1aa/image/ioJezAcisB2IPCXkeoCudANKs0QffMyWxDANvKX0clnyKPWPB.jpg" class="card-img-top" alt="Camping Ground 4"/>
                    <div class="card-body">
                        <p class="card-text">Camping Ground 3</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="card mb-4">
                    <img src="https://storage.googleapis.com/a1aa/image/NhhyBT3C0yJYMNdeoMbzGjHclVoiUkPf6WHoVUOOjQTvyj1TA.jpg" class="card-img-top" alt="Camping Ground 5"/>
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


    <!-- Footer -->
    <footer class="bg-dark text-white p-4 mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <div class="h2 font-weight-bold">CAMPLINK</div>
                <p>Platform digital pertama dalam reservasi camping ground di Indonesia.</p>
            </div>
            <div class="d-flex">
                <a class="text-white mr-4" href="#">LAYANAN</a>
                <a class="text-white mr-4" href="#">INFORMASI</a>
                <a class="text-white" href="#">PARTNER</a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>