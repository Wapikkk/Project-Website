@extends('master.app')

@section('title', 'Rekomendasi Wisata')

@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url('{{ asset('images/banner-blog.jpg') }}');"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Rekomendasi Tempat Wisata Buat Kabur Sejenak</h1>
                </div>
            </div>
        </div>
        <div class="media-partner">
            <ul class="media-links clearfix">
                <li><h6>Follow on social media</h6></li>
                <li><a href="https://www.tiktok.com/@aloutdoor.id"><i class="bi bi-tiktok"></i></a></li>
                <li><a href="https://www.instagram.com/aloutdoor.id?igsh=MWM0NXR1dDZ1ZHF0eg=="><i class="bi bi-instagram"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 content-side">
                    <div class="blog-classic-content">
                        @foreach ($vacations as $vacation)
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-column flex-md-row gap-4 align-items-center">
                                    <figure class="image-box m-0 col-12 col-md-6">
                                        <img src="{{ asset('storage/' . $vacation->image) }}" class="w-100" style="height: 350px; object-fit: cover;" alt="{{ $vacation->place }}">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0 col-12 col-md-6">
                                        <h3 class="mb-3">{{ $vacation->place }}</h3>
                                        <p class="mb-0">{{ $vacation->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="more-btn text-center mt-5">
                            <a href="{{ url('/home#penawaran-spesial') }}" class="theme-btn btn-one">Rencanakan Petualanganmu Disini!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
@endsection
