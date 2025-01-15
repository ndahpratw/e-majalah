@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Konten Daftar Isi</h1>
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
              <div class="card-body pt-3">
                form tambah data
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection