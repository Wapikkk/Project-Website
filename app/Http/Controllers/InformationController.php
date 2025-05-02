<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function show($category = 'panduan-penyewaan')
    {
        $contents = [
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
                    'Saya sudah membaca dan menyetujui Syarat & Ketentuan penyewaan. Terima kasih.'
                ]
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
            ],
        ];

        $content = $contents[$category] ?? $contents['panduan-penyewaan'];

        return view('informasi-pemesanan', compact('content'));
    }
}
