@extends('admin.master.app')

@section('title', 'Edit Blog')

@section('content')

<div class="dashboard-main-body">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Edit Blog</h6>
        <a href="{{ route('admin.detail.blog', $blog->id) }}" class="btn rounded-pill btn-primary-600 radius-8 px-16 py-9">Kembali</a>
    </div>

    <div class="card p-32 radius-12">
        <form action="{{ route('admin.edit.blog.store', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-24">
                <label for="place" class="form-label">Judul</label>
                <input type="text" name="place" id="place" class="form-control" value="{{ old('place', $blog->place) }}" required>
                @error('place')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-24">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $blog->description) }}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-24">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" name="image" id="image" class="form-control">
                @if ($blog->image)
                    <div class="mt-16">
                        <img src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->place }}" class="w-50 h-auto">
                        <p class="text-neutral-500 mt-8">Biarkan kosong jika tidak ingin mengganti gambar.</p>
                    </div>
                @endif
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary-600 radius-8 px-20 py-11">Simpan Perubahan</button>
        </form>
    </div>
</div>

@endsection