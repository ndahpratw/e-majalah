@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Data Detail Konten</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('konten.index') }}">Konten</a></li>
            <li class="breadcrumb-item"><a href="{{ route('konten.show', $detail_konten->id_konten) }}">Detail Konten</a></li>
            <li class="breadcrumb-item active">Tambah Data</li>
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
                <div class="table-responsive">
                    <table class="w-100">
                        <tr>
                            <td><b>Konten</b></td>
                            <td> : </td>
                            <td>{{ $detail_konten->konten->topik }}</td>
                        </tr>
                        <tr>
                            <td><b>Judul</b></td>
                            <td> : </td>
                            <td>{{ $detail_konten->judul }}</td>
                        </tr>
                        <tr>
                            <td><b>Sub Judul</b></td>
                            <td> : </td>
                            <td>{{ $detail_konten->sub_judul }}</td>
                        </tr>
                        <tr>
                            <td><b>Layout</b></td>
                            <td> : </td>
                            <td>
                              @if ($detail_konten->jenis_layout == null)
                                  2
                              @else
                                {{ $detail_konten->jenis_layout }}
                              @endif
                            </td>
                        </tr>
                    </table>
                </div>
              </div>
            </div>
  
          </div>

          <div class="col-xl-12">
  
            <div class="card">
              <div class="card-body pt-3">
                <h5 class="text-center mt-2 text-primary"> Informasi Detail Konten </h5>
                <form action="{{ route('layout2.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id_konten" value="{{ $detail_konten->id_konten }}">
                  <input type="hidden" name="id" value="{{ $detail_konten->id }}">
                  <div class="mt-4">
                    <label for="" class="form-label fw-bold">Paragraf 1</label>
                    <input id="isi_konten_1" type="hidden" name="isi_konten_1" value="{{ old('isi_konten_1') }}">
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
                    <input id="isi_konten_2" type="hidden" name="isi_konten_2" value="{{ old('isi_konten_2') }}">
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
                    <input id="isi_konten_3" type="hidden" name="isi_konten_3" value="{{ old('isi_konten_3') }}">
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
                    <input id="isi_konten_4" type="hidden" name="isi_konten_4" value="{{ old('isi_konten_4') }}">
                    <trix-editor input="isi_konten_4"></trix-editor>
                    @error('isi_konten_4')
                    <p class="text-danger fs-6">
                      {{ $message }}
                    </p>
                  @enderror
                  </div>

                  <div class="my-5 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary"> Kirim </button>
                  </div>
                </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection