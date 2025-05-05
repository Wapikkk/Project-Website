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
                                    <div class="inner-box d-flex flex-row gap-4 align-items-center">
                                        <figure class="image-box m-0" style="flex: 1;">
                                            <img src="{{ asset('storage/' . $vacation->image) }}" style="width:100%; height: 350px; object-fit: cover;" alt="{{ $vacation->place }}">
                                        </figure>
                                        <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                            <h3>{{ $vacation->place }}</h3>
                                            <p>{{ $vacation->description }}</p>
                                            {{-- <div class="link">
                                                <a href="blog-details.html">Read More</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-center">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/sunset_bromo.jpg') }}" style="width:100%; height: 350px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Gunung Bromo - Malang</h3>
                                        <p>
                                            Siapa sih yang nggak kenal Gunung Bromo? Tempat wisata ini selalu jadi andalan buat kamu yang ingin rehat sejenak dari hiruk-pikuk kota dan menikmati alam. Terletak di Taman Nasional Bromo Tengger Semeru, Bromo menyuguhkan panorama sunrise yang memukau, lautan pasir yang luas, serta udara sejuk yang menenangkan. Dari Bukit Penanjakan hingga Kawah Bromo, setiap sudutnya cocok untuk berfoto atau sekadar duduk santai menikmati suasana. Cocok banget buat liburan bareng teman, keluarga, atau solo traveling.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-center">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/bedengan.jpg') }}" style="width:100%; height: 100%; height: 350px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Bumi Perkemahan Bedengan - Malang</h3>
                                        <p>Kalau kamu lagi cari tempat healing yang adem, tenang, dan nggak jauh dari kota, Bumi Perkemahan Bedengan bisa jadi jawaban terbaik.
                                            Terletak di kawasan Dau, Malang, lokasi ini dikelilingi hutan pinus yang rimbun dan aliran sungai jernih yang bikin suasana makin damai.
                                            Bedengan cocok banget buat kamu yang pengin camping santai bareng teman, family time, atau sekadar rebahan di hammock sambil denger suara alam.
                                            Udara di sini sejuk banget, dan saat malam tiba, kamu bisa menikmati langit berbintang tanpa gangguan cahaya kota.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-center">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/gunung_butak.jpg') }}" style="width:100%; height: 100%; height: 350px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Gunung Butak - Blitar</h3>
                                        <p>Kalau kamu pendaki yang suka ketenangan dan ingin merasakan suasana hiking yang lebih sepi, Gunung Butak bisa jadi pilihan pas. Berada di perbatasan Malang dan Blitar, gunung ini punya jalur menantang tapi damai, jauh dari keramaian. Di puncak, kamu akan disambut sabana luas dan panorama 360 derajat yang luar biasa. Sunrise dari puncaknya juga jadi momen magis yang sayang untuk dilewatkan, namun suhunya bisa sangat dingin di malam hari, jadi siapkan perlengkapan camping lengkap. Cocok untuk me time atau quality time bareng sahabat pendaki.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-center">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/pantai_watu_leter.jpg') }}" style="width:100%; height: 100%; height: 350px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Pantai Watu Leter - Malang</h3>
                                        <p>Lagi pingin healing tapi bosan dengan pantai yang ramai dan penuh spot selfie? Coba deh ke Pantai Watu Leter. Terletak di Malang Selatan, pantai ini masih alami dan sepi, cocok buat menikmati suasana damai ditemani suara ombak dan angin laut. Pasir putih, karang unik, dan tebing eksotis jadi daya tarik utamanya. Serunya, tempat ini juga jadi habitat penyu! Kalau beruntung, kamu bisa lihat pelepasan tukik yang menggemaskan. Pas buat camping ringan, baca buku di hammock, atau jalan santai bareng orang tersayang.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-center">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/pantai_kondang_merak.jpeg') }}" style="width:100%; height: 100%; height: 350px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Pantai Kondang Merak - Malang</h3>
                                        <p>Lagi cari pantai yang sepi, adem, dan jauh dari keramaian? Pantai Kondang Merak bisa jadi pilihan yang pas! Terletak di Malang Selatan, pantai ini menawarkan hamparan pasir putih yang luas, ombak yang tenang, serta deretan pepohonan rindang yang bikin suasana makin damai dan nyaman. Tempat ini cocok banget buat kamu yang pengin camping santai, ngopi sambil menikmati pemandangan laut, atau sekadar rebahan di atas tikar sambil mendengarkan suara ombak yang menenangkan pikiran.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-center">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/ranu_regulo.jpg') }}" style="width:100%; height: 100%; height: 350px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Ranu Regulo - Lumajang</h3>
                                        <p>Kalau kamu butuh tempat yang tenang, jauh dari hiruk-pikuk, dan penuh nuansa alami, Ranu Regulo wajib ada di daftar healing kamu. Terletak di kawasan Taman Nasional Bromo Tengger Semeru, danau ini menawarkan suasana adem, sejuk, dan damai, pas banget buat kamu yang pengin rehat dari rutinitas harian. Dikelilingi hutan hijau dan udara pegunungan yang segar, Ranu Regulo cocok untuk camping santai, foto-foto estetik, atau duduk santai di tepi danau sambil menikmati kopi panas. Lebih tenang dari Ranu Kumbolo, tapi tetap memikat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box d-flex flex-row gap-4 align-items-center">
                                    <figure class="image-box m-0" style="flex: 1;">
                                        <img src="{{ asset ('images/tumpak_sewu.jpg') }}" style="width:100%; height: 100%; height: 350px; object-fit: cover;" alt="">
                                    </figure>
                                    <div class="lower-content d-flex flex-column justify-content-center m-0" style="flex: 1;">
                                        <h3>Tumpak Sewu - Lumajang</h3>
                                        <p>Lagi cari tempat healing yang bikin kamu terpukau? Coba deh ke Tumpak Sewu, air terjun megah di perbatasan Lumajang dan Malang yang dijuluki “Niagara-nya Indonesia”. Dengan formasi setengah lingkaran, tebing hijau yang menjulang, dan kabut tipis yang menyelimuti, suasananya terasa magis. Buat yang suka tantangan, perjalanan ke dasar lembah bakal jadi pengalaman tak terlupakan. Meski treknya cukup menantang, rasa lelah langsung terbayar saat berdiri di bawah guyuran air terjun yang deras dan menyegarkan.</p>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="more-btn">
                                <a href="{{ url ('/home#penawaran-spesial') }}" class="theme-btn btn-one">Rencanakan Petualanganmu Disini!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->
@endsection
