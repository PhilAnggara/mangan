@extends('layouts.log')
@section('title', 'Mangan')

@section('content')
<section class="register">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <div class="card shadow">
          <div class="card-body">
            <h3 class="text-center">Register - Mangan</h3>
            <form class="log" method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="off" required autofocus
                oninvalid="this.setCustomValidity('Nama belum diisi')"
                oninput="this.setCustomValidity('')">
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" required
                oninvalid="this.setCustomValidity('Email belum sesuai')"
                oninput="this.setCustomValidity('')">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required
                oninvalid="this.setCustomValidity('Password belum dimasukan')"
                oninput="this.setCustomValidity('')">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password-confirm">Konfirmasi Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                oninvalid="this.setCustomValidity('Password belum dimasukan')"
                oninput="this.setCustomValidity('')">
              </div>

              <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection