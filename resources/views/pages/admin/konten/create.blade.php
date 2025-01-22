@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Konten</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('konten.index') }}">Konten</a></li>
            <li class="breadcrumb-item active">Tambah Konten</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
  
          <div class="col-xl-12">
  
            <div class="card">
              <div class="card-body pt-3 row">
                <form action="{{ route('konten.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-12 mt-3">
                      <label for="topik" class="form-label fw-bold">Topik</label>
                      <input type="text" name="topik" class="form-control @error('topik') is-invalid @enderror shadow-none" id="topik" value="{{ old('topik') }}">
                      @error('topik') 
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div> 
                      @enderror
                    </div>
                    <div class="mt-2">
                      <label for="" class="form-label fw-bold">Gambar</label>
                      <input type="file" name="gambar" id="" class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
                      @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="mt-5 mb-3 d-flex justify-content-between align-items-center">
                      <a href="{{ route('konten.store') }}" class="btn btn-secondary">Kembali</a>
                      <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection