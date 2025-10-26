<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aloudoor.id - @yield('title')</title>

  <link rel="icon" type="image/png" href="{{asset('admin/images/logo_aloutdoor.png')}}" sizes="16x16">

  <!-- remix icon font css  -->
  <link rel="stylesheet" href="{{asset('admin/css/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/apexcharts.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/editor-katex.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/editor.atom-one-dark.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/editor.quill.snow.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/flatpickr.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/full-calendar.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/jquery-jvectormap-2.0.5.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/slick.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/prism.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/file-upload.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/lib/audioplayer.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

</head>
  <body>
<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div class="sidebar-logo">
      <img src="{{ asset('admin/images/logo_aloutdoor.png') }}" alt="site logo" class="light-logo">
  </div>
  <div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu">
      <li>
        <a href="{{ route('admin.dashboard') }}">
          <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="sidebar-menu-group-title">Informasi</li>

      <li class="dropdown">
        <a href="javascript:void(0)">
          <i class="ri-news-line text-xl me-14 d-flex w-auto"></i>
          <span>Blog</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="{{ route('admin.show.blog') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Blog</a>
          </li>
          <li>
            <a href="{{ route('admin.add.blog') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Tambah Blog</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <i class="ri-star-line text-xl me-14 d-flex w-auto"></i>
          <span>Testimoni</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="{{route('admin.show.review') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Testimoni</a>
          </li>
          <li>
            <a href="{{ route('admin.add.review') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Tambah Testimoni</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="{{ route(name: 'admin.show.katalog') }}">
            <iconify-icon icon="solar:gallery-wide-linear" class="menu-icon"></iconify-icon>
            <span>Katalog</span> 
        </a>
      </li>

      <li class="sidebar-menu-group-title">Akun</li> 
      <li>
        <a href="#" class="logout-link" data-form-id="logout-form-sidebar">
            <iconify-icon icon="lucide:power" class="menu-icon"></iconify-icon>
            <span>Keluar Akun</span> 
        </a>
        <form id="logout-form-sidebar" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
  </div>
</aside>

<main class="dashboard-main">
    <div class="navbar-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
            <div class="d-flex flex-wrap align-items-center gap-4">
                <button type="button" class="sidebar-toggle">
                <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
                <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
                </button>
                <button type="button" class="sidebar-mobile-toggle">
                <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
                </button>
            </div>
            </div>
            <div class="col-auto">
            <div class="d-flex flex-wrap align-items-center gap-3">
                <div class="dropdown">
                <button class="d-flex justify-content-center align-items-center rounded-circle" type="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('admin/images/logo_aloutdoor.png') }}" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
                </button>
                <div class="dropdown-menu to-top dropdown-menu-sm">
                    <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                    <div>
                        <h6 class="text-lg text-primary-light fw-semibold mb-2">Shaidul Islam</h6>
                        <span class="text-secondary-light fw-medium text-sm">Admin</span>
                    </div>
                    <button type="button" class="hover-text-danger">
                        <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon> 
                    </button>
                    </div>
                    <ul class="to-top-list">
                    <li>
                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="view-profile.html"> 
                        <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>  My Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="email.html"> 
                        <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>  Inbox</a>
                    </li>
                    <li>
                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="company.html"> 
                        <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon>  Setting</a>
                    </li>
                    <li>
                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3" href="javascript:void(0)"> 
                        <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out</a>
                    </li>
                    </ul>
                </div>
                </div><!-- Profile dropdown end -->
            </div>
            </div>
        </div>
    </div> 

@yield('content')

</main>

<div class="modal fade modal-logout" id="logoutConfirmModal" tabindex="-1" aria-labelledby="logoutConfirmModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <p>Apakah anda yakin ingin keluar akun?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="confirmLogoutBtn">Ya, Keluar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
  
<script src="{{asset('admin/js/lib/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('admin/js/lib/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/js/lib/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/js/lib/dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/lib/iconify-icon.min.js')}}"></script>
<script src="{{asset('admin/js/lib/jquery-ui.min.js')}}"></script>
<script src="{{asset('admin/js/lib/jquery-jvectormap-2.0.5.min.js')}}"></script>
<script src="{{asset('admin/js/lib/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/js/lib/magnifc-popup.min.js')}}"></script>
<script src="{{asset('admin/js/lib/slick.min.js')}}"></script>
<script src="{{asset('admin/js/lib/prism.js')}}"></script>
<script src="{{asset('admin/js/lib/file-upload.js')}}"></script>
<script src="{{asset('admin/js/lib/audioplayer.js')}}"></script>
<script src="{{asset('admin/js/app.js') }}"></script>
<script src="{{asset('admin/js/homeThreeChart.js') }}"></script>
<script src="{{asset('admin/js/editor.highlighted.min.js')}}"></script>
<script src="{{asset('admin/js/editor.quill.js')}}"></script>
<script src="{{asset('admin/js/editor.katex.min.js')}}"></script>

@yield('script')

</body>
</html>
