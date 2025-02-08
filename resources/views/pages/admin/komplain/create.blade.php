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
                <form action="{{ route('data-user.store') }}" method="POST">
                  @csrf
                  
             

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