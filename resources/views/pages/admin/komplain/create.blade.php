@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Komplain</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('komplain.index') }}">Komplain</a></li>
            <li class="breadcrumb-item active">Tambah Komplain</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
  
          <div class="col-xl-12">
  
            <div class="card">
              <div class="card-body pt-3">
                <form action="{{ route('komplain.store') }}" method="POST">
                  @csrf
                  
                  <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <select id="judul" name="judul" class="form-select @error('judul') is-invalid @enderror shadow-none">
                      <option value="" selected disabled> Pilih Judul Anda </option>
                      @foreach ($detail_konten as $item)
                        <option value="{{ $item->id }}" {{ old('detail_konten') == $item->id ? 'selected' : '' }}>{{ $item->judul }}</option>
                      @endforeach
                  </select>
                    @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control @error('catatan') is-invalid @enderror shadow-none">{{ old('catatan') }}</textarea>
                    @error('catatan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('komplain.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                  </div>
                                      
              </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection