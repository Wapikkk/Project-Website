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
                                    <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                                    <span>Hubungi kami <br />untuk informasi lebih lanjut.</span>
                                    <h3><a href="https://wa.me/6288989061400"></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="activities-details-content">
                            <div class="content-one centred">
                                <div class="image-box"><img src="assets/images/resource/activities-7.jpg" alt=""></div>
                                <div class="lower-box">
                                    <div class="icon-box">
                                        <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                        <i class="flaticon-climbing"></i>
                                    </div>
                                    <h2>Climbing</h2>
                                    <div class="text">
                                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy.</p>
                                        <p>It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum take a look at our round. When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
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