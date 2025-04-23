@extends('master.app')

@section('title', 'Home')

@section('content')

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url('{{ asset('images/banner-blog.jpg') }}');"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Rekomendasi Tempat Wisata Buat Kabur Sejenak</h1>
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
                                        <h3>Gunung Bromo - Malang</h3>
                                        <p>Siapa yang nggak kenal Gunung Bromo? Destinasi satu ini selalu jadi andalan buat kamu yang pingin healing bareng alam, jauh dari hiruk-pikuk kota. Terletak di Taman Nasional Bromo Tengger Semeru, kawasan ini menyuguhkan pemandangan sunrise yang luar biasa cantik, lautan pasir yang luas, dan udara sejuk yang bikin pikiran langsung segar.
                                            Dari Bukit Penanjakan sampai Kawah Bromo, setiap sudutnya cocok banget buat kamu yang hobi foto atau sekadar duduk tenang menikmati alam. Nggak heran kalau Bromo jadi pilihan utama buat liburan bareng teman, keluarga, bahkan solo traveling.</p>
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
                                        <h3>Bumi Perkemahan Bedengan - Malang</h3>
                                        <p>Kalau kamu lagi cari tempat healing yang adem, tenang, dan nggak jauh dari kota, Bumi Perkemahan Bedengan bisa jadi jawaban terbaik. Terletak di kawasan Dau, Malang, lokasi ini dikelilingi hutan pinus yang rimbun dan aliran sungai jernih yang bikin suasana makin damai.

                                            Bedengan cocok banget buat kamu yang pengin camping santai bareng teman, family time, atau sekadar rebahan di hammock sambil denger suara alam. Udara di sini sejuk banget, dan saat malam tiba, kamu bisa menikmati langit berbintang tanpa gangguan cahaya kota.</p>
                                        <div class="link">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-stretch">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/gunung_butak.jpg') }}" style="width:100%; height: 100%; height: 300px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">                                      <h3>Gunung Butak - Blitar</h3>
                                        <p>Kalau kamu tipe pendaki yang suka ketenangan dan pengin ngerasain hiking dengan suasana yang lebih sunyi, Gunung Butak adalah tempat yang tepat. Terletak di perbatasan Malang dan Blitar, gunung ini menawarkan track yang menantang tapi penuh kedamaian, jauh dari keramaian jalur pendakian populer.
                                            Pemandangan di puncaknya nggak kalah keren dari gunung-gunung besar lain. Kamu akan disambut dengan sabana luas dan panorama 360 derajat yang bikin capek selama pendakian langsung terbayar lunas. Suhu di malam hari bisa turun drastis, jadi pastikan kamu siap dengan perlengkapan camping yang proper.
                                            
                                            Butuh waktu buat diri sendiri, atau mau quality time bareng sahabat pendaki? Gunung Butak bisa jadi destinasi healing yang nggak cuma menyegarkan badan, tapi juga pikiran. </p>
                                        <div class="link">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-stretch">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/pantai_watu_leter.jpg') }}" style="width:100%; height: 100%; height: 300px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Pantai Watu Leter - Malang</h3>
                                        <p>Lagi pengin healing tapi bosan sama pantai yang ramai dan penuh spot selfie? Pantai Watu Leter adalah jawabannya. Terletak di daerah Malang Selatan, pantai ini masih tergolong sepi dan alami, jadi kamu bisa nikmatin suasana tenang ditemani suara ombak dan angin laut tanpa banyak gangguan.
                                            Pasir putih, batuan karang unik, dan tebing-tebing eksotis jadi ciri khas tempat ini. Serunya lagi, Watu Leter juga dikenal sebagai habitat penyu, lho! Kalau beruntung, kamu bisa melihat proses pelepasan tukik (anak penyu) langsung ke laut.
                                            
                                            Cocok banget buat kamu yang pengin camping tipis-tipis, duduk di hammock sambil baca buku, atau jalan santai di pinggir pantai bareng orang tersayang.</p>
                                        <div class="link">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-stretch">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/pantai_kondang_merak.jpeg') }}" style="width:100%; height: 100%; height: 300px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Pantai Kondang Merak - Malang</h3>
                                        <p>Lagi pengin pantai yang sepi, adem, dan jauh dari keramaian? Pantai Kondang Merak jawabannya! Lokasinya ada di Malang Selatan, dengan pasir putih luas, ombak tenang, dan deretan pohon yang bikin suasana makin damai.

                                            Cocok buat camping santai, ngopi sambil liat laut, atau sekadar rebahan dengerin suara ombak. </p>
                                        <div class="link">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-stretch">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/ranu_regulo.jpg') }}" style="width:100%; height: 100%; height: 300px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Ranu Regulo - Lumajang</h3>
                                        <p>Kalau kamu lagi butuh tempat yang tenang, jauh dari hiruk-pikuk, dan penuh ketenangan alami, Ranu Regulo wajib masuk daftar healing kamu. Terletak di kawasan Taman Nasional Bromo Tengger Semeru, danau ini menyuguhkan suasana yang adem, sejuk, dan damai — cocok banget buat kamu yang pengin rehat sejenak dari rutinitas.

                                            Dikelilingi oleh hutan dan udara pegunungan yang segar, Ranu Regulo jadi tempat ideal buat camping santai, foto-foto estetik, atau sekadar duduk di tepi danau sambil menyeruput kopi panas. Suasananya lebih tenang dibanding Ranu Kumbolo, tapi tetap memesona dengan caranya sendiri.</p>
                                        <div class="link">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-stretch">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/tumpak_sewu.jpg') }}" style="width:100%; height: 100%; height: 300px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Tumpak Sewu - Lumajang</h3>
                                        <p>Lagi cari tempat healing yang bisa bikin kamu speechless? Coba ke Tumpak Sewu — air terjun megah di perbatasan Lumajang dan Malang yang sering dijuluki “Niagara-nya Indonesia”. Air terjun ini punya formasi setengah lingkaran yang unik, dikelilingi tebing hijau tinggi dan kabut tipis yang bikin suasana makin magis.

                                            Buat kamu pecinta petualangan, perjalanan turun ke dasar lembah menuju Tumpak Sewu akan jadi pengalaman tak terlupakan. Trek-nya cukup menantang, tapi semua itu terbayar lunas saat kamu berdiri di bawah guyuran air terjun yang deras dan menyegarkan.</p>
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
