@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Detail Konten</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('konten.index') }}">Konten</a></li>
            <li class="breadcrumb-item active">Detail Konten</li>
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
  
                <div class="d-flex align-items-center justify-content-between m-3">
                  <h4><b>Topik : {{ $konten->topik }}</b></h4>
                  <a href="{{ route('detail-konten.show',$id) }}" class="btn btn-primary"> <i class="bi bi-plus-square"></i> Tambah </a>
                </div>
  
                <div class="row">
                  @if ($detail_konten->count() != 0)
                    @foreach ($detail_konten as $item)
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p>{{ $item->sub_judul }}</p>
                              </div>
                              <div class="d-flex gap-2">
                                <a href="{{ route('detail-konten.edit',$item->id) }}" class="btn btn-primary"><i class="ri-pencil-fill"></i></a>
                                <button type="button" class="btn btn-danger shadow-none" data-bs-toggle="modal" data-bs-target="#hapus-judul{{ $item->id }}"><i class="bi bi-trash"></i></button>
                                <div class="modal fade" id="hapus-judul{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title">Konfirmasi Hapus Data</h5>
                                          </div>
                                          <div class="modal-body text-center">
                                              <p style="color: black">Apakah anda yakin untuk menghapus konten <b>{{ $item->judul }}</b> ? <br> Jika iya, informasi yang berkaitan juga akan terhapus </p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary btn-sm shadow-none" data-bs-dismiss="modal">Tidak</button>
                                              <form action="{{ route('detail-konten.destroy',$item->id) }}" method="POST" style="display: inline;">
                                                  @method('delete')
                                                  @csrf
                                                  <input type="submit" value="Hapus" class="btn btn-danger btn-sm shadow-none">
                                              </form> 
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('layout.show',$item->id) }}" class="btn btn-info"><i class="bi bi-chevron-double-right"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  @else
                    <div class="d-flex justify-content-center align-items-center text-center">
                      <p style="color: red"> Belum Ada Konten </p>
                    </div>
                  @endif
                </div>



              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection