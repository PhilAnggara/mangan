@extends('layouts.app')
@section('title', 'Restoran - Mangan')

@section('content')
<div class="container">

  <!-- Gallery -->
  <div class="gallery mt-3">
    <div class="row">
      <div class="col-sm-7">
        <div class="xzoom-container animate__animated animate__fadeInDown animate__faster">
          <img src="{{ url('frontend/images/restaurant1.JPG') }}" class="xzoom"
          id="xzoom-default" xoriginal="{{ url('frontend/images/restaurant-1.jpg') }}">
        </div>
      </div>
      <div class="col-sm-5">
        <div class="xzoom-thumbs">
          <a href="{{ url('frontend/images/restaurant-1.jpg') }}">
            <img src="{{ url('frontend/images/restaurant1.JPG') }}" class="xzoom-gallery animate__animated animate__fadeInRight animate__faster" xpreview="{{ url('frontend/images/restaurant1.JPG') }}">
          </a>
          <a href="{{ url('frontend/images/restaurant-2.jpg') }}">
            <img src="{{ url('frontend/images/restaurant2.JPG') }}" class="xzoom-gallery animate__animated animate__fadeInRight animate__faster" xpreview="{{ url('frontend/images/restaurant2.JPG') }}">
          </a>
          <a href="{{ url('frontend/images/restaurant-3.jpg') }}">
            <img src="{{ url('frontend/images/restaurant3.JPG') }}" class="xzoom-gallery animate__animated animate__fadeInRight animate__faster" xpreview="{{ url('frontend/images/restaurant3.JPG') }}">
          </a>
          <a href="{{ url('frontend/images/restaurant-4.jpg') }}">
            <img src="{{ url('frontend/images/restaurant4.JPG') }}" class="xzoom-gallery animate__animated animate__fadeInRight animate__faster" xpreview="{{ url('frontend/images/restaurant4.JPG') }}">
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End of gallery -->
  
  <!-- Restaurant -->
  <section class="restaurant">
    <div class="row">
      <div class="col-sm-8 animate__animated animate__fadeInLeftBig animate__faster">
        <h2>Warung Bunda & Bar</h2>
        <p class="font-weight-bold text-secondary">Kombos</p>
      </div>
      
      <!-- Rating -->
      <div class="col-sm-4">
        <div class="ratings text-center-sm">
          <span>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star"></i>
          </span>
          <span class="product-rating ml-1">4.6</span>
          <span>/5</span>
          <div>
            <p><i class="border-bottom ml-1">135 Ulasan</i></p>
          </div>
        </div>
    </div>
      <!-- End of rating -->
    </div>

    <!-- Aksi -->
    <div class="aksi mt-3 mb-4">
      <button class="btn btn-info my-2 my-sm-0 mr-1" type="button" data-toggle="modal" data-target="#tambahUlasanModal">
        <i class="far fa-star"></i>
        Tambah Ulasan
      </button>
      <!-- Modal rating-->
      <div class="modal fade" id="tambahUlasanModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="tambahUlasanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tambahUlasanModalLabel">Tambah ulasan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>                  
                <div class="form-group text-center" id="rating-ability-wrapper">
                  <label class="control-label" for="rating">
                  <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                  </label>
                  <h2 class="bold rating-header" style="margin-top: -35px;">
                    <span class="selected-rating">0</span><small> / 5</small>
                  </h2>
                  <button type="button" class="btnrating btn btn-default btn-lg rounded-pill" data-attr="1" id="rating-star-1">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </button>
                  <button type="button" class="btnrating btn btn-default btn-lg rounded-pill" data-attr="2" id="rating-star-2">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </button>
                  <button type="button" class="btnrating btn btn-default btn-lg rounded-pill" data-attr="3" id="rating-star-3">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </button>
                  <button type="button" class="btnrating btn btn-default btn-lg rounded-pill" data-attr="4" id="rating-star-4">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </button>
                  <button type="button" class="btnrating btn btn-default btn-lg rounded-pill" data-attr="5" id="rating-star-5">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </button>
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Ulasan anda" id="ulasan" rows="2"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
              <button type="button" class="btn btn-primary">Kirim</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of modal rating -->

      <a href="https://www.google.com/maps/dir//Warung+BUNDA,+Kairagi+Satu,+Kec.+Mapanget,+Kota+Manado,+Sulawesi+Utara/@1.5023361,124.8717037,199m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x32870ba153402383:0x535f96b750c52565!2m2!1d124.8716941!2d1.5023477?hl=id" target="_blank" class="btn btn-outline-info my-2 my-sm-0 mr-1">
        <i class="fas fa-directions"></i>
        Petunjuk
      </a>
      <button class="btn btn-outline-info my-2 my-sm-0 mr-1 simpan" type="submit">
        <i class="fas fa-bookmark"></i>
        Arsip
      </button>
      <!-- Toast simpan -->
      <div class="toast toast-simpan position-fixed bot-left">
        <div class="toast-body bg-dark text-light">
          <i class="fas fa-bookmark"></i>
          Disimpan ke arsip
        </div>
      </div>
      <!-- End of toast simpan -->        

      <button class="btn btn-outline-info my-2 my-sm-0 mr-1" type="button" data-toggle="modal" data-target="#bagikanModal">
        <i class="fas fa-share"></i>
        Bagi
      </button>
      <!-- Toast salin -->
      <div class="toast toast-salin position-fixed bot-left">
        <div class="toast-body bg-dark text-light">
          <i class="far fa-clone"></i>
          Link disalin ke klip board
        </div>
      </div>
      <!-- End of toast salin -->
      <!-- Modal bagikan -->
      <div class="modal fade" id="bagikanModal" tabindex="-1" aria-labelledby="bagikanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="bagikanModalLabel">Bagikan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pad-50">
              <div class="row justify-content-center">
                <form class="form-inline">
                  <input type="text" class="form-control mb-2 mr-sm-2 bg-light salin-link" value="https://philanggara.github.io/mangan-template/restoran.html" readonly>
                  <button type="button" class="btn btn-dark mb-2 salin"><i class="far fa-clone"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of modal bagikan -->

    <!-- End of aksi -->

    <!-- Content -->
    <div class="row">
      <div class="col-sm-8 mb-2">
        <div class="card shadow">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sekilas</a>
              <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Ulasan</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <!-- Tentang -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Tentang restoran ini</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, dicta! Facilis est dignissimos omnis adipisci laboriosam, veniam sapiente suscipit eveniet quidem alias consectetur quaerat minus nobis quasi necessitatibus expedita culpa similique labore ipsa fugit deleniti aut quibusdam animi. Molestiae velit distinctio perferendis impedit dolores totam rerum, nobis sint veritatis, eos doloribus nulla. Repellendus reprehenderit molestiae tempore facilis illum soluta, voluptatem optio hic, modi veritatis eos commodi iste nisi dolor delectus totam praesentium id eligendi asperiores! Doloremque dignissimos voluptate aut incidunt! Veritatis, tempora! Sapiente vero error amet corporis! Suscipit, aperiam exercitationem? Maxime iure quo voluptatum consectetur veritatis praesentium, cum vero laudantium.</p>
                </div>
              </div>
              <!-- End of tentang -->
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="card">
                <!-- Ulasan -->
                <div class="card-body">
                  <div class="ulasan">
                    <div class="row">
                      <div class="col-sm-4 mt-2">
                        <img src="frontend/images/profile-picture.png" alt="" class="rounded-circle float-left mr-3">
                        <h3>Phil Anggara</h3>
                        <span>1 minggu lalu</span>
                      </div>
                      <div class="col-sm-8">
                        <div class="ratings">
                          <span>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star"></i>
                          </span>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, nam fugiat. Harum alias quasi cumque.</p>
                      </div>
                    </div><hr>
                    <div class="row">
                      <div class="col-sm-4 mt-2">
                        <img src="frontend/images/profile-picture.png" alt="" class="rounded-circle float-left mr-3">
                        <h3>Angga Bawole</h3>
                        <span>3 bulan lalu</span>
                      </div>
                      <div class="col-sm-8">
                        <div class="ratings">
                          <span>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                          </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id vitae eum totam?</p>
                      </div>
                    </div><hr>
                    <div class="row">
                      <div class="col-sm-4 mt-2">
                        <img src="frontend/images/profile-picture.png" alt="" class="rounded-circle float-left mr-3">
                        <h3>Phil Bawole</h3>
                        <span>4 bulan lalu</span>
                      </div>
                      <div class="col-sm-8">
                        <div class="ratings">
                          <span>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star"></i>
                          </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repudiandae cumque molestias ab nobis?</p>
                      </div>
                    </div><hr>
                  </div>
                </div>
                <!-- End of ulasan -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Lokasi</h5>
            <div class="embed-responsive embed-responsive-1by1">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.1117106912757!2d124.87167150214444!3d1.5023387436760274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32870ba153402383%3A0x535f96b750c52565!2sWarung%20BUNDA!5e0!3m2!1sid!2sid!4v1617580937533!5m2!1sid!2sid"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of content -->
  </section>
  <!-- End of restaurant -->

</div>
@endsection

@push('addon-script')
  <script>
    $(document).ready(function () {

      // Xzoom
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomwidth: 500,
        title: false,
        tint: '#333',
        xoffest: 15,
      });

      // Rating
      $(".btnrating").on("click", function (e) {
        var previous_value = $("#selected_rating").val();

        var selected_value = $(this).attr("data-attr");
        $("#selected_rating").val(selected_value);

        $(".selected-rating").empty();
        $(".selected-rating").html(selected_value);

        for (i = 1; i <= selected_value; ++i) {
          $("#rating-star-" + i).toggleClass("btn-outline-warning");
          $("#rating-star-" + i).toggleClass("btn-default");
        }

        for (ix = 1; ix <= previous_value; ++ix) {
          $("#rating-star-" + ix).toggleClass("btn-outline-warning");
          $("#rating-star-" + ix).toggleClass("btn-default");
        }
      });

      // Copy to clipboard
      $(".salin").click(function () {
        $(".salin-link").select();
        document.execCommand("copy");
      });

      // Toast
      $(".salin").click(function () {
        $(".toast-salin").toast({ delay: 3000 });
        $(".toast-salin").toast("show");
      });
      $(".simpan").click(function () {
        $(".toast-simpan").toast({ delay: 3000 });
        $(".toast-simpan").toast("show");
      });

    });
  </script>
@endpush