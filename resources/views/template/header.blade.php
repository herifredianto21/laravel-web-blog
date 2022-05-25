<!-- ======= Header ======= -->
<header id="header" class="fixed-top" style="background-color: #B80257; color: white;">
    <div class="container d-flex align-items-center">

      <h6 class="logo me-auto"><a href="{{url('/')}}" style="font-size: 65%">Ginjalsembuh</a></h6>
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
          {{-- <li class="dropdown"><a href="#" class="nav-link {{ request()->is('profile') ? 'active' : '' }}"><span> Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="{{ url('profile') }}">Sejarah</a></li>
              <li><a href="#">Visi & Misi</a></li>
            </ul>
          </li> --}}
          <!-- <li><a href="courses.html">Layanan</a></li> -->
          {{-- <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Instalasi Gawat Darurat</a></li>
              <li><a href="#">Poli Umum</a></li>
              <li><a href="#">Penanganan Diabetes</a></li>
              <li><a href="#">Layanan Keperawatan</a></li>
              <li><a href="#">Medical Check Up</a></li>
            </ul>
          </li> --}}
          <!-- <li><a href="trainers.html">Testimoni</a></li> -->
          <li><a class="nav-link {{ request()->is('testimoni') ? 'active' : '' }}" href="{{ url('testimoni') }}">Testimonia</a></li>
          <li><a class="nav-link {{ request()->is('artikel') ? 'active' : '' }}" href="{{ url('artikel') }}">Artikel Kesehatan</a></li>
          <li><a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="{{ url('kontak') }}">Kontak</a></li>
          <li><a class="nav-link {{ request()->is('/grafik') ? 'active' : '' }}" href="{{ url('grafik') }}">Grafik</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ url('whatsapp-link') }}" class="get-started-btn">Konsultasi</a>
      {{-- <button onclick="myFunction()" class="get-started-btn" style="background-color: black; color:white;">Mode Night --}}

    </div>
</header><!-- End Header -->