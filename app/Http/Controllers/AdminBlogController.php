<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminBlogController extends Controller
{
    public function edit ($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.edit-blog', compact('blog'));
    }
    public function update (Request $request, $id)
    {
        $request->validate([
            'place' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                $oldImagePath = public_path('images/' . $blog->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName);
            $blog->image = $imageName;
        }

        $blog->place = $request->input('place');
        $blog->description = $request->input('description');
        $blog->save();

        return redirect()->route('admin.detail.blog', $blog->id)
            ->with('success', 'Blog berhasil diperbarui!');
    }
}
