@extends('layouts.main')

@section('content')
<main class="form-signin container w-25 m-auto">
    <form action="" method="POST" class="mb-3">
        @csrf
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
    </form>
    <div>
      <span>Belum Punya Akun?</span> <a href="{{ route('register') }}">Daftar</a>
    </div>
  </main>
@endsection
