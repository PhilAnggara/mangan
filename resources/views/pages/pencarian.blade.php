@extends('layouts.app')
@section('title', 'Pencarian - Mangan')

@section('content')
<section class="pencarian">
  <!-- Container -->
  <div class="container">

    <!-- Daftar Pencarian -->
    <div class="daftar mt-4">
      <h2>Restoran di Manado</h2>
      <div class="row mt-4">

        <!-- Filter -->
        <div class="col-md-3 filter-col pr-md-1">
          <div class="card mb-sm-2 mb-2 shadow">
            <div class="card-body">
              <h4>Filter</h4>
              <hr>
              <div class="filter-group">
                <h5>Urutkan</h5>
                <form class="filter">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="popularitas" checked>
                    <label class="form-check-label" for="popularitas">
                      Popularitas - tinggi ke rendah
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="peringkat">
                    <label class="form-check-label" for="peringkat">
                      Peringkat - tinggi ke rendah
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input rad" type="radio" name="biaya" value="" id="biaya">
                    <label class="form-check-label" for="biaya">
                      Biaya - tinggi ke rendah
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input rad" type="radio" name="biaya" value="" id="biaya2">
                    <label class="form-check-label" for="biaya2">
                      Biaya - rendah ke tinggi
                    </label>
                  </div>
                </form>
              </div>
              <div class="filter-group mt-3">
                <h5>Kategori</h5>
                <form class="filter">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="k1">
                    <label class="form-check-label" for="k1">
                      Makan di luar
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="k2">
                    <label class="form-check-label" for="k2">
                      Restoran Pesan Antar
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="k3">
                    <label class="form-check-label" for="k3">
                      Bar dan Nightlife
                    </label>
                  </div>
                </form>
              </div>
              <div class="filter-group mt-3">
                <h5>Filter lainnya</h5>
                <form class="filter">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="l1">
                    <label class="form-check-label" for="l1">
                      Kartu kredit
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="l2">
                    <label class="form-check-label" for="l2">
                      Vegetarian
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="l3">
                    <label class="form-check-label" for="l3">
                      Wifi
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="l4">
                    <label class="form-check-label" for="l4">
                      Alkohol Tersedia
                    </label>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End of filter -->

        <div class="col-md-9 pl-sm-1">

          <div class="card mb-2">
            <div class="card-body py-2 pl-4 shadow">
              <div class="row">
                <a href="{{ route('restoran') }}">
                  <img data-tilt data-tilt-scale="1.05" class="rounded mr-3" src="{{ url('frontend/images/restaurant1.JPG') }}">
                </a>
                <div class="d-inline mt-sm-2">
                  <a href="{{ route('restoran') }}">
                    <h3>Nama Restoran</h3>
                  </a>
                  <div class="ratings text-center-sm">
                    <span>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="product-rating ml-1">4.6</span>
                    <span class="pengulas">(135 Ulasan)</span>
                    <p class="alamat">Alamat Restoran</p>
                  </div>
                </div>
                <!-- <div class="d-inline mt-2 ml-5 bg-dark">
                </div> -->
              </div>
            </div>
          </div>

          <div class="card mb-2">
            <div class="card-body py-2 pl-4 shadow">
              <div class="row">
                <a href="{{ route('restoran') }}">
                  <img data-tilt data-tilt-scale="1.05" class="rounded mr-3" src="{{ url('frontend/images/restaurant2.JPG') }}">
                </a>
                <div class="d-inline mt-2">
                  <a href="{{ route('restoran') }}">
                    <h3>Nama Restoran</h3>
                  </a>
                  <div class="ratings text-center-sm">
                    <span>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="product-rating ml-1">4.6</span>
                    <span class="pengulas">(135 Ulasan)</span>
                    <p class="alamat">Alamat Restoran</p>
                  </div>
                </div>
                <!-- <div class="d-inline mt-2 ml-5 bg-dark">
                </div> -->
              </div>
            </div>
          </div>

          <div class="card mb-2">
            <div class="card-body py-2 pl-4 shadow">
              <div class="row">
                <a href="{{ route('restoran') }}">
                  <img data-tilt data-tilt-scale="1.05" class="rounded mr-3" src="{{ url('frontend/images/restaurant3.JPG') }}">
                </a>
                <div class="d-inline mt-2">
                  <a href="{{ route('restoran') }}">
                    <h3>Nama Restoran</h3>
                  </a>
                  <div class="ratings text-center-sm">
                    <span>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="product-rating ml-1">4.6</span>
                    <span class="pengulas">(135 Ulasan)</span>
                    <p class="alamat">Alamat Restoran</p>
                  </div>
                </div>
                <!-- <div class="d-inline mt-2 ml-5 bg-dark">
                </div> -->
              </div>
            </div>
          </div>

          <div class="card mb-2">
            <div class="card-body py-2 pl-4 shadow">
              <div class="row">
                <a href="{{ route('restoran') }}">
                  <img data-tilt data-tilt-scale="1.05" class="rounded mr-3" src="{{ url('frontend/images/restaurant4.JPG') }}">
                </a>
                <div class="d-inline mt-2">
                  <a href="{{ route('restoran') }}">
                    <h3>Nama Restoran</h3>
                  </a>
                  <div class="ratings text-center-sm">
                    <span>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="product-rating ml-1">4.6</span>
                    <span class="pengulas">(135 Ulasan)</span>
                    <p class="alamat">Alamat Restoran</p>
                  </div>
                </div>
                <!-- <div class="d-inline mt-2 ml-5 bg-dark">
                </div> -->
              </div>
            </div>
          </div>

          <div class="card mb-2">
            <div class="card-body py-2 pl-4 shadow">
              <div class="row">
                <a href="{{ route('restoran') }}">
                  <img data-tilt data-tilt-scale="1.05" class="rounded mr-3" src="{{ url('frontend/images/restaurant1.JPG') }}">
                </a>
                <div class="d-inline mt-2">
                  <a href="{{ route('restoran') }}">
                    <h3>Nama Restoran</h3>
                  </a>
                  <div class="ratings text-center-sm">
                    <span>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="product-rating ml-1">4.6</span>
                    <span class="pengulas">(135 Ulasan)</span>
                    <p class="alamat">Alamat Restoran</p>
                  </div>
                </div>
                <!-- <div class="d-inline mt-2 ml-5 bg-dark">
                </div> -->
              </div>
            </div>
          </div>

          <div class="card mb-2">
            <div class="card-body py-2 pl-4 shadow">
              <div class="row">
                <a href="{{ route('restoran') }}">
                  <img data-tilt data-tilt-scale="1.05" class="rounded mr-3" src="{{ url('frontend/images/restaurant2.JPG') }}">
                </a>
                <div class="d-inline mt-2">
                  <a href="{{ route('restoran') }}">
                    <h3>Nama Restoran</h3>
                  </a>
                  <div class="ratings text-center-sm">
                    <span>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="product-rating ml-1">4.6</span>
                    <span class="pengulas">(135 Ulasan)</span>
                    <p class="alamat">Alamat Restoran</p>
                  </div>
                </div>
                <!-- <div class="d-inline mt-2 ml-5 bg-dark">
                </div> -->
              </div>
            </div>
          </div>

          <div class="card mb-2">
            <div class="card-body py-2 pl-4 shadow">
              <div class="row">
                <a href="{{ route('restoran') }}">
                  <img data-tilt data-tilt-scale="1.05" class="rounded mr-3" src="{{ url('frontend/images/restaurant3.JPG') }}">
                </a>
                <div class="d-inline mt-2">
                  <a href="{{ route('restoran') }}">
                    <h3>Nama Restoran</h3>
                  </a>
                  <div class="ratings text-center-sm">
                    <span>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="product-rating ml-1">4.6</span>
                    <span class="pengulas">(135 Ulasan)</span>
                    <p class="alamat">Alamat Restoran</p>
                  </div>
                </div>
                <!-- <div class="d-inline mt-2 ml-5 bg-dark">
                </div> -->
              </div>
            </div>
          </div>

          <div class="card mb-2">
            <div class="card-body py-2 pl-4 shadow">
              <div class="row">
                <a href="{{ route('restoran') }}">
                  <img data-tilt data-tilt-scale="1.05" class="rounded mr-3" src="{{ url('frontend/images/restaurant4.JPG') }}">
                </a>
                <div class="d-inline mt-2">
                  <a href="{{ route('restoran') }}">
                    <h3>Nama Restoran</h3>
                  </a>
                  <div class="ratings text-center-sm">
                    <span>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="product-rating ml-1">4.6</span>
                    <span class="pengulas">(135 Ulasan)</span>
                    <p class="alamat">Alamat Restoran</p>
                  </div>
                </div>
                <!-- <div class="d-inline mt-2 ml-5 bg-dark">
                </div> -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End of daftar pencarian -->

  </div>
  <!-- End of container -->
</section>
@endsection

@push('addon-script')
  
@endpush