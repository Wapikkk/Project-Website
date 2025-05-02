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
                                    'paragraphs' => [
                                        '1. Silakan jelajahi katalog kami untuk melihat berbagai perlengkapan outdoor dan trip yang tersedia.',
                                        '2. Catat nama barang atau paket trip yang ingin disewa atau diikuti.',
                                        '3. Klik tombol/ikon Whatsapp pada halaman katalog atau hubungi langsung melalui nomor resmi Aloutdoor.',
                                        '4. Gunakan format pemesanan dibawah ini untuk mempermudah proses:',
                                        'Halo Admin Aloutdoor.id, saya ingin melakukan pemesanan dengan detail berikut:',
                                        'Nama: [Nama Lengkap]',
                                        'No. HP: [Nomor Aktif]',
                                        'Tanggal Sewa: [Tanggal Mulai - Tanggal Kembali]',
                                        'Nama Barang / Paket: [Contoh: Tenda Kapasitas 4 Orang / Open Trip Bromo]',
                                        'Jumlah: [Jumlah Unit / Orang]',
                                        'Metode Pengambilan: [Ambil Sendiri / Delivery]',
                                        'Metode Pembayaran: [cash/qris/transfer via bank BCA]',
                                        'Saya sudah membaca dan menyetujui Syarat & Ketentuan penyewaan. Terima kasih.']
                                    ],
                                'sk-sewa-motor' => [
                                    'title' => 'S&K Sewa Motor Trail',
                                    'paragraphs' => [
                                        '1. Meninggalkan Jaminan Motor+STNK+KTP',
                                        '2. DP minimal 100k per motor',
                                        '3. Jika ada kerusakan atau kehilangan ditanggung penyewa',
                                        '4. Keterlambatan pengembalian dikenakan denda 20k/jam',
                                        '5. Kerusakan kampas kopling dikenakan biaya 150k',
                                        '6. DP yang sudah dibayar tidak bisa diminta kembali apabila ada pembatalan',
                                        '7. Motor Trail dilarang melintas jalur tertib lalulintas (Pelanggaran lalu lintas di tanggung penyewa)'
                                    ]
                                ],
                                'sk-sewa-paket' => [
                                    'title' => 'S&K Sewa Barang',
                                    'paragraphs' => [
                                        '1. Jaminan berupa Kartu Identitas yang masih berlaku',
                                        '2. Durasi sewa terhitung sejak pengambilan barang hingga batas toleransi waktu pengembalian maksimal 4 Jam (contoh: pengambilan alat hari sabtu jam 15.00 WIB dan harus kembali hari minggu jam 15.00 WIB atau maksimal pengembalian sebelum jam 19.00 WIB)',
                                        '3. Jika ada kerusakan atau kehilangan barang ditanggung sepenuhnya oleh penyewa',
                                        '4. Saat booking wajib DP 50% dari total biaya barang yang disewa',
                                        '5. Barang yang sudah dipesan apabila dibatalkan saat hari H dikenakan denda 50%',
                                        '6. DP yang sudah dibayar tidak dapat diminta kembali apa bila ada pembatalan'
                                    ]
                                ],
                                'sk-member' => [
                                    'title' => 'S&K Member',
                                    'paragraphs' => [
                                        '1. Menyimpan nomor WhatsApp resmi Aloutdoor untuk keperluan komunikasi dan informasi promo.',
                                        '2. Memberikan ulasan di Google Maps mengenai Aloutdoor.id',
                                        '3. Mengikuti akun Instagram @aloutdoor.id dan TikTok @aloutdoor.id, serta menyertakan bukti follow dalam bentuk screenshot.',
                                        '4. Menyertakan foto KTP sebagai verifikasi identitas. Data akan dijaga kerahasiaannya dan hanya digunakan untuk keperluan keanggotaan.',
                                        'Setelah seluruh syarat dipenuhi, kirimkan semua bukti dalam satu kali pengiriman ke WhatsApp resmi Aloutdoor. Tim kami akan melakukan verifikasi dan mengaktifkan status member Anda.'
                                    ]
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