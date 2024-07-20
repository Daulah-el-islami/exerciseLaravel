@extends('layouts.app')

@section('title', 'Login')

@section('header-title', 'Login')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Alamat Email" name="email" value="{{ old('email') }}" required>
            @error('email')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="password" placeholder="Kata Sandi" name="password" required>
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }} name="remember" id="remember">
                <label class="form-check-label" for="remember">
                    Ingat Saya
                </label>
            </div>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Masuk</button>
            atau
            <a href="{{ route('profile.register') }}">Daftar</a>
        </div>
    </form>
@endsection
