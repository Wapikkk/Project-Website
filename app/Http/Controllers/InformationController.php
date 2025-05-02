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
                    'CIHUYYYYYY :D'
                ]
            ],
            'sk-sewa-motor' => [
                'title' => 'S&K Sewa Motor Trail',
                'paragraphs' => [
                    'CIHUYYYYYY :D'
                ]
            ],
            'sk-sewa-paket' => [
                'title' => 'S&K Sewa Paket',
                'paragraphs' => [
                    'CIHUYYYYYY :D'
                ]
            ],
            'sk-member' => [
                'title' => 'S&K Member',
                'paragraphs' => [
                    'CIHUYYYYYY :D'
                ]
            ],
        ];

        $content = $contents[$category] ?? $contents['panduan-penyewaan'];

        return view('informasi-pemesanan', compact('content'));
    }
}
