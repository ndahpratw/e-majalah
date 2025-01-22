<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard Nav -->
    <li class="nav-item">
      <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}">
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- Nav -->
    <li class="nav-item">
      <a href="{{ url('/data-user') }}" class="nav-link {{ Request::is('data-user*') ? '' : 'collapsed' }}">
        <i class="bi bi-people-fill"></i>
        <span>Pengguna</span>
      </a>
    </li><!-- End Nav -->

    <!-- Nav -->
    <li class="nav-item">
      <a href="{{ url('/konten') }}" class="nav-link {{ Request::is('konten*') | Request::is('layout1*') | Request::is('layout2*') | Request::is('layout3*') | Request::is('layout4*') | Request::is('layout5*') | Request::is('layout6*') | Request::is('detail-konten*') ?  '' : 'collapsed' }}">
        <i class="bi bi-folder-fill"></i>
        <span>Konten</span>
      </a>
    </li><!-- End Nav -->

    <!-- Nav -->
    <li class="nav-item">
      <a href=" " class="nav-link collapsed">
        <i class="bi bi-person-hearts"></i>
        <span>Pengajuan</span>
      </a>
    </li><!-- End Nav -->

    <!-- Nav -->
    <li class="nav-item">
      <a href=" " class="nav-link collapsed">
        <i class="bi bi-display-fill"></i>
        <span>Berita</span>
      </a>
    </li><!-- End Nav -->

    <!-- Logout Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Logout Nav -->

  </ul>

</aside><!-- End Sidebar -->
