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
                            <td>1</td>
                        </tr>
                    </table>
                </div>
              </div>
            </div>
  
          </div>

          <div class="col-xl-12">
  
            <div class="card">
              <div class="card-body pt-3">
                form tambah layout 1
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection