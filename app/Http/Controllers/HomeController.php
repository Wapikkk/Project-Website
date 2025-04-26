<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->take(10)->get();
        return view('home', compact('reviews'));
    }
}
