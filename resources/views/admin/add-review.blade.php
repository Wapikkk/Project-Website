@extends('admin.master.app')

@section('content')

<div class="dashboard-main-body">

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">Tambah Testimoni</h6>

</div>

    <div class="row gy-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tambah Testimoni Baru</h5>
                </div>
                <div class="card-body">
                    <form id="addReviewForm" action="{{ route('admin.add.review.store') }}" method="POST">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Pelanggan" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Rating</label>
                                <select name="rating" class="form-select @error('rating') is-invalid @enderror">
                                    <option value="" disabled {{ old('rating') ? '' : 'selected' }}>Pilih Rating</option>
                                    <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>5</option>
                                    <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>4</option>
                                    <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>3</option>
                                    <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>2</option>
                                    <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>1</option>
                                </select>
                                @error('rating')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Testimoni</label>
                                <textarea name="review" class="form-control @error('review') is-invalid @enderror" cols="30" rows="5" placeholder="Masukkan Testimoni dari Pelanggan">{{ old('review') }}</textarea>
                                @error('review')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 d-flex flex-column">
                                <button type="button" class="btn btn-primary-600 radius-8 px-20 py-11" data-bs-toggle="modal" data-bs-target="#confirmAddModal">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title mb-0">Catatan!</h5>
                </div>
                <div class="card-body">
                    <p class="mb-16 text-secondary-light fw-normal">Sebelum mengisi form ini, diharapkan untuk melihat Google Maps terlebih dahulu agar tahu tentang penilaian oleh pengguna dan diisi sesuai dengan apa yang ada.</p>
                    <a href="https://www.google.com/maps/place/Al+Outdoor.id+(Sewa+Tenda+%26+Motor+Trail+Murah+Malang)/@-7.9422421,112.5950084,1178m/data=!3m1!1e3!4m8!3m7!1s0x2e7883add7908f57:0xac4bc13c3d0808a4!8m2!3d-7.9422474!4d112.5975833!9m1!1b1!16s%2Fg%2F11txs7vr8v?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn rounded-pill btn-sm btn-primary-600">Lihat di Maps</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Tambah -->
    <div class="modal fade" id="confirmAddModal" tabindex="-1" aria-labelledby="confirmAddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-wrap align-items-center text-center justify-content-center">
                    <h5 class="mt-12">Konfirmasi Tambah Testimoni</h5>
                    <h6 class="my-12">Apakah Anda yakin ingin menambahkan testimoni ini?</h6>
                    <div class="row my-12">
                        <div class="col-6">
                            <button type="button" class="btn btn-warning-600 radius-8 px-20 py-11" data-bs-dismiss="modal">Tidak</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary-600 radius-8 px-20 py-11" onclick="document.getElementById('addReviewForm').submit()">Ya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection