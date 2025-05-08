@extends ('master.app')

@section('title', 'Katalog Trip')

@section('content')

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url('{{ asset ('images/katalog-opentrip/background-trip.jpg') }}')"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li>Satu Tiket, Banyak Teman, Sejuta Kenangan</li>
                    </ul>
                    <div class="title">
                        <h1>Katalog Trip</h1>
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


        <!-- new-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset ('images/katalog-opentrip/ot_2.png') }}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset ('images/katalog-opentrip/ot_3.png') }}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset ('images/katalog-opentrip/ot_4.png') }}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset ('images/katalog-opentrip/ot_5.png') }}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset ('images/katalog-opentrip/ot_6.png') }}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset ('images/katalog-opentrip/ot_7.png') }}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset ('images/katalog-opentrip/ot_8.png') }}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- new-section end -->
@endsection