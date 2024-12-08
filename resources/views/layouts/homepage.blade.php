<!DOCTYPE html>
<html lang="en">

<head>
    <title>CampLink</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif !important;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #333;
            color: white;
            height: 5rem;
        }

        .navbar-brand {
            color: white;
        }

        .nav-btn {
            background-color: #FDFBD4;
            color: #333;
        }

        .nav-btn:hover {
            background-color: #878672;
            color: white;
        }

        .content {
            padding: 20px;
        }

        #hero .main-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #hero .side-img {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }

        #hero .buttom-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #camps img {
            width: 300px;
            height: 200px;
            object-fit: cover;
        }

        #camps .info2 h5 {
            font-size: 13px;
            font-weight: 200;
            line-height: 15.73px;
            text-align: left;
        }

        #camps .info2 h4 {
            color: #319876;
            font-size: 13px;
            font-weight: 700;
            line-height: 15.73px;
            text-align: left;
        }

        #camps .info2 p .price {
            font-size: 20px;
            font-weight: 700;
            line-height: 24.2px;
            text-align: left;
        }

        #recomendation .section-title {
            font-size: 20px;
            font-weight: 800;
            line-height: 19.36px;
            margin-bottom: 2rem;
        }

        #recomendation img {
            width: 186px;
            height: 98px;
            object-fit: cover;
        }

        .footer {
            background-color: #333;
            color: #D4AF37;
            padding: 1rem;
            text-align: center;
            margin-top: auto;
            /* Memastikan footer tetap di bawah */
        }

        .footer a {
            color: #00aaff;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/CAMPLINK.png') }}" alt="">
            </a>
            <div class="ms-auto">
                <button class="btn nav-btn me-2">
                    Login
                </button>
                <button class="btn nav-btn">
                    Daftar
                </button>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer class="footer text-center">
        <div class="container">
            <p>
                © 2024 CAMPLINK - Platform digital pertama dalam reservasi camping ground di Indonesia.
            </p>
        </div>
    </footer>
</body>

</html>
