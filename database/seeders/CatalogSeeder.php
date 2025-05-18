<?php

namespace Database\Seeders;

use App\Models\Katalog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catalogs = [
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/10.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/11.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/12.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/13.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/14.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/15.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/16.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/17.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/18.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/19.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/20.png',
            ],
            [
                'category' => 'barang',
                'image' => 'images/katalog-barang/trail.png',
            ],
            [
                'category' => 'trip',
                'image' => 'images/katalog-opentrip/ot_2.png',
            ],
            [
                'category' => 'trip',
                'image' => 'images/katalog-opentrip/ot_3.png',
            ],
            [
                'category' => 'trip',
                'image' => 'images/katalog-opentrip/ot_4.png',
            ],
            [
                'category' => 'trip',
                'image' => 'images/katalog-opentrip/ot_5.png',
            ],
            [
                'category' => 'trip',
                'image' => 'images/katalog-opentrip/ot_6.png',
            ],
            [
                'category' => 'trip',
                'image' => 'images/katalog-opentrip/ot_7.png',
            ],
            [
                'category' => 'trip',
                'image' => 'images/katalog-opentrip/ot_8.png',
            ],
            [
                'category' => 'paket',
                'image' => 'images/katalog-paket/Paket_1.png',
            ],
            [
                'category' => 'paket',
                'image' => 'images/katalog-paket/Paket_2.png',
            ],
            [
                'category' => 'paket',
                'image' => 'images/katalog-paket/Paket_3.png',
            ],
            [
                'category' => 'paket',
                'image' => 'images/katalog-paket/Paket_4.png',
            ],
        ];

        DB::table('katalogs')->insert($catalogs);
    }
}
