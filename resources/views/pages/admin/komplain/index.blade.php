@extends('layouts.admin.main')

@section('content')
<div class="pagetitle">
    <h1>Komplain</h1>
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
                            <a href="{{ route('komplain.create') }}" class="btn btn-primary"> <i class="bi bi-plus-square"></i> Tambah </a>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table datatable" id="user">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Instansi</th>
                                    <th>Catatan</th>
                                    <th>Topik</th>
                                    <th>Judul Konten</th>
                                    <th>Status</th>
                                    @if (auth()->user()->role == 'Mitra')
                                        <th></th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact_us as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->mitra->instansi }}</td>
                                    <td>{{ $item->catatan }}</td>
                                    <td>{{ $item->detail_konten->konten->topik }}</td>
                                    <td>
                                    <a href="{{ route('detail-konten.edit',$item->detail_konten->id) }}" class="text-dark"><u>{{ $item->detail_konten->judul }}<i class="bi bi-arrow-up-right-circle"></i></u></a>
                                    </td>
                                    <td>
                                        @if (auth()->user()->role == 'Admin')
                                            <form action="{{ route('komplain.update', $item->id) }}" method="POST" id="form-status-{{ $item->id }}">
                                                @csrf
                                                @method('PUT')
                                                @if($item->status == 'Belum Terbaca')
                                                    <select class="form-select status-dropdown fw-semibold bg-danger text-light w-auto" name="status" onchange="document.getElementById('form-status-{{ $item->id }}').submit()">
                                                @elseif($item->status == 'Dihiraukan')
                                                    <select class="form-select status-dropdown fw-semibold bg-secondary text-light w-auto" name="status" onchange="document.getElementById('form-status-{{ $item->id }}').submit()">
                                                @elseif($item->status == 'Proses')
                                                    <select class="form-select status-dropdown fw-semibold bg-warning text-light w-auto" name="status" onchange="document.getElementById('form-status-{{ $item->id }}').submit()">
                                                @elseif($item->status == 'Selesai')
                                                    <select class="form-select status-dropdown fw-semibold bg-success text-light w-auto" name="status" onchange="document.getElementById('form-status-{{ $item->id }}').submit()">
                                                @endif
                                                    <option value="Belum Terbaca" {{ $item->status == 'Belum Terbaca' ? 'selected' : '' }}>
                                                        Belum Terbaca
                                                    </option>
                                                    <option value="Dihiraukan" {{ $item->status == 'Dihiraukan' ? 'selected' : '' }}>
                                                        Dihiraukan
                                                    </option>
                                                    <option value="Proses" {{ $item->status == 'Proses' ? 'selected' : '' }}>
                                                        Proses
                                                    </option>
                                                    <option value="Selesai" {{ $item->status == 'Selesai' ? 'selected' : '' }}>
                                                        Selesai
                                                    </option>
                                                </select>
                                            </form>
                                        @else
                                            @if($item->status == 'Belum Terbaca')
                                                <span class="badge rounded-pill bg-danger">{{ $item->status }}</span>
                                            @elseif($item->status == 'Dihiraukan')
                                                <span class="badge rounded-pill bg-secodary">{{ $item->status }}</span>
                                            @elseif($item->status == 'Proses')
                                                <span class="badge rounded-pill bg-warning">{{ $item->status }}</span>
                                            @elseif($item->status == 'Selesai')
                                                <span class="badge rounded-pill bg-success">{{ $item->status }}</span>
                                            @endif
                                        @endif
                                    </td>
                                    @if (auth()->user()->role == 'Mitra')
                                        <td>
                                            {{-- hapus data --}}
                                            <button type="button" class="btn btn-sm btn-danger shadow-none" data-bs-toggle="modal" data-bs-target="#hapus-data{{ $item->id }}"><i class="bi bi-trash"></i></button>
                                            <div class="modal fade" id="hapus-data{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title"> Konfirmasi Hapus Komplain </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <p style="color: black">Apakah anda yakin untuk menghapus data tersebut ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Tidak</button>
                                                            <form action="{{ route('komplain.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                                @method('delete')
                                                                @csrf
                                                                <input type="submit" value="Iya" class="btn btn-danger shadow-none">
                                                            </form> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    @endif
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
