@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="col-md-6 p-0">
    <!-- Kolom untuk gambar -->
    <img src="{{ asset('images/login-image.jpg') }}" alt="Login Image" class="login-image">
</div>
<div class="col-md-6 login-form">
    <!-- Kolom untuk form login -->
    <h2>Login</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <p class="mt-2 text-center">Belum punya akun? <a href="#">Daftar di sini</a></p>
</div>
@endsection