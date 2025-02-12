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

                    @if (auth()->user()->role == 'Admin')                        
                        <div class="table-responsive">
                            <table class="table datatable" id="user">
                                <thead>
                                    <tr class="text-center">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Asal Instansi</th>
                                        <th>Topik</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th>Layout</th>
                                        <th>Status</th>
                                        <th>Status</th>
                                        <th>Pembayaran</th>
                                        <th>Bukti</th>
                                        <th>Berkas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_pengajuan as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->mitra->name }}</td>
                                        <td>
                                            @if ($item->mitra->instansi == null)
                                                -
                                            @else
                                               {{ $item->mitra->instansi }} 
                                            @endif
                                        </td>
                                        <td>{{ $item->konten->topik }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->sub_judul }}</td>
                                        <td>{{ $item->jenis_layout }}</td>
                                        <td>
                                            @if($item->status == 'Belum Diproses')
                                                <span class="badge rounded-pill bg-secondary">{{ $item->status }}</span>
                                            @elseif($item->status == 'Sedang Diproses')
                                                <span class="badge rounded-pill bg-warning">{{ $item->status }}</span>
                                            @elseif($item->status == 'Ditolak')
                                                <span class="badge rounded-pill bg-danger">{{ $item->status }}</span>
                                            @elseif($item->status == 'Selesai')
                                                <span class="badge rounded-pill bg-success">{{ $item->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->status_pembayaran }}</td>
                                        <td>{{ $item->bukti_pembayaran }}</td>
                                        <td>{{ $item->berkas }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @elseif (auth()->user()->role == 'Mitra')
                    <div class="row">
                        {{-- @if ($pengajuan->count() != 0) --}}
                        @if (count($pengajuan)) 
                            @foreach ($pengajuan as $item)
                                <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="card-title">Topik : {{ $item->konten->topik }} </h5>
                                            <div class="d-flex">
                                                {{-- hapus data --}}
                                                <button type="button" class="btn btn-danger shadow-none" data-bs-toggle="modal" data-bs-target="#hapus-data{{ $item->id }}"><i class="bi bi-trash"></i></button>
                                                <div class="modal fade" id="hapus-data{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title"> Konfirmasi Hapus Pengajuan </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <p style="color: black">Apakah anda yakin untuk menghapus data pengajuan <br> <b>{{ $item->judul }}</b> tersebut ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Tidak</button>
                                                                <form action="{{ route('pengajuan.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <input type="submit" value="Iya" class="btn btn-danger shadow-none">
                                                                </form> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <table>
                                            <tr>
                                                <td>Judul</td>
                                                <td class="w-25 text-center">  :  </td>
                                                <td>{{ $item->judul }}</td>
                                            </tr>
                                            <tr>
                                                <td>Sub Judul</td>
                                                <td class="w-25 text-center">  :  </td>
                                                <td>{{ $item->sub_judul }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Layout</td>
                                                <td class="w-25 text-center">  :  </td>
                                                <td>{{ $item->jenis_layout }}</td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <p> Status Pemrosesan : <br> 
                                                    @if($item->status == 'Belum Diproses')
                                                        <span class="badge rounded-pill bg-secondary">{{ $item->status }}</span>
                                                    @elseif($item->status == 'Sedang Diproses')
                                                        <span class="badge rounded-pill bg-warning">{{ $item->status }}</span>
                                                    @elseif($item->status == 'Ditolak')
                                                        <span class="badge rounded-pill bg-danger">{{ $item->status }}</span>
                                                    @elseif($item->status == 'Selesai')
                                                        <span class="badge rounded-pill bg-success">{{ $item->status }}</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                Status Pembayaran : <br>
                                                @if($item->status == 'Sedang Diproses' || $item->status == 'Selesai' )
                                                    @if ($item->status_pembayaran == 'Belum Bayar')
                                                        disini button upload bukti pembayaran son
                                                    @else
                                                        nah disini button buat nampilin bukti pembayaran son
                                                    @endif
                                                @elseif ($item->status == 'Belum Diproses')
                                                    <span class="badge rounded-pill bg-warning">menunggu persetujuan admin</span>
                                                @endif
                                            </div>
                                        </div>
                                        <hr>
                                        <i>disini buat upload berkas kalo udah di acc semua</i>
                                    </div>
                                </div>
                                </div>
                            @endforeach
                        @else
                            <div class="d-flex justify-content-center align-items-center text-center">
                                <p style="color: red"> Belum Ada Pengajuan </p>
                            </div>
                        @endif
                    </div>
                    @endif
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
