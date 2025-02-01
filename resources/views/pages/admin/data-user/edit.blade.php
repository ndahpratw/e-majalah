@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Pengguna</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('data-user.index') }}">Pengguna</a></li>
            <li class="breadcrumb-item active">Edit Pengguna</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
  
          <div class="col-xl-12">
  
            <div class="card">
              <div class="card-body pt-3">
                <form action="{{ route('data-user.update', $data->id) }}" method="POST">
                  @csrf
                  @method('PUT')

                  <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $data->name) }}">
                      @error('nama')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $data->email) }}">
                      @error('email')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label for="telepon" class="form-label">Telepon</label>
                      <input type="number" id="telepon" name="telepon" class="form-control" value="{{ old('telepon', $data->no_telepon) }}" placeholder="ex: 628xxxxxxxxxx">
                      @error('telepon')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <textarea id="alamat" name="alamat" class="form-control">{{ old('alamat', $data->address) }}</textarea>
                      @error('alamat')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label for="role" class="form-label">Role</label>
                      <select id="role" name="role" class="form-select">
                          <option value="" selected disabled>Pilih Role</option>
                          <option value="Admin" {{ old('role', $data->role) == 'Admin' ? 'selected' : '' }}>Admin</option>
                          <option value="Mitra" {{ old('role', $data->role) == 'Mitra' ? 'selected' : '' }}>Customer</option>
                      </select>
                      @error('role')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label for="instansi" class="form-label">instansi</label>
                      <input type="text" name="instansi" id="instansi" class="form-control" placeholder="Lewati jika tidak ada" value="{{ $data->instansi }}">
                  </div>

                  <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Lewati jika tidak ada perubahan password">
                      @error('password')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('data-user.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                  </div>
              </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection