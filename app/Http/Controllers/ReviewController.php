<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function showReviewAdmin()
    {
        $reviews = Review::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.review', compact('reviews'));
    }

    public function showAddReview()
    {
        return view('admin.add-review');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'rating.required' => 'Rating wajib diisi.',
            'rating.integer' => 'Rating harus berupa angka.',
            'rating.between' => 'Rating harus antara 1 dan 5.',
            'review.required' => 'Testimoni wajib diisi.',
            'review.string' => 'Testimoni harus berupa teks.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Review::create([
            'name' => $request->name,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect()->route('admin.show.review')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('admin.show.review')->with('success', 'Testimoni berhasil dihapus.');
    }
}
