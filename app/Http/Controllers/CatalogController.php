<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function showBarangCatalog(){
        $catalogs = Katalog::where('category', 'barang')->get();
        return view('katalog-barang',compact('catalogs'));
    }

    public function showTripCatalog(){
        $catalogs = Katalog::where('category', 'trip')->get();
        return view('katalog-barang',compact('catalogs'));
    }

    public function showPaketCatalog(){
        $catalogs = Katalog::where('category', 'paket')->get();
        return view('katalog-barang',compact('catalogs'));
    }
}
