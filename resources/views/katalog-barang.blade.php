@extends('master.app')

@section('title', 'Home')

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
                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 25.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Kapasitas 2-3 Orang Ultra Light Double Layer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 25.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">5 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Kap 4 Double Layer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 30.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Kap 5 Double Layer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 40.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Kap 6-7 Double Layer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 55.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Kap 8-10 Double Layer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 90.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Kap 12 Exclusive</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 155.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Kap 15-20 Grand Dome</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 65.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Stan 2x2 M</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 80.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Stan 3x3 M</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 80.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Prisma/Pramuka 3x4 M</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Rp 450.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Regu 4x6 M</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset ('images/katalog-barang/katalog-dummy.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">650.000</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tenda Pleton/Barak</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-13.png);"></div>
            <div class="auto-container">
                <div class="footer-top">
                    <div class="top-inner">
                        <div class="text">
                            <h5>Send Email</h5>
                            <h3><a href="mailto:needhelp@company.com">needhelp@company.com</a></h3>
                        </div>
                        <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                        <div class="text">
                            <h5>Call Anytime</h5>
                            <h3><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h3>
                        </div>
                    </div>
                </div>
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Explore</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Meet Our Team</a></li>
                                        <li><a href="index.html">What We Do</a></li>
                                        <li><a href="index.html">Latest News</a></li>
                                        <li><a href="index.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Activities</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Tree Climbing</a></li>
                                        <li><a href="index.html">Cross the River</a></li>
                                        <li><a href="index.html">Mountain Boarding</a></li>
                                        <li><a href="index.html">Parachute</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h4>Contact</h4>
                                </div>
                                <div class="widget-content">
                                    <p>60 road, broklyn golden street new york. USA</p>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-title">
                                    <h4>Newsletter</h4>
                                </div>
                                <div class="widget-content">
                                    <p>Subsrcibe for our upcoming latest articles and news resources</p>
                                    <form action="contact.html" method="post" class="newsletter-form">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address" required>
                                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright">
                        <p>&copy; Copyright 2022 by <a href="index.html">company.com</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->
        
@endsection