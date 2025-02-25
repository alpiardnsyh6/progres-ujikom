<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="/images/logo.png">
  <title>{{ $title }}</title>
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/fontawesome/css/all.css" rel="stylesheet">
  <link href="/css/home.css" rel="stylesheet">
</head>

<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/images/logo.png" alt="" style="width: 90px ">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ $active == 'home' ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == 'kamar' ? 'active' : '' }}" href="/rooms">Kamar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == 'fasilitas' ? 'active' : '' }}" href="/facilities">Fasilitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == 'kontak' ? 'active' : '' }}" href="/kontak">Kontak Kami</a>
          </li>
        </ul>
        <div class="tombol d-flex align-items-center">
          @auth('web')
          @php
            $pesan = \App\Models\Reservasi::where('pelanggan_id', auth()->user()->id)->where('status', 'dipesan')->get();
            $jmlNotif = $pesan->count();
          @endphp
        <a href="/getreservasi" class="d-flex text-decoration-none align-items-center me-3 position-relative">
          <i class="fas fa-bell fs-3 me-2"></i>
          @if ($jmlNotif > 0)
          <sup class="badge text-bg-danger rounded-pill position-absolute" style="top: 2px; left: 7px;" title="{{ $jmlNotif }} Pesanan kamar anda belum dibayar! cek sekarang!">{{ $jmlNotif }}</sup>
          @endif
          <div class="notif">
            <span class="text-light">Reservasi Anda</span>
            <hr class="m-0">
            <span class="text-warning">{{ auth()->user()->nama }}</span>
          </div>
        </a>
        <a href="/logoutuser" class="btn btn-warning rounded-0 shadow fw-bold px-4">LOGOUT</a>
      @elseif(Auth::guard('web')->guest())
      @auth('admin')
      <a href="/dashboard" class="btn btn-primary rounded-0 shadow fw-bold px-4 me-2">DASHBOARD</a>
      <a href="/logout" class="btn btn-primary rounded-0 shadow fw-bold px-4">LOGOUT</a>
    @else
      <a href="/loginuser" class="btn btn-primary rounded-0 shadow fw-bold px-4">LOGIN</a>
    @endauth
    @endauth
        </div>
      </div>
    </div>
  </nav>
  {{-- Navbar --}}

  {{-- Content --}}
  {{-- ini adalah section yang diincludekan --}}
  @yield('isi')
  {{-- End of Content --}}

  {{-- Footer --}}
  <footer>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-4">
          <img src="/images/logo.png" alt="" style="width: 150px">
          <p class="text-light">The best hotel in Purwakarta city</p>
        </div>
        <div class="col-4">
          <ul class="list-unstyled">
            <li class="text-light mb-2">
              <i class="fas fa-phone text-primary"></i>
              <span class="ms-2">089601913606</span>
            </li>
            <li class="text-light mb-2">
              <i class="fas fa-map-marker-alt text-primary"></i>
              <span class="ms-2">Jl. A Yani No. 169 Purwakarta</span>
            </li>
            <li class="text-light">
              <i class="fas fa-envelope text-primary"></i>
              <span class="ms-2">oceansgrand@gmail.co.id</span>
            </li>
          </ul>
        </div>
        <div class="col-4">
          <h4 class="text-light">Share and Like</h4>
          <div class="socmed">
            <i class="fab fa-facebook-square text-primary"></i>
            <i class="fab fa-instagram-square text-danger"></i>
            <i class="fab fa-tiktok text-light"></i>
            <i class="fab fa-telegram-plane text-info"></i>
            <i class="fab fa-youtube text-danger"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>
  {{-- End of Footer --}}
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/js/jquery-3.7.1.min.js"></script>
  @yield('script')

</body>
</html>

