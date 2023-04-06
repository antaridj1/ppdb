<aside class="left-sidebar sidebar-light" id="left-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
      <a href="{{route('admin.home')}}">
        <img src="images/logo.png" alt="Mono">
        <span class="brand-name">MONO</span>
      </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-left" data-simplebar style="height: 100%;">
      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
          <li  class="{{Route::is('admin.home') || Route::is('sekolah.home')? 'active' : ''}}">
            @auth('admin')
              <a class="sidenav-item-link" href="{{route('admin.home')}}">
            @endauth
            @auth('sekolah')
              <a class="sidenav-item-link" href="{{route('sekolah.home')}}">
            @endauth
              <i class="mdi mdi-home-outline"></i>
              <span class="nav-text">Beranda</span>
            </a>
          </li>
          <li class="{{Route::is('admin.siswa.*') || Route::is('sekolah.siswa.index')? 'active' : ''}}">
            @auth('admin')
              <a class="sidenav-item-link" href="{{route('admin.siswa.index')}}">
            @endauth
            @auth('sekolah')
              <a class="sidenav-item-link" href="{{route('sekolah.siswa.index')}}">
            @endauth
              <i class="mdi mdi-briefcase-account-outline"></i>
              <span class="nav-text">Calon Peserta Didik</span>
            </a>
          </li>
          @auth('sekolah')
          <li class="{{Route::is('sekolah.siswa.penerimaan')? 'active' : ''}}">
            <a class="sidenav-item-link"  href="{{route('sekolah.siswa.penerimaan')}}">
              <i class="mdi mdi-school"></i>
              <span class="nav-text">Penerimaan Peserta</span>
            </a>
          </li>
          @endauth
          @auth('admin')
          <li class="{{Route::is('admin.sekolah.*')? 'active' : ''}}">
            <a class="sidenav-item-link"  href="{{route('admin.sekolah.index')}}">
              <i class="mdi mdi-school"></i>
              <span class="nav-text">Sekolah</span>
            </a>
          </li>
          @endauth
      </ul>

    </div>

    @auth('admin')
      <div class="sidebar-footer">
        <div class="sidebar-footer-content">
          <ul class="d-flex">
            <li>
              <a href="{{route('admin.logout')}}" data-toggle="tooltip" title="Logout"><i class="mdi mdi-logout"></i></a></li>
            <li>
              <a href="{{route('admin.chat.index')}}" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
            </li>
          </ul>
        </div>
      </div>
    @endauth
  </div>
</aside>
