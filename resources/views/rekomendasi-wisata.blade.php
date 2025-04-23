@extends('master.app')

@section('title', 'Home')

@section('content')

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Our Blog</li>
                    </ul>
                    <div class="title">
                        <h1>Our Blog</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-12 content-side">
                        <div class="blog-classic-content">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-stretch">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/sunset_bromo.jpg') }}" style="width:100%; height: 300px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <span class="post-date">20 oct, 2021</span>
                                        <h3>Get Ready for the Summer Camp</h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida.</p>
                                        <div class="link">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-stretch">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/bedengan.jpg') }}" style="width:100%; height: 100%; height: 300px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <span class="post-date">19 oct, 2021</span>
                                        <h3>Duis Laoreet Cursus Justo, sed ulis</h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida.</p>
                                        <div class="link">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-6.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <span class="post-date">15 oct, 2021</span>
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                            <li><i class="far fa-comments"></i><a href="blog-details.html">0 Comments</a></li>
                                        </ul>
                                        <h3><a href="blog-details.html">Morbi nec Finibus mi. Cras Risus</a></h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida.</p>
                                        <div class="link">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-7.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <span class="post-date">12 oct, 2021</span>
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                            <li><i class="far fa-comments"></i><a href="blog-details.html">7 Comments</a></li>
                                        </ul>
                                        <h3><a href="blog-details.html">Nulla Posuere tortor eu Erat Blandit</a></h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida.</p>
                                        <div class="link">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="more-btn">
                                <a href="blog.html" class="theme-btn btn-one">load more posts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->


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
