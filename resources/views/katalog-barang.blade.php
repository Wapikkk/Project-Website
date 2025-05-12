@extends('master.app')

@section('title', 'Katalog Barang')

@section('content')

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url({{ asset ('images/katalog-barang.jpg') }});"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li>Yuk, intip katalognya dan temukan perlengkapan outdoor yang siap nemenin petualangan serumu!</li>
                    </ul>
                    <div class="title">
                        <h1>Katalog Persewaan Alat Outdoor</h1>
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


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    @foreach ($catalogs as $catalog)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset ($catalog->image) }}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- news-section end -->
@endsection