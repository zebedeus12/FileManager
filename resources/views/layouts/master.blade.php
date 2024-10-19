<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--style interface-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--style font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">

    <!--icon-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
            max-width: 1200px;
            height: auto;
        }

        .login-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .login-form {
            font-family: "EB Garamond", serif;
            background-color: white;
            padding: 3rem;
            width: 500px;
        }

        .login-form img {
            display: block;
            margin: 0 auto;
        }

        .login-form h1 {
            margin-bottom: 1rem;
            text-align: center;
            font-family: "EB Garamond", serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }

        .btn-login {
            background-color: white;
            color: #333;
            border: 1px solid #333;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-login:hover,
        .btn-login:focus,
        .btn-login:active {
            background-color: #28a745;
            color: white;
            border-color: #28a745;
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

<script>
    // JavaScript untuk toggle visibility password
    document.getElementById('toggle-password').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        const passwordIcon = document.getElementById('password-icon');

        // Toggle tipe input antara password dan text
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    });
</script>

</html>