@extends ('master.app')

@section('title', 'Informasi Pemesanan')

@section('content')

        <!-- activities-details -->
        <section class="activities-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="activities-sidebar">
                            <div class="sidebar-widget category-widget">
                                <ul class="category-list clearfix">
                                    <li><a href="#" class="current category-item" data-target="panduan-penyewaan">Panduan Penyewaan</a></li>
                                    <li><a href="#" class="category-item" data-target="sk-sewa-motor">S&K Sewa Motor Trail</a></li>
                                    <li><a href="#" class="category-item" data-target="sk-sewa-paket">S&K Sewa Paket</a></li>
                                    <li><a href="#" class="category-item" data-target="sk-member">S&K Member Aloutdoor.id</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget support-widget">
                                <div class="inner-box centred" style="background-image: url(assets/images/resource/sidebar-1.jpg);">
                                    <div class="icon-box">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <span>Hubungi kami <br />untuk informasi lebih lanjut.</span>
                                    <div class="contact justify-content-center">
                                        <div class="contact-icon col-auto">
                                            <a href="https://wa.me/6288989061400">
                                                <i class="bi bi-whatsapp mx-2"></i>
                                            </a>
                                            <a href="mailto:aloutdoor.id@gmail.com">
                                                <i class="bi bi-envelope-at mx-2"></i>
                                            </a>
                                            <a href="https://www.instagram.com/aloutdoor.id?igsh=MWM0NXR1dDZ1ZHF0eg==">
                                                <i class="bi bi-instagram mx-2"></i>
                                            </a>
                                            <a href="https://www.tiktok.com/@aloutdoor.id">
                                                <i class="bi bi-tiktok mx-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="activities-details-content">
                            <div class="content-one centred" id="content-area" data-contents="{!! htmlspecialchars(json_encode([
                                'panduan-penyewaan' => [
                                    'title' => 'Panduan Penyewaan',
                                    'paragraphs' => ['ini panduan penyewaannya']
                                ],
                                'sk-sewa-motor' => [
                                    'title' => 'S&K Sewa Motor Trail',
                                    'paragraphs' => ['ini panduan sewa motor trail']
                                ],
                                'sk-sewa-paket' => [
                                    'title' => 'S&K Sewa Paket',
                                    'paragraphs' => ['ini panduan sewa paket']
                                ],
                                'sk-member' => [
                                    'title' => 'S&K Member',
                                    'paragraphs' => ['ini panduan member']
                                ]
                            ]), ENT_QUOTES, 'UTF-8') !!}">
                            <div class="content-one centred">
                                <div class="image-box"><img src="assets/images/resource/activities-7.jpg" alt=""></div>
                                <div class="lower-box slide-content">
                                    <div class="icon-box">
                                        <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                        <i class="flaticon-climbing"></i>
                                    </div>
                                    <h2 id="content-title">{{ $content['title'] ?? 'Panduan Penyewaan' }}</h2>
                                    <div class="text" id="content-text">
                                        @foreach ($content['paragraphs'] as $paragraph)
                                            <p>{{ $paragraph }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="content-two">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="assets/images/resource/activities-13.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                        <div class="text-inner">
                                            <h2>Services Benefits</h2>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                            <ul class="list-style-one clearfix">
                                                <li>Refresing to get such a personal touch.</li>
                                                <li>Duis aute irure dolor in in voluptate.</li>
                                                <li>Velit esse cillum eu fugiat pariatur.</li>
                                                <li>Duis aute irure dolor in in voluptate.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="content-three">
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"></div>
                                            <h5>Interdum et malesuada fames ac ante ipsum</h5>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="text">
                                                <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5>Maecenas condimentum sollicitudin ligula,</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5>Duis rhoncus orci ut metus rhoncus</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- activities-details end -->

@endsection