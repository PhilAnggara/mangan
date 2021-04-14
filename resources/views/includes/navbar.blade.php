<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container">
    <a class="navbar-brand navbar-alternate" href="{{ route('home') }}">Mangan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <form class="form-inline nav-search">
        <input class="form-control ml-sm-5" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-info my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>        
      <div class="navbar-nav ml-auto">
        @guest
          <a class="nav-link mr-4" href="{{ route('login') }}">Masuk</a>
          <a class="nav-link" href="{{ url('register') }}">Daftar</a>
        @endguest
        @auth
          <button type="button" class="btn nav-link" data-toggle="modal" data-target="#logoutModal">
            Keluar
          </button>
        @endauth
      </div>
    </div>
  </div>
</nav>