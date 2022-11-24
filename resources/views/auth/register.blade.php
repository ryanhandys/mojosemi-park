@extends('layouts.main')

@section('content')
<main class="form-signin container w-25 m-auto">
    <form action="" method="POST" class="mb-3">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Daftar Dong</h1>
        @csrf
    
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Anda">
            <label for="name">Nama</label>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email Anda">
            <label for="email">Email</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password Anda">
            <label for="password">Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Konfirmasi Password">
            <label for="password_confirmation">Konfirmasi Password</label>
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>

    </form>
    <div>
      <span>Sudah Punya Akun?</span> <a href="{{ route('login') }}">Masuk</a>
    </div>
</main>
@endsection
