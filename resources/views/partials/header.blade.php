<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="{{route('homepage')}}"><span>Infor</span>matika</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="{{route('visimisi')}}">Visi Misi</a></li>
          <li><a href="{{route('sejarah')}}">Sejarah</a></li>
          <li><a href="{{route('strukturorganisasi')}}">Struktur Organisasi</a></li>
        </ul>

        <li class="dropdown"><a href="#"><span>Kurikulum</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('dosen')}}">Dosen</a></li>
            <li><a href="{{route('matakuliah')}}">Matakuliah</a></li>
            <li><a href="{{route('petakurikulum')}}">Peta Kurikulum</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('alumniinformatika')}}">Alumni Informatika</a></li>
            <li><a href="{{route('penerimaanmahasiswabaru')}}">Penerimaan Mahasiswa Baru</a></li>
            <li><a href="{{route('kegiatanmahasiswa')}}">Kegiatan Mahasiswa</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Blog</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('informatikaunbara')}}">Informatika Unbara</a></li>
            <li><a href="{{route('kerjasama')}}">Kerja Sama</a></li>
            <li><a href="{{route('lowonganpekerjaan')}}">Lowongan Pekerjaan</a></li>
          </ul>
        </li>

        <li><a href="{{route('contact')}}">Contact</a></li>

        @guest
          <li><a href="{{route('login')}}">Login</a></li>   
        @else
          <li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @if (Auth::user()->is_admin)
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              @endif
              <li>
                <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-none">Logout</button>
                </form>
              </li>
            </ul>
          </li> 
        @endguest
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>    
  </div>
</header>