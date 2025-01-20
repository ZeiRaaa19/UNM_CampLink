<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Camplink Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        .custom-img {
            max-width: 60%; /* Maksimal lebar 60% dari kontainer */
            height: auto; /* Tinggi otomatis untuk menjaga rasio aspek */
        }
    </style>
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="d-flex justify-content-between" style="width: 80%; max-width: 800px;">
        <!-- Left Side: Image and Logo -->
        <div class="d-flex flex-column align-items-center">
            <div class="bg-dark text-white px-4 py-2 mb-4 text-center">
                <span class="h4 font-weight-bold">CAMP</span>
                <span class="h4 font-weight-light">LINK</span>
            </div>
            <img alt="gambar website desktop cbooking camping adventure" class="custom-img" src="https://storage.googleapis.com/a1aa/image/TuaHTU6Q386mHVFaYQ92BdXV5HQAGwdXejef1wtBJ5kqQFrnA.jpg"/>
        </div>
        <!-- Right Side: Registration Form -->
        <div class="d-flex flex-column" style="width: 100%;">
            <h2 class="h4 font-weight-bold mb-4 text-center">REGISTER</h2>
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" id="username" name="username" placeholder="username" type="text" required/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" placeholder="Password" type="password" required/>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" type="password" required/>
                </div>
                <div class="mt-5 d-flex justify-content-between align-items-center">
                    <a class="text-dark" href="{{ route('login.view') }}">LOGIN</a>
                    <button type="submit" class="btn btn-primary">REGISTER</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>