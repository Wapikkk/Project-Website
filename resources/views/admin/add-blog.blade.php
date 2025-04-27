@extends('admin.master.app')

@section('content')
<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Tambah Blog</h6>
    </div>

    <div class="row gy-4">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header border-bottom">
                    <h6 class="text-xl mb-0">Tambah Blog Baru</h6>
                </div>
                <div class="card-body p-24">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.add.blog.store') }}" method="POST" class="d-flex flex-column gap-20" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="form-label fw-bold text-neutral-900" for="title">Judul Blog: </label>
                            <input type="text" class="form-control border border-neutral-200 radius-8 @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukkan Judul Blog" value="{{ old('title') }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label class="form-label fw-bold text-neutral-900">Deskripsi Blog: </label>
                            <textarea id="description" name="description" class="form-control border border-neutral-200 radius-8 @error('description') is-invalid @enderror" rows="7" cols="50" placeholder="Masukkan Deskripsi Blog..." required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label class="form-label fw-bold text-neutral-900">Upload Thumbnail </label>
                            <div class="upload-image-wrapper">
                                <div class="uploaded-img d-none position-relative h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                    <button type="button" class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex bg-danger-600 w-40-px h-40-px justify-content-center align-items-center rounded-circle">
                                        <iconify-icon icon="radix-icons:cross-2" class="text-2xl text-white"></iconify-icon>
                                    </button>
                                    <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover" src="assets/images/user.png" alt="image">
                                </div>
                                <label class="upload-file h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1" for="upload-file">
                                    <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                                    <span class="fw-semibold text-secondary-light">Upload</span>
                                    <input id="upload-file" name="upload_file" type="file" hidden required>
                                </label>
                                @error('upload_file')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="form-label fw-bold text-neutral-900" for="file_name">Nama File Thumbnail: </label>
                            <input type="text" class="form-control border border-neutral-200 radius-8 @error('file_name') is-invalid @enderror" id="file_name" name="file_name" placeholder="Masukkan Nama File Thumbnail" value="{{ old('file_name') }}" required>
                            @error('file_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary-600 radius-8">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
            <div class="d-flex flex-column gap-24">
                <!-- Latest Blog -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="text-xl mb-0">Blog Terbaru</h6>
                    </div>
                    <div class="card-body d-flex flex-column gap-24 p-24">
                        @foreach ($latestBlogs as $latestBlog)
                            <div class="d-flex flex-wrap">
                                <a href="{{ route('admin.detail.blog', $latestBlog->id) }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                                    <img src="{{ asset('storage/' . $latestBlog->image) }}" alt="{{ $latestBlog->place }}" class="w-100 h-100 object-fit-cover">                        
                                </a>
                                <div class="blog__content d-flex flex-column justify-content-center">
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
</div>
@endsection

@section('script')
<script>
    // =============================== Upload Single Image js start here ================================================
    const fileInput = document.getElementById("upload-file");
    const imagePreview = document.getElementById("uploaded-img__preview");
    const uploadedImgContainer = document.querySelector(".uploaded-img");
    const removeButton = document.querySelector(".uploaded-img__remove");

    fileInput.addEventListener("change", (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            imagePreview.src = src;
            uploadedImgContainer.classList.remove('d-none');
        }
    });
    removeButton.addEventListener("click", () => {
        imagePreview.src = "";
        uploadedImgContainer.classList.add('d-none');
        fileInput.value = ""; 
    });
    // =============================== Upload Single Image js End here ================================================
</script>
@endsection