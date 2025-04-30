<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\Request;
use Storage;
use Str;

class VacationController extends Controller
{
    public function index()
    {
        $vacations = Vacation::orderBy('created_at', 'desc')->get();
        return view('rekomendasi-wisata', compact('vacations'));
    }

    // Controller Admin

    public function showBlogAdmin()
    {
        $blogs = Vacation::orderBy('created_at', 'desc')->get();
        return view('admin.blog', compact('blogs'));
    }

    public function showBlogDetail($id)
    {
        $blog = Vacation::findOrFail($id);
        $latestBlogs = Vacation::where('id', '!=', $id)
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();
        return view('admin.detail-blog', compact('blog', 'latestBlogs'));
    }

    public function showAddBlog()
    {
        $latestBlogs = Vacation::orderBy('created_at', 'desc')
        ->take(5)
        ->get();
        return view('admin.add-blog', compact('latestBlogs'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'upload_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
            'file_name' => 'required|string|max:255',
        ]);

        // Proses upload gambar dengan nama dari input file_name
        $fileName = Str::slug($request->file_name) . '.' . $request->file('upload_file')->getClientOriginalExtension();
        $imagePath = $request->file('upload_file')->storeAs('img', $fileName, 'public');

        // Simpan data blog ke database
        Vacation::create([
            'place' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.show.blog')->with('success', 'Blog berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $blog = Vacation::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        // Hapus blog dari database
        $blog->delete();

        return redirect()->route('admin.show.blog')->with('success', 'Blog berhasil dihapus!');
    }
}
