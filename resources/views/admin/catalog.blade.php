@extends('admin.master.app')

@section('title', 'Blog')

@section('content')

    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Gallery</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">Gallery</li>
            </ul>
        </div>

        <div class="card h-100 p-0 radius-12 overflow-hidden">
            <div class="card-header border-bottom-0 pb-0 pt-0 px-0">
                <ul class="nav border-gradient-tab nav-pills mb-0 border-top-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                            type="button" role="tab" aria-controls="pills-all" aria-selected="true">
                            Semua
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-ui-design-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-ui-design" type="button" role="tab" aria-controls="pills-ui-design"
                            aria-selected="false" tabindex="-1">
                            Katalog Barang
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-web-design-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-web-design" type="button" role="tab"
                            aria-controls="pills-web-design" aria-selected="false" tabindex="-1">
                            Katalog Opentrip
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-development-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-development" type="button" role="tab"
                            aria-controls="pills-development" aria-selected="false" tabindex="-1">
                            Katalog Paket
                        </button>
                    </li>
                </ul>
            </div>
            <div class="card-body p-24">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            @foreach ($allCatalogs as $all)
                                <div class="col-xxl-3 col-md-4 col-sm-6">
                                    <div class="hover-scale-img border radius-16 overflow-hidden">
                                        <div class="max-h-500-px overflow-hidden">
                                            <img src="{{ asset($all->image) }}" alt=""
                                                class="hover-scale-img__img w-100 h-100 object-fit-cover">
                                        </div>
                                        <div class="py-16 px-24">
                                            <h6>Katalog {{ $loop->iteration }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-ui-design" role="tabpanel" aria-labelledby="pills-ui-design-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            @foreach ($barangCatalogs as $all)
                                <div class="col-xxl-3 col-md-4 col-sm-6">
                                    <div class="hover-scale-img border radius-16 overflow-hidden">
                                        <div class="max-h-500-px overflow-hidden">
                                            <img src="{{ asset($all->image) }}" alt=""
                                                class="hover-scale-img__img w-100 h-100 object-fit-cover">
                                        </div>
                                        <div class="py-16 px-24">
                                            <h6>Katalog Barang {{ $loop->iteration }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-web-design" role="tabpanel" aria-labelledby="pills-web-design-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            @foreach ($tripCatalogs as $all)
                                <div class="col-xxl-3 col-md-4 col-sm-6">
                                    <div class="hover-scale-img border radius-16 overflow-hidden">
                                        <div class="max-h-500-px overflow-hidden">
                                            <img src="{{ asset($all->image) }}" alt=""
                                                class="hover-scale-img__img w-100 h-100 object-fit-cover">
                                        </div>
                                        <div class="py-16 px-24">
                                            <h6>Katalog Opentrip {{ $loop->iteration }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-development" role="tabpanel"
                        aria-labelledby="pills-development-tab" tabindex="0">
                        <div class="row gy-4">
                            @foreach ($paketCatalogs as $all)
                                <div class="col-xxl-3 col-md-4 col-sm-6">
                                    <div class="hover-scale-img border radius-16 overflow-hidden">
                                        <div class="max-h-500-px overflow-hidden">
                                            <img src="{{ asset($all->image) }}" alt=""
                                                class="hover-scale-img__img w-100 h-100 object-fit-cover">
                                        </div>
                                        <div class="py-16 px-24">
                                            <h6>Katalog Paket {{ $loop->iteration }}</h6>
                                        </div>
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