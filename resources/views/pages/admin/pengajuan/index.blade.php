@extends('layouts.admin.main')

@section('content')
<div class="pagetitle">
    <h1>Pengajuan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Komplain</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-12">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">

                    @if (auth()->user()->role == 'Mitra')                        
                        <div class="d-flex align-items-center justify-content-end m-3">
                            <a href="{{ route('pengajuan.create') }}" class="btn btn-primary"> <i class="bi bi-plus-square"></i> Tambah </a>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table datatable" id="user">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Instansi</th>
                                    <th>Topik</th>
                                    <th>Judul</th>
                                    <th>Sub Judul</th>
                                    <th>Status</th>
                                    <th>Layout</th>
                                    <th>Status</th>
                                    <th>Pembayaran</th>
                                    <th>Bukti</th>
                                    <th>Berkas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengajuan as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->id_mitra }}</td>
                                    <td>{{ $item->id_konten }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->sub_judul }}</td>
                                    <td>{{ $item->jenis_layout }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->status_pembayaran }}</td>
                                    <td>{{ $item->bukti_pembayaran }}</td>
                                    <td>{{ $item->berkas }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
