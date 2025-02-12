@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
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
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <!-- Card -->
                    <div class="col-lg-8">

                        <div class="card">
                            <div class="card-body row justify-content-center text-center m-2">
                                <img src="{{ asset('assets/img/logo.jpg') }}" alt="" class="img-fluid w-50 mt-3">
                                <h2> SELAMAT DATANG </h2>
                                <h4 class="text-primary">{{ auth()->user()->name }}</h4>

                            </div>
                        </div>

                    </div><!-- End Card -->
                </div>
            </div>
        </div>
        @if (auth()->user()->role == 'Admin')
          <div class="row">

            <!-- Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Admin</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6> {{ $admin }} </h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Card -->

            <!-- Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Mitra</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-badge-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6> {{ $mitra }} </h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Card -->

          </div>

          <div class="row">
              <!-- Card -->
              <div class="col-xxl-4 col-md-6">

                <div class="card info-card revenue-card">

                  <div class="card-body">
                    <h5 class="card-title">Konten</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-book"></i>
                      </div>
                      <div class="ps-3">
                        <h6> {{ $konten }} </h6>
                      </div>
                    </div>

                  </div>
                </div>

              </div><!-- End Card -->

              <!-- Card -->
              <div class="col-xxl-4 col-md-6">

                <div class="card info-card sending-card">

                  <div class="card-body">
                    <h5 class="card-title">Pengajuan</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-clipboard2-plus-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6></h6>
                      </div>
                    </div>

                  </div>
                </div>

              </div><!-- End Card -->

              <!-- Card -->
              <div class="col-xxl-4 col-md-6">

                <div class="card info-card feedback-card">

                  <div class="card-body">
                    <h5 class="card-title">Komplain</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-chat-left-text-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6> </h6>
                      </div>
                    </div>

                  </div>
                </div>

              </div><!-- End Card -->
          </div>
        @endif
    </section>
@endsection
