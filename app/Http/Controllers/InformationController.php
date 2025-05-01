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
                    'ini panduan penyewaannya'
                ]
            ],
            'sk-sewa-motor' => [
                'title' => 'S&K Sewa Motor Trail',
                'paragraphs' => [
                    'ini panduan sewa motor trail'
                ]
            ],
            'sk-sewa-paket' => [
                'title' => 'S&K Sewa Paket',
                'paragraphs' => [
                    'ini panduan sewa paket'
                ]
            ],
            'sk-member' => [
                'title' => 'S&K Member',
                'paragraphs' => [
                    'ini panduan member'
                ]
            ],
        ];

        $content = $contents[$category] ?? $contents['panduan-penyewaan'];

        return view('informasi-pemesanan', compact('content'));
    }
}
