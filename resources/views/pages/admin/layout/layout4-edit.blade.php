@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Detail Konten</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('konten.index',$layout->isi_konten_1) }}">Konten</a></li>
            <li class="breadcrumb-item"><a href="{{ route('konten.show',$data->id_konten) }}">Detail Konten</a></li>
            <li class="breadcrumb-item active">Edit Detail Konten</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
  
          <div class="col-xl-12">
  
            <div class="card">
              <div class="card-body pt-3">
                <form action="{{ route('detail-konten.update',$data->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12 mt-1">
                          <label for="judul" class="form-label">Judul</label>
                          <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror shadow-none" id="judul" value="{{ $data->judul }}">
                          @error('judul') 
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div> 
                          @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                          <label id="sub_judul" class="form-label">Sub Judul</label>
                          <input type="text" name="sub_judul" class="form-control @error('sub_judul') is-invalid @enderror shadow-none" id="sub_judul" value="{{ $data->sub_judul }}">
                          @error('sub_judul') 
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div> 
                          @enderror
                        </div> 
                        <div class="col-md-12 mt-3">
                          <label id="jenis_layout" class="form-label">Layout</label>
                          <input type="text" name="jenis_layout" class="form-control @error('jenis_layout') is-invalid @enderror shadow-none" id="jenis_layout" value="{{ $data->jenis_layout }}" disabled>
                          @error('jenis_layout') 
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div> 
                          @enderror
                        </div>                         

                        <div class="mt-5 mb-3 d-flex justify-content-between align-items-center">
                            <a href="{{ route('konten.show',$data->id_konten) }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
  
          </div>

          <div class="col-xl-12">
  
            <div class="card">
              <div class="card-body pt-3">
                <h5 class="text-center mt-2 text-primary"> Informasi Detail Konten </h5>
                form layout 4
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection