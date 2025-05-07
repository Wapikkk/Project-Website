@extends('admin.master.app')

@section('title', 'Testimoni')

@section('content')

<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Daftar Testimoni</h6>
    </div>

        <div class="card">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div class="d-flex flex-wrap align-items-center gap-3">
                <div class="d-flex align-items-center gap-2">
                    <span>Tampilan</span>
                    <select class="form-select form-select-sm w-auto" onchange="window.location.href='?per_page='+this.value">
                        <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                        <option value="15" {{ request('per_page', 10) == 15 ? 'selected' : '' }}>15</option>
                        <option value="20" {{ request('per_page', 10) == 20 ? 'selected' : '' }}>20</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-wrap align-items-center gap-3">
                <a href="https://www.google.com/maps/place/Al+Outdoor.id+(Sewa+Tenda+%26+Motor+Trail+Murah+Malang)/@-7.9422421,112.5950084,1178m/data=!3m1!1e3!4m8!3m7!1s0x2e7883add7908f57:0xac4bc13c3d0808a4!8m2!3d-7.9422474!4d112.5975833!9m1!1b1!16s%2Fg%2F11txs7vr8v?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn rounded-pill btn-sm btn-primary-600">Testimoni di Maps</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table bordered-table mb-0">
                    <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Review</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($reviews as $index => $review)
                            <tr>
                                <td>{{ $reviews->firstItem() + $index }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-list/user-list1.png" alt="" class="flex-shrink-0 me-12 radius-8">
                                        <h6 class="text-md mb-0 fw-medium flex-grow-1">{{$review->name}}</h6>
                                    </div>
                                </td>
                                <td class="text-wrap" style="max-width: 300px;">{{ $review->review }}</td>
                                <td>
                                    <ul class="d-flex flex-wrap align-items-center">
                                        @for ($i = 0; $i < $review->rating; $i++)
                                            <li class="text-warning-600 text-xxl line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                                        @endfor
                                    </ul>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $review->id }}">
                                        <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                    </a>
                                </td>
                            </tr>

                            <!-- Modal Konfirmasi Hapus -->
                            <div class="modal fade" id="deleteModal{{ $review->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $review->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body d-flex flex-wrap align-items-center text-center justify-content-center">
                                            <h5 class="mt-12">Konfirmasi Hapus Testimoni</h5>
                                            <h6 class="my-12">Apakah anda yakin ingin menghapus testimoni oleh {{$review->name}} dari database?</h6>
                                            <div class="row my-12">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-warning-600 radius-8 px-20 py-11" data-bs-dismiss="modal">Tidak</button>
                                                </div>
                                                <div class="col-6">
                                                    <form action="{{ route('admin.review.delete', $review->id) }}" method="POST">
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
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada testimoni.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-24">
                <span>Showing {{ $reviews->firstItem() }} to {{ $reviews->lastItem() }} of {{ $reviews->total() }} entries</span>
                <div class="pagination">
                    {{ $reviews->appends(request()->except('page'))->links() }}
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
