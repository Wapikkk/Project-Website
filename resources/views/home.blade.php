<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Aloutdoor.id</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('images/logo_aloutdoor.png') }}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset('css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('css/owl.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('css/animate.css')}}" rel="stylesheet">
<link href="{{asset('css/color.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="preloader">
            <div class="boxes">
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header header-style-one" id="beranda">
            <div class="header-lower">
                <div class="outer-box">
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="#beranda">Beranda</a>
                                        <ul>
                                            <li><a href="#penawaran-spesial">Penawaran Spesial</a></li>
                                            <li><a href="#tentang-kami">Tentang Kami</a></li>
                                            <li><a href="#testimoni">Testimoni</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="index.html">Katalog</a>
                                        <ul>
                                            <li><a href="activities.html">Katalog Barang</a></li>
                                            <li><a href="climbing.html">Katalog Opentrip</a></li>
                                            <li><a href="adventure.html">Katalog Paket</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">Informasi Pemesanan</a></li>
                                    <li class="dropdown"><a href="{{ url('/rekomendasi-wisata') }}">Rekomendasi Wisata</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <div class="support-box">
                            <div class="icon"><img src="{{ asset ('images/logo_whatsapp.png') }}" alt="whatsapp"></div>
                            <span>Hubungi Kami</span>
                            <h5><a href="https://wa.me/6288989061400">+62 889-8906-1400</a></h5>
                        </div>
                        <div class="cart-box"><a href="index.html"><i class="flaticon-shopping-cart"></i></a></div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="menu-area">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <div class="support-box">
                            <div class="icon"><img src="{{ asset ('images/logo_whatsapp.png') }}" alt="chat-icon"></div>
                            <span>Hubungi Kami</span>
                            <h5><a href="https://wa.me/6288989061400">+62 889-8906-1400</a></h5>
                        </div>
                        <div class="cart-box"><a href="index.html"><i class="flaticon-shopping-cart"></i></a></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        
        <!-- banner-section -->
        <section class="banner-section centred">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset ('images/sunset_bromo.jpg') }})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            <span>Temukan Keajaiban di Setiap Sudut Alam</span>
                            <h2>Petualangan Dimulai <br />dari Langkah Pertama</h2>
                        </div>  
                    </div>
                </div>
                <div class="slide-item style-two">
                    <div class="image-layer" style="background-image:url({{ asset ('images/sunset_semeru.jpg') }})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span>Temukan Keajaiban di Setiap Sudut Alam</span>
                            <h2>Setiap Langkah <br />Adalah Cerita Baru</h2>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <!-- penawaran-spesial -->
        <section class="activities-section sec-pad" id="penawaran-spesial">
            <div class="auto-container">
                <div class="upper-box centred">
                    <div class="sec-title">
                        <span class="sub-title">What We're Offering</span>
                        <h2>Our Activities</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                            <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box"><a href="climbing.html"><img src="assets/images/resource/activities-1.jpg" alt=""></a></div>
                                    <div class="lower-content">
                                        <div class="icon-box">
                                            <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                            <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                            <i class="flaticon-climbing"></i>
                                        </div>
                                        <h3><a href="climbing.html">Climbing</a></h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                        <div class="link"><a href="climbing.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                            <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box"><a href="adventure.html"><img src="assets/images/resource/activities-2.jpg" alt=""></a></div>
                                    <div class="lower-content">
                                        <div class="icon-box">
                                            <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                            <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                            <i class="flaticon-adventurer"></i>
                                        </div>
                                        <h3><a href="adventure.html">Adventure</a></h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                        <div class="link"><a href="adventure.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                            <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box"><a href="camping.html"><img src="assets/images/resource/activities-3.jpg" alt=""></a></div>
                                    <div class="lower-content">
                                        <div class="icon-box">
                                            <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                            <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                            <i class="flaticon-tent"></i>
                                        </div>
                                        <h3><a href="camping.html">Camping</a></h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                        <div class="link"><a href="camping.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="sec-title light">
                        <span class="sub-title">Get Ready For The</span>
                        <h3>Summer of a Lifetime</h3>
                    </div>
                    <div class="text">
                        <p>There are not many of lorem ipsum <br />available alteration.</p>
                    </div>
                    <div class="support-box">
                        <p>Call Anytime</p>
                        <h3><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- penawaran-spesial end -->

        <!-- about-section -->
        <section class="about-section bg-color-1" id="tentang-kami">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7902.6823387202185!2d112.618417!3d-7.96365!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788281bdd08839%3A0xc915f268bffa831f!2sUniversitas%20Negeri%20Malang!5e0!3m2!1sid!2sid!4v1744709605415!5m2!1sid!2sid"
                                    width="100%" 
                                    height="300" 
                                    style="border:0; border-radius: 10px;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="sub-title">Tentang Kami</span>
                                    <h2>Selamat Datang di Aloutdoor.id</h2>
                                </div>
                                <div class="text">
                                    <div class="icon-box"><i class="flaticon-camping"></i></div>
                                    <p>Siap untuk petualangan seru? Hanya di Aloutdoor.id! Di sini kamu bisa sewa alat camping, 
                                        ikut opentrip ke Bromo, atau seru-seruan naik motor trail. Semua serba gampang, 
                                        aman, dan pastinya bikin petualangan kamu makin berkesan!.</p>
                                </div>
                                <ul class="list-style-one clearfix">
                                    <li>Persewaan alat-alat outdoor.</li>
                                    <li>Private Trip & Open Trip Bromo.</li>
                                    <li>Persewaan motor trail.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tentang-kami end -->


        <!-- testimoni -->
        <section class="testimonial-section bg-color-2" id="testimoni">
            <div class="outer-container clearfix">
                <div class="testimonial-inner pull-left">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                    <div class="testimonial-content">
                        <div class="single-item-carousel owl-carousel owl-theme owl-nav-none">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                <div class="text">
                                    <h3>This is due to their excellent service, and augue homero consectetuer in nam. Eu quo laoreet propriae, malis exerci habemus has vocent persius eum ea.</h3>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <span class="name">Jessica Brown</span>
                                    <span class="designation">Customer</span>
                                </div>
                            </div>
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                <div class="text">
                                    <h3>This is due to their excellent service, and augue homero consectetuer in nam. Eu quo laoreet propriae, malis exerci habemus has vocent persius eum ea.</h3>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <span class="name">Jessica Brown</span>
                                    <span class="designation">Customer</span>
                                </div>
                            </div>
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                <div class="text">
                                    <h3>This is due to their excellent service, and augue homero consectetuer in nam. Eu quo laoreet propriae, malis exerci habemus has vocent persius eum ea.</h3>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <span class="name">Jessica Brown</span>
                                    <span class="designation">Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-inner pull-right">
                    <div class="faq-content">
                        <div class="sec-title">
                            <span class="sub-title">Frequently Asked Question</span>
                            <h2>Any Question?</h2>
                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"></div>
                                    <h5>Nullam scelerisque eu lacus quis ultrices.</h5>
                                </div>
                                <div class="acc-content current">
                                    <div class="text">
                                        <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>Cras faucibus fringilla orci in sollicitudin</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>Nullam scelerisque eu lacus quis ultrices.</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimoni end -->

        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{asset ('js/jquery.js')}}"></script>
    <script src="{{asset ('js/popper.min.js')}}"></script>
    <script src="{{asset ('js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('js/owl.js')}}"></script>
    <script src="{{asset ('js/wow.js')}}"></script>
    <script src="{{asset ('js/validation.js')}}"></script>
    <script src="{{asset ('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset ('js/appear.js')}}"></script>
    <script src="{{asset ('js/scrollbar.js')}}"></script>
    <script src="{{asset ('js/parallax-scroll.js')}}"></script>
    <script src="{{asset ('js/isotope.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset ('js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>