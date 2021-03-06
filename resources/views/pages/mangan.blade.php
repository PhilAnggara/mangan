@extends('layouts.home')
@section('title', 'Mangan')

@section('content')
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 ztext animate__animated animate__fadeInUp animate__fast">Mangan</h1>
      <p class="lead animate__animated animate__fadeInUp animate__dua">Temukan makanan & minuman terbaik di Manado</p>
      <div class="row justify-content-center animate__animated animate__fadeInUp">
        <form class="form-inline" action="{{ route('pencarian') }}">
          <input name="search" class="form-control" type="search" placeholder="Search" aria-label="Search" autofocus autocomplete="off">
          <button class="btn btn-info my-2 my-sm-0" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>    
    </div>
  </div>
  <!-- End of jumbotron -->

  <!-- Container -->
  <div class="container">

    <!-- Main -->
    <div class="row">
      <div class="col-sm-6 menu mt-3">
        <div class="card shadow h-scale animate__animated animate__fadeIn">
          <img src="{{ url('frontend/images/menu-1.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pergi Makan</h5>
            <p class="card-text">Lihat tempat makan terbaik untuk Anda</p>
            <a href="{{ route('pencarian') }}" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 menu mt-3">
        <div class="card shadow h-scale animate__animated animate__fadeIn">
          <img src="{{ url('frontend/images/menu-2.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nightlife Restoran</h5>
            <p class="card-text">Jelajahi gerai nightlife terbaik di kota Anda</p>
            <a href="{{ route('pencarian') }}" class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
    <!-- End of main -->

    <!-- Favorit -->
    <section class="favorit py-5">
      <div class="row justify-content-center mt-4">
        <h2>Restoran favorit di <span class="ztext">Manado</span></h2>
      </div>
      <div class="row mt-3">
        @foreach ($items as $item)
        <div class="col-sm-4 mt-4">
          <div class="card shadow h-scale">
            <div class="card-body">
              <h5 class="float-left">{{ $item->nama_restoran }}</h5>
              <i class="fas fa-angle-right mt-2 float-right"></i>
              <a href="{{ route('restoran', $item->slug) }}" class="stretched-link"></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- End of favorit-->

  </div>
  <!-- End of container -->
@endsection

@push('addon-script')
  <script>
    var ztxt = new Ztextify(".ztext", {
      depth: "20px",
      layers: 10,
      fade: true,
      direction: "forwards",
      event: "pointer",
      eventRotation: "20deg"
    });
  </script>
@endpush