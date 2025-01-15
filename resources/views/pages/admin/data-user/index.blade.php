@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Pengguna</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Pengguna</li>
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
  
                <div class="d-flex align-items-center justify-content-end m-3">
                    <a href="{{ route('data-user.create') }}" class="btn btn-primary"> <i class="bi bi-plus-square"></i> Tambah </a>
                </div>
  
                <div class="table-responsive">
                  <table class="table datatable" id="user">
                    <thead>
                      <tr class="text-center">
                        <th> No.  </th>
                        <th> Nama </th>
                        <th> Email </th>
                        <th> Alamat </th>
                        <th> No Telepon </th>
                        <th> Role </th>
                        <th> Instansi </th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data_user as $item)
                          <tr>
                            <td> {{ $no++ }} </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->address }} </td>
                            <td> {{ $item->no_telepon }} </td>
                            <td> 
                              @if($item->role == 'Admin')
                                  <span class="badge rounded-pill bg-info">{{ $item->role }}</span>
                              @elseif($item->role == 'Mitra')
                                  <span class="badge rounded-pill bg-warning">{{ $item->role }}</span>
                              @endif
                            </td>   
                            <td> {{ $item->instansi }} </td>   
                            <td>
                                {{-- edit data --}}
                                <a href="{{ route('data-user.edit' , $item->id) }}" class="btn btn-primary shadow-none"><i class="ri-pencil-fill"></i></a>

                                {{-- hapus data --}}
                                <button type="button" class="btn btn-danger shadow-none" data-bs-toggle="modal" data-bs-target="#hapus-data{{ $item->id }}"><i class="bi bi-trash"></i></button>
                                <div class="modal fade" id="hapus-data{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title"> Hapus Data </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <p style="color: black">Apakah anda yakin untuk menghapus data?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm shadow-none" data-bs-dismiss="modal">Tidak</button>
                                                <form action="{{ route('data-user.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                    @method('delete')
                                                    @csrf
                                                    <input type="submit" value="Hapus" class="btn btn-danger btn-sm shadow-none">
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>                 
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection