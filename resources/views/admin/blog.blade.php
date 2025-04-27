@extends('admin.master.app')

@section('content')

<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
<h6 class="fw-semibold mb-0">Blog</h6>
</div>

    <div class="row gy-4">
        @foreach ($blogs as $blog)
            <div class="col-xxl-4 col-lg-4 col-sm-6">
                <div class="card h-100 p-0 radius-12 overflow-hidden">
                    <div class="card-body p-20">
                        <a href="{{ route('admin.detail.blog', $blog->id) }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->place }}" class="w-100 h-100 object-fit-cover">
                        </a>
                        <div class="mt-20">
                            <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                    <i class="ri-calendar-2-line"></i>
                                    {{ $blog->created_at->format('d M Y') }}
                                </div>
                            </div>
                            <h6 class="mb-16">
                                <a href="{{ route('admin.detail.blog', $blog->id) }}" class="text-line-1 text-hover-primary-600 text-xl transition-2">
                                    {{ $blog->place }}
                                </a>
                            </h6>
                            <p class="text-line-3 text-neutral-500">
                                {{ Str::limit($blog->description, 100) }}
                            </p>
                            <a href="{{ route('admin.detail.blog', $blog->id) }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                Lihat
                                <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection