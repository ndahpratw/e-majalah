@extends('layouts.admin.main')

@section('content')
<div class="pagetitle">
    <h1>Pengajuan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Pengajuan</li>
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
            @elseif ($errors->has('bukti_pembayaran'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>
                {{ $errors->first('bukti_pembayaran') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif ($errors->has('berkas'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>
                {{ $errors->first('berkas') }}
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
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Asal Instansi</th>
                                        <th>Topik</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th>Layout</th>
                                        <th>Status</th>
                                        <th>Status Pembayaran</th>
                                        <th>Bukti</th>
                                        <th>Berkas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_pengajuan as $item)
                                    <tr class="text-center">
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
                                        <form action="{{ route('pengajuan.admineditstatus', $item->id) }}" method="POST" id="form-status-{{ $item->id }}">
                                            @csrf
                                            @method('PUT')
                                            <!-- @if($item->status == 'Belum Diproses')
                                                <select class="form-select status-dropdown fw-semibold bg-secondary text-light w-auto" name="status" onchange="document.getElementById('form-status-{{ $item->id }}').submit()">
                                            @elseif($item->status == 'Sedang Diproses')
                                                <select class="form-select status-dropdown fw-semibold bg-warning text-light w-auto" name="status" onchange="document.getElementById('form-status-{{ $item->id }}').submit()">
                                            @elseif($item->status == 'Ditolak')
                                                <select class="form-select status-dropdown fw-semibold bg-danger text-light w-auto" name="status" onchange="document.getElementById('form-status-{{ $item->id }}').submit()">
                                            @elseif($item->status == 'Selesai')
                                                <select class="form-select status-dropdown fw-semibold bg-success text-light w-auto" name="status" onchange="document.getElementById('form-status-{{ $item->id }}').submit()">
                                            @endif -->
                                            @if($item->status == 'Belum Diproses')
                                                <select class="form-select status-dropdown fw-semibold bg-secondary text-light w-auto" name="status" id="status-{{ $item->id }}" onchange="handleStatusChange('{{ $item->id }}')">
                                            @elseif($item->status == 'Sedang Diproses')
                                                <select class="form-select status-dropdown fw-semibold bg-warning text-light w-auto" name="status" id="status-{{ $item->id }}" onchange="handleStatusChange('{{ $item->id }}')">
                                            @elseif($item->status == 'Ditolak')
                                                <select class="form-select status-dropdown fw-semibold bg-danger text-light w-auto" name="status" id="status-{{ $item->id }}" onchange="handleStatusChange('{{ $item->id }}')">
                                            @elseif($item->status == 'Selesai')
                                                <select class="form-select status-dropdown fw-semibold bg-success text-light w-auto" name="status" id="status-{{ $item->id }}" onchange="handleStatusChange('{{ $item->id }}')">
                                            @endif
                                                <option value="Belum Diproses" {{ $item->status == 'Belum Diproses' ? 'selected' : '' }}>
                                                    Belum Diproses
                                                </option>
                                                <option value="Sedang Diproses" {{ $item->status == 'Sedang Diproses' ? 'selected' : '' }}>
                                                    Sedang Diproses
                                                </option>
                                                <option value="Ditolak" {{ $item->status == 'Ditolak' ? 'selected' : '' }}>
                                                    Ditolak
                                                </option>
                                                <option value="Selesai" {{ $item->status == 'Selesai' ? 'selected' : '' }}>
                                                    Selesai
                                                </option>
                                            </select>

                                            @if($item->status == 'Ditolak')
                                                <i class="text-danger">{{$item->keterangan}}</i>
                                            @endif

                                            <!-- Dropdown Faktor Penolakan -->
                                            <div id="reason-container-{{ $item->id }}" style="display: none; margin-top: 10px;">
                                                <label for="reason-{{ $item->id }}" class="fw-semibold">Alasan Penolakan:</label>
                                                <select class="form-select w-auto" name="keterangan" id="reason-{{ $item->id }}">
                                                    <option value="">Pilih alasan</option>
                                                    <option value="Dokumen tidak lengkap">Dokumen tidak lengkap</option>
                                                    <option value="Tidak memenuhi syarat">Tidak memenuhi syarat</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>

                                            <!-- Tombol Submit -->
                                            <button type="submit" id="submit-btn-{{ $item->id }}" class="btn btn-danger mt-2" style="display: none;">
                                                Simpan Status
                                            </button>

                                        </form>
                                        </td>
                                        <td>
                                            @if ($item->status_pembayaran == null)
                                                <i class="bi bi-x-square text-danger fs-4"></i>
                                            @elseif ($item->status_pembayaran == 'Belum Bayar')
                                                <span class="badge rounded-pill bg-danger">{{ $item->status_pembayaran }}</span>
                                            @elseif ($item->status_pembayaran == 'Menunggu Konfirmasi')
                                                <span class="badge rounded-pill bg-warning">{{ $item->status_pembayaran }}</span>
                                            @elseif ($item->status_pembayaran == 'Lunas')
                                                <span class="badge rounded-pill bg-success">{{ $item->status_pembayaran }}</span>
                                            @endif
                                        </td>
                                        <td> 
                                            @if ($item->bukti_pembayaran == null)
                                                <i class="bi bi-x-square text-danger fs-4"></i>
                                            @else
                                                <a href="" class="text-dark" data-bs-toggle="modal" data-bs-target="#lihatbuktibayar{{$item->id}}"> 
                                                    <i class="bi bi-search fs-4"></i>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="lihatbuktibayar{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <form action="{{ route('pengajuan.admineditvalidasipembayaran', $item->id) }}" method="POST" id="form-status-{{ $item->id }}" enctype="multipart/form-data"> 
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Pembayaran Pengajuan {{$item->id}}</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="{{ asset('assets/img/buktibayar/'. $item->bukti_pembayaran) }}" class="img-fluid" style="width: 100%" alt="">
                                                        </div>
                                                        <div class="modal-footer">
                                                            @if ($item->status_pembayaran == 'Menunggu Konfirmasi')
                                                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Validasi Pembayaran</button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->berkas == null)
                                                <i class="bi bi-x-square text-danger fs-4"></i>
                                            @else
                                                <a href="" class="text-dark" data-bs-toggle="modal" data-bs-target="#lihatberkas{{$item->id}}"> 
                                                    <i class="bi bi-search fs-4"></i>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="lihatberkas{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Berkas Pengajuan {{$item->id}}</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @php
                                                                $ext = pathinfo(asset('assets/img/berkas/' . $item->berkas), PATHINFO_EXTENSION);
                                                            @endphp
                                                            <embed src="{{ asset('assets/img/berkas/'. $item->berkas) }}" type="application/pdf" width="100%" height="500px" />
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            @endif
                                        </td>
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
                                                @if ($item->status == 'Selesai' && $item->status_pembayaran == 'Lunas' && $item->berkas != null)
                                                    <a href="{{ route('layout.carijudul',$item->judul) }}" class="text-dark"><u>{{ $item->judul }}<i class="bi bi-arrow-up-right-circle"></i></u></a>
                                                @else
                                                    <td>{{ $item->judul }}</td>
                                                @endif
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
                                            @if ($item->status == 'Ditolak')
                                                <div class="col-6">
                                                    Alasan Penolakan : <br>
                                                    <i class="text-danger">{{$item->keterangan}}</i>
                                                </div>
                                            @else
                                            <div class="col-6">
                                                Status Pembayaran : <br>
                                                @if($item->status == 'Sedang Diproses' || $item->status == 'Selesai' )
                                                    @if ($item->status_pembayaran == 'Belum Bayar')
                                                    <span class="badge rounded-pill bg-danger">Belum melakukan pembayaran</span>
                                                        <button type="button" class="btn btn-secondary mt-2" data-bs-toggle="modal" data-bs-target="#upbuktibayar{{$item->id}}"> <i class="bi bi-file-plus"></i> Upload Bukti Bayar </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="upbuktibayar{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <form action="{{ route('pengajuan.admineditbuktibayar', $item->id) }}" method="POST" id="form-status-{{ $item->id }}" enctype="multipart/form-data"> 
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Bukti Bayar</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="input-group mb-3">
                                                                            <input type="file" class="form-control" id="inputGroupFile02" name="bukti_pembayaran">
                                                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                                        </div>
                                                                        <i class="text-danger">* Hanya menerima file gambar (jpg / png)</i>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Kirim</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            </div>
                                                            </div>
                                                    @elseif ($item->status_pembayaran == 'Menunggu Konfirmasi')
                                                    <span class="badge rounded-pill bg-warning">Menunggu Konfirmasi Admin</span>
                                                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#showbuktibayar{{$item->id}}"> <i class="bi bi-search"></i> Lihat Bukti Bayar </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="showbuktibayar{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Pembayaran Anda</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <img src="{{ asset('assets/img/buktibayar/'. $item->bukti_pembayaran) }}" class="img-fluid" style="width: 100%" alt="">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    @elseif ($item->status_pembayaran == 'Lunas')
                                                    <span class="badge rounded-pill bg-success">Pembayaran Anda Lunas</span>
                                                    @endif
                                                @elseif ($item->status == 'Belum Diproses')
                                                    <span class="badge rounded-pill bg-warning">menunggu persetujuan admin</span>
                                                @endif
                                            </div>
                                            @endif
                                        </div>
                                        @if ($item->status == 'Sedang Diproses' && $item->status_pembayaran == 'Lunas' && $item->berkas == null)
                                            <hr>
                                            <i>Silahkan upload file anda yang berisikan teks dan gambar dalam satu file (pdf) dengan jumlah yang sesuai dengan layout yang anda pilih yaitu 
                                                <a href="#" role="button" class="text-decoration-underline text-dark" data-bs-toggle="modal" data-bs-target="#showjenislayout{{$item->id}}">
                                                    {{$item->jenis_layout}}
                                                </a>
                                            </i>
                                            <!-- Modal -->
                                            <div class="modal fade" id="showjenislayout{{$item->id}}" tabindex="-1" aria-labelledby="modalLabel{{$item->id}}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center">
                                                            @if($item->jenis_layout == 'Layout 1')
                                                                <img src="{{ asset('assets/img/layout/layout 1.jpg') }}" class="img-fluid" style="width: 100%" alt="Layout 1">
                                                            @elseif ($item->jenis_layout == 'Layout 2')
                                                                <img src="{{ asset('assets/img/layout/layout 2.jpg') }}" class="img-fluid" style="width: 100%" alt="Layout 2">
                                                            @elseif ($item->jenis_layout == 'Layout 3')
                                                                <img src="{{ asset('assets/img/layout/layout 3.jpg') }}" class="img-fluid" style="width: 100%" alt="Layout 2">
                                                            @elseif ($item->jenis_layout == 'Layout 4')
                                                                <img src="{{ asset('assets/img/layout/layout 4.jpg') }}" class="img-fluid" style="width: 100%" alt="Layout 2">
                                                            @elseif ($item->jenis_layout == 'Layout 5')
                                                                <img src="{{ asset('assets/img/layout/layout 5.jpg') }}" class="img-fluid" style="width: 100%" alt="Layout 2">
                                                            @elseif ($item->jenis_layout == 'Layout 6')
                                                                <img src="{{ asset('assets/img/layout/layout 6.jpg') }}" class="img-fluid" style="width: 100%" alt="Layout 2">
                                                            @else
                                                                <p class="text-danger">Gambar tidak ditemukan.</p>
                                                            @endif
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <form action="{{ route('pengajuan.update', $item->id) }}" method="POST" id="form-status-{{ $item->id }}" enctype="multipart/form-data"> 
                                                @csrf
                                                @method('PUT')
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02" name="berkas">
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                                <i class="text-danger">* Hanya menerima file dokumen (pdf)</i>
                                                <hr>
                                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Kirim</button>
                                            </form>

                                        @elseif ($item->status == 'Sedang Diproses' && $item->status_pembayaran == 'Lunas' && $item->berkas != null)
                                            <hr>
                                            <i>Pembuatan konten dari berkas yang Anda kirim sedang di kerjakan oleh Admin. Mohon Sabar Menunggu</i>
                                        @elseif ($item->status == 'Selesai' && $item->status_pembayaran == 'Lunas' && $item->berkas != null)
                                            <hr>
                                            <i>Pembuatan konten dari berkas yang Anda kirim sudah selesai. Anda bisa mengklik judul pengajuan konten Anda</i>
                                        @endif
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

<script>

function handleStatusChange(id) {
    let statusDropdown = document.getElementById('status-' + id);
    let reasonContainer = document.getElementById('reason-container-' + id);
    let submitButton = document.getElementById('submit-btn-' + id);
    let reasonDropdown = document.getElementById('reason-' + id);
    let form = document.getElementById('form-status-' + id);

    if (statusDropdown.value === 'Ditolak') {
        reasonContainer.style.display = 'block';
        submitButton.style.display = 'block';

        // Pastikan submit hanya bisa jika alasan penolakan dipilih
        reasonDropdown.addEventListener('change', function () {
            submitButton.disabled = reasonDropdown.value === '';
        });

    } else {
        reasonContainer.style.display = 'none';
        submitButton.style.display = 'none';
        submitButton.disabled = false; // Reset disabled saat status berubah ke selain Ditolak

        // Submit otomatis jika bukan "Ditolak"
        form.submit();
    }
}

</script>
@endsection
