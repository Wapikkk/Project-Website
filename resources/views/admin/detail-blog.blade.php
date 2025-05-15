@extends('admin.master.app')

@section('title', 'Detail Blog')

@section('content')

<div class="dashboard-main-body">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Detail Blog</h6>
        <ul class="d-flex align-items-center gap-2">
            <button type="button" class="btn rounded-pill btn-primary-600 radius-8 px-16 py-9">
                <a href="{{ route('admin.edit.blog', $blog->id) }}" class="text-white decoration-none">Edit</a>
            </button>
            <form action="{{ route('admin.blog.delete', $blog->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus blog ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn rounded-pill btn-danger-600 radius-8 px-16 py-9">Hapus</button>
            </form>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-lg-8">
            <div class="card p-0 radius-12 overflow-hidden">
                <div class="card-body p-0">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="w-100 h-100 object-fit-cover">                        
                    <div class="p-32">
                        <div class="d-flex align-items-center gap-16 justify-content-between flex-wrap mb-24">
                            <div class="d-flex align-items-center gap-md-3 gap-2 flex-wrap">
                                <div class="d-flex align-items-center gap-8 text-neutral-500 text-lg fw-medium">
                                    <i class="ri-calendar-2-line"></i>
                                    {{ $blog->created_at->format('d M Y') }}
                                </div>
                            </div>
                        </div>
                        <h3 class="mb-16"> {{ $blog->place }} </h3>
                        <p class="text-neutral-500 mb-16">{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column gap-24">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="text-xl mb-0">Blog Lain</h6>
                    </div>
                    <div class="card-body d-flex flex-column gap-24 p-24">
                        @foreach ($latestBlogs as $latestBlog)
                            <div class="d-flex flex-wrap">
                                <a href="{{ route('admin.detail.blog', $latestBlog->id) }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                                    <img src="{{ asset('storage/' . $latestBlog->image) }}" alt="{{ $latestBlog->place }}" class="w-100 h-100 object-fit-cover">                        
                                </a>
                                <div class="blog__content">
                                    <h6 class="mb-8">
                                        <a href="{{ route('admin.detail.blog', $latestBlog->id) }}" class="text-line-2 text-hover-primary-600 text-md transition-2">
                                            {{ $latestBlog->place }}
                                        </a>
                                    </h6>
                                    <p class="text-line-2 text-sm text-neutral-500 mb-0">
                                        {{ Str::limit($latestBlog->description, 100) }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal{{ $blog->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $blog->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-wrap align-items-center text-center justify-content-center">
                    <h5 class="mt-12">Konfirmasi Hapus Blog</h5>
                    <h6 class="my-12">Apakah Anda yakin ingin menghapus blog "{{ $blog->place }}" dari database?</h6>
                    <div class="row my-12">
                        <div class="col-6">
                            <button type="button" class="btn btn-warning-600 radius-8 px-20 py-11" data-bs-dismiss="modal">Tidak</button>
                        </div>
                        <div class="col-6">
                            <form action="{{ route('admin.blog.delete', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger-600 radius-8 px-20 py-11">Ya</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection