<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Aloutdoor.id - @yield('title')</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('images/logo_aloutdoor.png') }}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('css/color.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="preloader">
            <div class="boxes">
                <div class="box"><div></div><div></div><div></div><div></div></div>
                <div class="box"><div></div><div></div><div></div><div></div></div>
                <div class="box"><div></div><div></div><div></div><div></div></div>
                <div class="box"><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- main header -->
        <header class="main-header header-style-one" id="beranda">
            <div class="header-lower d-flex align-items-center justify-content-between">
                <div class="logo d-none d-md-block">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo_aloutdoor.png') }}" alt="logo" style="height: 70px;">
                    </a>
                </div>
                <div class="outer-box d-flex align-items-center justify-content-between w-100">
                    <div class="menu-area">
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ request()->is('home') ? 'active' : '' }} dropdown">
                                        <a href="{{ url('/home') }}">Beranda</a>
                                        <ul>
                                            <li><a href="#tentang-kami">Tentang Kami</a></li>
                                            <li><a href="#penawaran-spesial">Penawaran Spesial</a></li>
                                            <li><a href="#galeri-kami">Galeri Kami</a></li>
                                            <li><a href="#testimoni">Testimoni</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->is('katalog-barang', 'katalog-paket', 'katalog-trip') ? 'active' : '' }} dropdown">
                                        <a href="javascript:void(0)">Katalog</a>
                                        <ul>
                                            <li class="{{ request()->is('katalog-barang') ? 'active' : '' }}">
                                                <a href="{{ url('/katalog-barang') }}">Katalog Barang</a>
                                            </li>
                                            <li class="{{ request()->is('katalog-opentrip') ? 'active' : '' }}">
                                                <a href="{{ url('/katalog-trip') }}">Katalog Trip</a>
                                            </li>
                                            <li class="{{ request()->is('katalog-paket') ? 'active' : '' }}">
                                                <a href="{{ url('/katalog-paket') }}">Katalog Paket</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->is('informasi-pemesanan') ? 'active' : '' }}">
                                        <a href="{{ url('informasi-pemesanan') }}">Informasi Pemesanan</a>
                                    </li>
                                    <li class="{{ request()->is('rekomendasi-wisata') ? 'active' : '' }}">
                                        <a href="{{ url('/rekomendasi-wisata') }}">Rekomendasi Wisata</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="d-flex align-items-center ms-auto" style="gap: 50px;">
                        <a href="https://wa.me/6288989061400" target="_blank" class="text-decoration-none text-white">
                            <i class="bi bi-whatsapp" style="font-size: 2rem; margin-right: 10px"></i>
                        </a>
                        <a href="mailto:aloutdoor.id@gmail.com" target="_blank" class="text-decoration-none text-white">
                            <i class="bi bi-envelope-at" style="font-size: 2rem; margin-right: 10px;"></i>
                        </a>
                        @auth
                            <a href="{{ url('/cart') }}" class="text-white">
                                <i class="flaticon-shopping-cart" style="font-size: 2rem;"></i>
                            </a>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn p-0 text-white">
                                    <i class="bi bi-box-arrow-right" style="font-size: 2rem;"></i>
                                </button>
                            </form>
                        @else
                            <a href="{{ url('/masuk') }}" class="text-white">
                                <i class="bi bi-box-arrow-in-right" style="font-size: 2rem;"></i>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Sticky Header -->
            <div class="sticky-header">
                <div class="header-lower d-flex align-items-center justify-content-between py-0">
                    <div class="logo d-none d-md-block">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logo_aloutdoor.png') }}" alt="logo" style="height: 70px;">
                        </a>
                    </div>
                    <div class="outer-box d-flex align-items-center justify-content-between w-100">
                        <div class="menu-area">
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                            </nav>
                        </div>
                        <div class="d-flex align-items-center ms-auto" style="gap: 50px;">
                            <a href="https://wa.me/6288989061400" target="_blank" class="text-decoration-none text-white">
                                <i class="bi bi-whatsapp" style="font-size: 2rem; margin-right: 10px"></i>
                            </a>
                            <a href="mailto:aloutdoor.id@gmail.com" target="_blank" class="text-decoration-none text-white">
                                <i class="bi bi-envelope-at" style="font-size: 2rem; margin-right: 10px;"></i>
                            </a>
                            @auth
                                <a href="{{ url('/cart') }}" class="text-white">
                                    <i class="flaticon-shopping-cart" style="font-size: 2rem;"></i>
                                </a>
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn p-0 text-white">
                                        <i class="bi bi-box-arrow-right" style="font-size: 2rem;"></i>
                                    </button>
                                </form>
                            @else
                                <a href="{{ url('/masuk') }}" class="text-white">
                                    <i class="bi bi-box-arrow-in-right" style="font-size: 2rem;"></i>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo_aloutdoor.png') }}" alt="logo" style="height: 70px;">
                    </a>
                </div>
                <div class="menu-outer"></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        @yield('content')

        <!-- jQuery plugins -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owl.js') }}"></script>
        <script src="{{ asset('js/wow.js') }}"></script>
        <script src="{{ asset('js/validation.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('js/appear.js') }}"></script>
        <script src="{{ asset('js/scrollbar.js') }}"></script>
        <script src="{{ asset('js/parallax-scroll.js') }}"></script>
        <script src="{{ asset('js/isotope.js') }}"></script>

        <!-- main-js -->
        <script src="{{ asset('js/script.js') }}"></script>

        @yield('script')
    </div>
</body>
</html>