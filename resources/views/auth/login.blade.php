@extends('layouts.master')

@section('title', 'Login')

@section('content')

<!--responsifny-->
<style>
    @media (max-width: 768px) {
        .login-content {
            flex-direction: column;
            max-width: 100%;
        }

        .login-form {
            width: 100%;
            padding: 2rem;
        }
    }
</style>
<div class="col-md-6 p-0">
    <!-- Kolom untuk gambar -->
    <img src="{{ asset('images/login-image.jpg') }}" alt="Login Image" class="login-image">
</div>
<div class="col-md-6 login-form">
    <!-- Kolom untuk form login -->
    <h1>Login</h1>
    <div class="text-center mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 150px;">
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST" id="login-form">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required
                placeholder="Masukkan email yang valid">
            <div class="invalid-feedback">
                Harap masukkan email yang benar. Contoh: name@example.com
            </div>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" required minlength="8"
                    placeholder="Masukkan password (minimal 8 karakter)">
                <div class="input-group-append">
                    <span class="input-group-text" id="toggle-password" style="cursor: pointer;">
                        <i class="fas fa-eye" id="password-icon"></i>
                    </span>
                </div>
                <div class="invalid-feedback">
                    Password harus minimal 8 karakter.
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-login btn-block">Login</button>
    </form>
</div>

@endsection