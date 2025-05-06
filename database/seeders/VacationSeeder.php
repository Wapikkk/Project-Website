<?php

namespace Database\Seeders;

use App\Models\Vacation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacations = [
            [
                'place' => 'Gunung Bromo - Malang',
                'description' => 'Siapa sih yang nggak kenal Gunung Bromo? Tempat wisata ini selalu jadi andalan buat kamu yang ingin rehat sejenak dari hiruk-pikuk kota dan menikmati alam. Terletak di Taman Nasional Bromo Tengger Semeru, Bromo menyuguhkan panorama sunrise yang memukau, lautan pasir yang luas, serta udara sejuk yang menenangkan. Dari Bukit Penanjakan hingga Kawah Bromo, setiap sudutnya cocok untuk berfoto atau sekadar duduk santai menikmati suasana. Cocok banget buat liburan bareng teman, keluarga, atau solo traveling.',
                'image' => 'img/sunset_bromo.jpg',
            ],
            [
                'place' => 'Bumi Perkemahan Bedengan - Malang',
                'description' => 'Kalau kamu lagi cari tempat healing yang adem, tenang, dan nggak jauh dari kota, Bumi Perkemahan Bedengan bisa jadi jawaban terbaik. Terletak di kawasan Dau, Malang, lokasi ini dikelilingi hutan pinus yang rimbun dan aliran sungai jernih yang bikin suasana makin damai. Bedengan cocok banget buat kamu yang pengin camping santai bareng teman, family time, atau sekadar rebahan di hammock sambil denger suara alam. Udara di sini sejuk banget, dan saat malam tiba, kamu bisa menikmati langit berbintang tanpa gangguan cahaya kota.',
                'image' => 'img/bedengan.jpg',
            ],
            [
                'place' => 'Gunung Butak - Blitar',
                'description' => 'Kalau kamu pendaki yang suka ketenangan dan ingin merasakan suasana hiking yang lebih sepi, Gunung Butak bisa jadi pilihan tepat. Terletak di perbatasan Malang dan Blitar, gunung ini memiliki jalur menantang tapi tenang, jauh dari keramaian. Di puncaknya, kamu akan disambut sabana luas dan panorama 360 derajat yang memukau. Sunrise di sini sangat magis, namun suhu malam bisa ekstrem, jadi bawalah perlengkapan camping yang lengkap. Cocok untuk me time atau quality time bersama sahabat pendaki.',
                'image' => 'img/gunung_butak.jpg',
            ],
            [
                'place' => 'Pantai Watu Leter - Malang',
                'description' => 'Lagi pingin healing tapi bosan dengan pantai yang ramai dan penuh spot selfie? Coba deh ke Pantai Watu Leter. Terletak di Malang Selatan, pantai ini masih alami dan sepi, cocok buat menikmati suasana damai ditemani suara ombak dan angin laut. Pasir putih, karang unik, dan tebing eksotis jadi daya tarik utamanya. Serunya, tempat ini juga jadi habitat penyu! Kalau beruntung, kamu bisa lihat pelepasan tukik yang menggemaskan. Pas buat camping ringan, baca buku di hammock, atau jalan santai bareng orang tersayang.',
                'image' => 'img/pantai_watu_leter.jpg',
            ],
            [
                'place' => 'Pantai Kondang Merak - Malang',
                'description' => 'Lagi cari pantai yang sepi, adem, dan jauh dari keramaian? Pantai Kondang Merak bisa jadi pilihan yang pas! Terletak di Malang Selatan, pantai ini menawarkan hamparan pasir putih yang luas, ombak yang tenang, serta deretan pepohonan rindang yang bikin suasana makin damai dan nyaman. Tempat ini cocok banget buat kamu yang pengin camping santai, ngopi sambil menikmati pemandangan laut, atau sekadar rebahan di atas tikar sambil mendengarkan suara ombak yang menenangkan pikiran.',
                'image' => 'img/pantai_kondang_merak.jpeg',
            ],
            [
                'place' => 'Ranu Regulo - Lumajang',
                'description' => 'Kalau kamu butuh tempat yang tenang, jauh dari hiruk-pikuk, dan penuh nuansa alami, Ranu Regulo wajib ada di daftar healing kamu. Terletak di kawasan Taman Nasional Bromo Tengger Semeru, danau ini menawarkan suasana adem, sejuk, dan damai, pas banget buat kamu yang pengin rehat dari rutinitas harian. Dikelilingi hutan hijau dan udara pegunungan yang segar, Ranu Regulo cocok untuk camping santai, foto-foto estetik, atau duduk santai di tepi danau sambil menikmati kopi panas. Lebih tenang dari Ranu Kumbolo, tapi tetap memikat.',
                'image' => 'img/ranu_regulo.jpg',
            ],
            [
                'place' => 'Tumpak Sewu - Lumajang',
                'description' => 'Lagi cari tempat healing yang bikin kamu terpukau? Coba deh ke Tumpak Sewu, air terjun megah di perbatasan Lumajang dan Malang yang dijuluki “Niagara-nya Indonesia”. Dengan formasi setengah lingkaran, tebing hijau yang menjulang, dan kabut tipis yang menyelimuti, suasananya terasa magis. Buat yang suka tantangan, perjalanan ke dasar lembah bakal jadi pengalaman tak terlupakan. Meski treknya cukup menantang, rasa lelah langsung terbayar saat berdiri di bawah guyuran air terjun yang deras dan menyegarkan.',
                'image' => 'img/tumpak_sewu.jpg',
            ],
        ];

        foreach ($vacations as $vacation) {
            Vacation::create($vacation);
        }
    }
}
