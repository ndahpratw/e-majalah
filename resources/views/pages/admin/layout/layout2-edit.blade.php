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
                <form action="{{ route('layout2.update', $layout->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <input type="hidden" name="id_konten" value="{{ $data->id_konten }}">
                  <input type="hidden" name="id" value="{{ $data->id }}">
                  <div class="mt-4">
                    <label for="" class="form-label fw-bold">Paragraf 1</label>
                    <input id="isi_konten_1" type="hidden" name="isi_konten_1" value="{{ old('isi_konten_1',$layout->isi_konten_1) }}">
                    <trix-editor input="isi_konten_1"></trix-editor>
                    @error('isi_konten_1')
                    <p class="text-danger fs-6">
                      {{ $message }}
                    </p>
                    @enderror
                  </div>
                  <div class="mt-4">
                    <label for="" class="form-label fw-bold">Gambar 1</label>
                    <input type="file" name="gambar_1" id="" class="form-control @error('gambar_1') is-invalid @enderror" accept="image/*">
                    @error('gambar_1')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="mt-4">
                    <label for="" class="form-label fw-bold">Paragraf 2</label>
                    <input id="isi_konten_2" type="hidden" name="isi_konten_2" value="{{ old('isi_konten_2',$layout->isi_konten_2) }}">
                    <trix-editor input="isi_konten_2"></trix-editor>
                    @error('isi_konten_2')
                    <p class="text-danger fs-6">
                      {{ $message }}
                    </p>
                    @enderror
                  </div>
                  <div class="mt-4">
                    <label for="" class="form-label fw-bold">Gambar 2</label>
                    <input type="file" name="gambar_2" id="" class="form-control @error('gambar_2') is-invalid @enderror" accept="image/*">
                    @error('gambar_2')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="mt-4">
                    <label for="" class="form-label fw-bold">Paragraf 3</label>
                    <input id="isi_konten_3" type="hidden" name="isi_konten_3" value="{{ old('isi_konten_3',$layout->isi_konten_3) }}">
                    <trix-editor input="isi_konten_3"></trix-editor>
                    @error('isi_konten_3')
                    <p class="text-danger fs-6">
                      {{ $message }}
                    </p>
                    @enderror
                  </div>
                  <div class="mt-4">
                    <label for="" class="form-label fw-bold">Gambar 3</label>
                    <input type="file" name="gambar_3" id="" class="form-control @error('gambar_3') is-invalid @enderror" accept="image/*">
                    @error('gambar_3')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="mt-4">
                    <label for="" class="form-label fw-bold">Paragraf 4</label>
                    <input id="isi_konten_4" type="hidden" name="isi_konten_4" value="{{ old('isi_konten_4',$layout->isi_konten_4) }}">
                    <trix-editor input="isi_konten_4"></trix-editor>
                    @error('isi_konten_4')
                    <p class="text-danger fs-6">
                      {{ $message }}
                    </p>
                  @enderror
                  </div>

                  <div class="my-5 d-flex justify-content-between align-items-center">
                    <a href="{{ route('konten.show', $data->id_konten) }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary"> Kirim </button>
                  </div>
                </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection