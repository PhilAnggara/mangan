<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Mangan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        @guest
          <a class="nav-item nav-link btn btn-outline-primary tombol mr-2 px-3 mt-2" href="{{ route('login') }}">Masuk</a>
          <a class="nav-item nav-link btn btn-primary text-white tombol mr-2 px-3 mt-2" href="{{ route('register') }}">Daftar</a>          
        @endguest
        @auth
          <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="nav-item nav-link btn btn-outline-primary tombol px-3 mt-2" type="submit">Keluar</button>
          </form>
        @endauth
      </div>
    </div>
  </div>
</nav>