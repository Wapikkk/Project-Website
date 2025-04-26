<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\Request;

class VacationController extends Controller
{
    public function index()
    {
        $vacations = Vacation::all();
        return view('rekomendasi-wisata', compact('vacations'));
    }
}
