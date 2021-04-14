<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ url('frontend/images/favicon.png') }}">
  <title>@yield('title')</title>

  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')

</head>
<body>

	@include('includes.navbar')
  @yield('content')
  @include('includes.footer')

  <!-- Logout modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda Ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Tekan tombol "Keluar" untuk mengakhiri sesi saat ini.</div>
        <div class="modal-footer">
          <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
            <button class="btn btn-info" type="submit">Keluar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End of logout moadl -->

  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')
  
</body>
</html>