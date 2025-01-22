<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo.jpg') }}" rel="icon">
  <link href="{{ asset('assets/img/logo.jpg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{  asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <a class="position-fixed top-0 end-0 text-black" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
    <i class="bi bi-list fs-1"></i>
  </a>  
    
  <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="staticBackdropLabel">Daftar Isi</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="sidebar-nav" id="sidebar-nav">

        @php
          use Illuminate\Support\Facades\DB;
          $konten = DB::table('kontens')->get();
          $detail_konten = DB::table('detail_kontens')->get();
        @endphp  

        @foreach ($konten as $item)            
        <!-- Penilaian Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#info-data{{ $item->id }}" data-bs-toggle="collapse" href="#">
            <i class="bi bi-file-text-fill"></i>
            <span> {{ $item->topik }}</span>
            <i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="info-data{{ $item->id }}" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <!-- Kelas Nav -->
            @foreach ($detail_konten->where('id_konten',$item->id) as $item)
            <li class="nav-item">
                <a href="{{ route('layout.show',$item->id) }}" class="nav-link collapsed">
                    <i class="bi bi-circle"></i>
                    <span>{{ \Illuminate\Support\Str::limit($item->judul, 30, '...') }} </span>
                </a>
            </li>
            @endforeach          
          </ul>
        </li><!-- End Penilaian Nav -->
        @endforeach

        </ul>
    </div>
  </div>

    
  <main id="mainContent" class="main mx-3 my-4 px-3" style="text-align:justify;">    
    @yield('content')
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>


  <script>
    function openSidebar() {
        // Buka sidebar
        document.getElementById("mySidebar").style.width = "250px";

        // Geser konten utama
        document.getElementById("mainContent").classList.add("shifted");
    }

    function closeSidebar() {
        // Tutup sidebar
        document.getElementById("mySidebar").style.width = "0";

        // Kembalikan konten utama
        document.getElementById("mainContent").classList.remove("shifted");
    }
  </script>

  @yield('scripts')
</body>

</html>