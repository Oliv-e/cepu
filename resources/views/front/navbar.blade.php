@section('navbar')
<nav class="text-white">
  <div class="d-inline-flex container-fluid pt-4 ps-5">
    <span class="navbar-brand mb-0 h1 fs-2">CEPU</span>
    <div class="ps-5 pt-3 me-auto">
        <a class="text-decoration-none text-white fw-bold" href="">TENTANG CEPU!</a>
        <a class="ps-5 text-decoration-none text-white fw-bold" href="">STATISTIK</a>
    </div>
    <div class="ps-5 pt-3 pe-5 d-flex">
      @guest
        @if (Route::has('login'))
          <a class="text-decoration-none text-white fw-bold" href="{{ route('login') }}">LOGIN</a>
        @endif
        @if (Route::has('register'))
          <a class="ms-5 text-decoration-none text-white fw-bold" href="{{ route('register') }}">REGISTER</a>
        @endif
      @else
        <div class="dropdown">
          <a href="#" class="dropdown-toggle" type="button" id="accountmenu" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="accountmenu">
            <li><a class="dropdown-item" href="#">Informasi Akun</a></li>
            <li><a class="dropdown-item" href="#">Verifikasi</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </div>
      @endguest
    </div>
  </div>
</nav>
@endsection