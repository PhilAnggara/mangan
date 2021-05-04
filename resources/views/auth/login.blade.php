@extends('layouts.log')
@section('title', 'Mangan')

@section('content')
<section class="login">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <div class="card shadow">
          <div class="card-body">
            <h3 class="text-center mb-4">Login - Mangan</h3>
            <form method="POST" action="{{ route('login') }}" class="log">
              @csrf

              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" required autofocus
                oninvalid="this.setCustomValidity('Email belum tepat')"
                oninput="this.setCustomValidity('')">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
                oninvalid="this.setCustomValidity('Password tidak boleh kosong')"
                oninput="this.setCustomValidity('')">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-check mt-1">
                <input class="form-check-input mt-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                  Ingat Saya
                </label>
              </div>

              <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Masuk</button>
                <a href="{{ url('register') }}" class="btn btn-outline-primary">Daftar</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection