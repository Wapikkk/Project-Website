<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'Mawara Syahla Nafisah',
                'review' => 'Udah beberapa kali sewa alat outdoor disini ga pernah fail, service baik + kualitas barang bagus. Terakhir sewa sepatu tracking dapet sepatu baru. Alat-alat juga lengkap',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HURIYAH AQILAH',
                'review' => 'BAGUSSS, keren bangettt. Meskipun pesen mendadak tapi adminnya gercep puoll, meskipun gercep tapi yg dipesen juga okeee 😻😻 harganya juga affordable bangettt dengan kualitas yang baguss, insyaallah bakal sering kesiniii nii andalan tenda teenant xixi …',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regitha Dwi Bestari',
                'review' => 'Mantap sekali, pelayanan baik, mas nya ramah, alat2nya bagusss sleeping bag wangi sedap, tenda mudah dipasang, ada tutorial juga di ig nya, insya Allah kalau jalan2 lagi sewa sini lagi!! ❤️❤️❤️',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Abdul 025',
                'review' => 'Al Outdoor.id menawarkan layanan sewa tenda dan motor trail yang sangat memuaskan. Proses penyewaannya mudah, dengan harga yang sangat terjangkau untuk kualitas yang diberikan. Stafnya ramah dan siap membantu, membuat pengalaman outdoor jadi lebih menyenangkan. Tempat ini cocok bagi pecinta alam yang ingin menjelajah Malang. Sangat direkomendasikan!',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fitria Ramadhani',
                'review' => 'Pelayanan fast respon sekalii dn murah bgt sewanyaa, recom bgtttt 👍🏼👍🏼',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vira Putri',
                'review' => 'Tempat persewaan alat camping  yg lengkap bgt Pelayanannya 10/10 . Bisa minta jasa utk bantu pasang dan bongkarnya jg jd ga repot. Next trip pasti sewa kesini lg sih😁',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'trashurlog 33',
                'review' => 'Baru pertama kali sewa di tempat ini dan BAKALAN SEWA LAGI KESINI! Pelayanan baik, harga oke, kualitas barang oke',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dwi Cahya Firmansyah',
                'review' => 'Pelayanan bagus, penjaganya ramah, informatif. Yang mau sewa alat camp untuk di malang bisa langsung mampir kesini',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Miftahul Djannah',
                'review' => 'Mantap admin fast respon, infonya lengkap ada diskon pula',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Mariyam',
                'review' => 'Bagi mahasiswa ada diskon 10%, admin responnya cepet',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('reviews')->insert($reviews);
    }
}
