@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Detail Konten</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('konten.index') }}">Konten</a></li>
            <li class="breadcrumb-item"><a href="{{ route('konten.show',$id) }}">Detail Konten</a></li>
            <li class="breadcrumb-item active">Tambah Detail Konten</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
  
          <div class="col-xl-12">
  
            <div class="card">
              <div class="card-body pt-3">
                <form action="{{ route('detail-konten.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="id_konten" value="{{ $id }}">
                    <div class="row">
                        <div class="col-md-12 mt-1">
                          <label for="topik" class="form-label">Topik</label>
                          <input type="text" id="topik" value="{{ $konten->topik }}" class="form-control" disabled>
                        </div>
                        <div class="col-md-12 mt-3">
                          <label for="judul" class="form-label">Judul</label>
                          <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror shadow-none" id="judul" value="{{ old('judul') }}">
                          @error('judul') 
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div> 
                          @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                          <label id="sub_judul" class="form-label">Sub Judul</label>
                          <input type="text" name="sub_judul" class="form-control @error('sub_judul') is-invalid @enderror shadow-none" id="sub_judul" value="{{ old('sub_judul') }}">
                          @error('sub_judul') 
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div> 
                          @enderror
                        </div>

                        <div class="col-md-6 mt-3">
                            <label id="layout" class="form-label">Layout</label>
                            <div class="row">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="{{ asset('assets/img/foto6.png') }}" class="d-block w-75 mx-auto" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{ asset('assets/img/foto6.png') }}" class="d-block w-75 mx-auto" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{ asset('assets/img/foto6.png') }}" class="d-block w-75 mx-auto" alt="...">
                                      </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1 mt-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="layout" value="Layout 1" id="layout1" 
                                       {{ old('layout') == 'Layout 1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="layout1">
                                    Layout 1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="layout" value="Layout 2" id="layout2" 
                                       {{ old('layout') == 'Layout 2' ? 'checked' : '' }}>
                                <label class="form-check-label" for="layout2">
                                    Layout 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="layout" value="Layout 3" id="layout3" 
                                       {{ old('layout') == 'Layout 3' ? 'checked' : '' }}>
                                <label class="form-check-label" for="layout3">
                                    Layout 3
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="layout" value="Layout 4" id="layout4" 
                                       {{ old('layout') == 'Layout 4' ? 'checked' : '' }}>
                                <label class="form-check-label" for="layout4">
                                    Layout 4
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="layout" value="Layout 5" id="layout5" 
                                       {{ old('layout') == 'Layout 5' ? 'checked' : '' }}>
                                <label class="form-check-label" for="layout5">
                                    Layout 5
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="layout" value="Layout 6" id="layout6" 
                                       {{ old('layout') == 'Layout 6' ? 'checked' : '' }}>
                                <label class="form-check-label" for="layout6">
                                    Layout 6
                                </label>
                            </div>
                            @error('layout') 
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div> 
                            @enderror
                        </div>
                        

                        <div class="mt-5 mb-3 d-flex justify-content-between align-items-center">
                            <a href="{{ route('konten.show',$id) }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection