@extends('master.app')

@section('title', 'Home')

@section('content')


        <!-- section banner -->
        <section class="banner-section centred">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset ('images/sunset_bromo.jpg') }})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            <span>Siap Bertualang? Sewa Alat Outdoor & Ikut Trip Tanpa Ribet Bareng Aloutdoor.id!</span>
                            <h2>Petualangan Dimulai <br />dari Langkah Pertama</h2>
                        </div>
                    </div>
                </div>
                <div class="slide-item style-two">
                    <div class="image-layer" style="background-image:url({{ asset ('images/sunset_semeru.jpg') }})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span>Mulai Perjalananmu Bersama Aloutdoor.id!</span>
                            <h2>Setiap Langkah <br />Adalah Cerita Baru</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir section banner -->


        <!-- section tentang kami -->
        <section class="about-section bg-color-1" id="tentang-kami">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="sec-title text-center">
                            <span class="sub-title">Tentang Kami</span>
                            <h2>Selamat Datang di Aloutdoor.id</h2>
                        </div>
                    </div>
                </div>
                <div class="row clearfix flex-row-reverse">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box">
                                <div class="text p-0 mb-1">
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
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5474293070242!2d112.59500837607811!3d-7.942242079113416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7883add7908f57%3A0xac4bc13c3d0808a4!2sAl%20Outdoor.id%20(Sewa%20Tenda%20%26%20Motor%20Trail%20Murah%20Malang)!5e0!3m2!1sen!2sid!4v1745255964974!5m2!1sen!2sid"
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
                </div>
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="sec-title text-center">
                            <span class="sub-title">Contact Us On</span>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a href="https://www.instagram.com/aloutdoor.id?igsh=MWM0NXR1dDZ1ZHF0eg==" target="_blank" class="text-decoration-none text-dark">
                                        <i class="bi bi-instagram mx-2" style="font-size: 2rem"></i>
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a href="https://www.tiktok.com/@aloutdoor.id" target="_blank" class="text-decoration-none text-dark">
                                        <i class="bi bi-tiktok mx-2" style="font-size: 2rem"></i>
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a href="mailto:aloutdoor.id@gmail.com" class="text-decoration-none text-dark">
                                        <i class="bi bi-envelope-at mx-2" style="font-size: 2rem"></i>
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a href="https://wa.me/6288989061400" target="_blank" class="text-decoration-none text-dark">
                                        <i class="bi bi-whatsapp mx-2" style="font-size: 2rem"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir tentang kami -->


        <!-- penawaran-spesial -->
        <section class="activities-section sec-pad" id="penawaran-spesial">
            <div class="auto-container" >
                <div class="upper-box centred">
                    <div class="sec-title">
                        <span class="sub-title">What We're Offering</span>
                        <h2>Siap Jelajah? Semua Kebutuhan Kamu Ada Disini!</h2>
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
                                            <i class="flaticon-tent"></i>
                                        </div>
                                        <h3><a href="{{ url('/katalog-barang') }}">Sewa Perlengkapan</a></h3>
                                        <p>Butuh perlengkapan outdoor? Kami menyediakan berbagai alat camping dan 
                                            aktivitas luar ruangan yang siap pakai. Praktis, terjangkau, dan siap mendukung setiap langkah petualanganmu.
                                        </p>
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
                                        <h3><a href="{{ url ('katalog-opentrip') }}">Trip</a></h3>
                                        <p>Ingin menjelajah tanpa ribet? Gabung dalam Open Trip kami dan nikmati serunya perjalanan 
                                            bersama teman-teman baru dengan rute yang telah dikurasi oleh tim profesional kami.
                                        </p>
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
                                        <h3><a href="{{ url ('katalog-paket') }}">Paket Lebih Hemat</a></h3>
                                        <p>Bingung mau sewa apa aja? Tenang, kami udah siapin paket perlengkapan yang lengkap 
                                            dan praktis! gak perlu ribet milih satu-satu. Hemat waktu, hemat biaya, tinggal pakai!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="sec-title light text-center">
                        <span class="sub-title">Karena setiap perjalanan bukan hanya soal tempat, tapi pengalaman yang mengubah hidup.</span>
                        <h3>Temukan Dunia, Temukan Dirimu</h3>
                    </div>  
                </div>
            </div>
        </section>
        <!-- akhir penawaran spesial -->

        {{-- galeri kami --}}
        <section class="gallery-section centred" id="galeri-kami">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Our Photoshots</span>
                    <h2>Our Gallery</h2>
                </div>
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset ('images/galeri/1.png') }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset ('images/galeri/2.png') }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset ('images/galeri/3.png') }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset ('images/galeri/4.png') }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset ('images/galeri/5.png') }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- akhir galeri kami --}}

        <!-- testimoni -->
        <section class="testimonial-section bg-color-2" id="testimoni">
            <div class="outer-container clearfix">
                <div class="testimonial-inner pull-left">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                    <div class="testimonial-content">
                        <div class="single-item-carousel owl-carousel owl-theme owl-nav-none">
                            @foreach ($reviews as $review)
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-quote"></i></div>
                                    <div class="text">
                                        <h3>{{ $review->review }}</h3>
                                    </div>
                                    <div class="author-box p-0">
                                        <span class="name">{{ $review->name }}</span>
                                        <span class="designation">Customer (Rating: {{ $review->rating }}/5)</span>
                                    </div>
                                </div>
                            @endforeach
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
                                    <h5>Bagaimana cara menyewa alat di website ini ?</h5>
                                </div>
                                <div class="acc-content current">
                                    <div class="text">
                                        <p>Untuk info persewaan alat-alat outdoor, kamu bisa klik Informasi Pemesanan yang ada di bar navigasi ya !</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>Apakah ada paket hemat atau member?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Tentu dong! Kami menyediakan paket hemat agar budget kamu aman di kantong. Selain itu, kamu bisa mendapatkan diskon 10% lho jika daftar member🤩
                                            untuk info lengkapnya bisa cek di navigasi Informasi Pesanan ya !🙌🏻</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>Bagaimana jika saya ingin membatalkan atau mengubah jadwal sewa?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Pembatalan bisa dilakukan maksimal H-2 sebelum tanggal sewa, dan akan 
                                            dikenakan potongan biaya administrasi. Perubahan jadwal bisa diajukan selama alat masih tersedia.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir testimoni -->


@endsection
