@extends('layouts.app')

@section('title', 'Register')

@section('header-title', 'Register')

@section('content')
<form method="POST" action="{{ route('profile.register') }}">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{ old('nama') }}" required autofocus>
        @error('nama')
        <span>{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
        @error('email')
        <span>{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        @error('password')
        <span>{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi password</label>
        <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" required>
        @error('password_confirmation')
        <span>{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
            <button type="submit" class="btn btn-primary">Daftar</button>
            atau
            <a href="{{ route('login') }}">Masuk</a>
        </div>
</form>
@endsection
