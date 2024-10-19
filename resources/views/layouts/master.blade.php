<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .login-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-content {
            display: flex;
            align-items: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            /* Biarkan mengambil 100% lebar kontainer */
            max-width: 1200px;
            /* Tentukan maksimal lebar untuk memperbesar ukuran card */
            height: auto;
        }

        .login-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .login-form {
            background-color: white;
            padding: 3rem;
            /* Tambah padding untuk memperbesar form */
            width: 500px;
            /* Sesuaikan lebar form */
        }

        .login-form h2 {
            margin-bottom: 1rem;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="container login-container">
        <div class="row login-content">
            @yield('content')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>