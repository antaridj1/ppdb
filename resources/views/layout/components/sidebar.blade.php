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
          <li  class="{{Route::is('admin.home')? 'active' : ''}}">
            <a class="sidenav-item-link" href="{{route('admin.home')}}">
              <i class="mdi mdi-home-outline"></i>
              <span class="nav-text">Beranda</span>
            </a>
          </li>
          <li class="{{Route::is('admin.siswa.*')? 'active' : ''}}">
            <a class="sidenav-item-link" href="{{route('admin.siswa.index')}}">
              <i class="mdi mdi-briefcase-account-outline"></i>
              <span class="nav-text">Calon Peserta Didik</span>
            </a>
          </li>
          <li>
            <a class="sidenav-item-link" href="analytics.html">
              <i class="mdi mdi-account-group-outline"></i>
              <span class="nav-text">Wali Peserta Didik</span>
            </a>
          </li>
          <li class="{{Route::is('admin.sekolah.*')? 'active' : ''}}">
            <a class="sidenav-item-link"  href="{{route('admin.sekolah.index')}}">
              <i class="mdi mdi-school"></i>
              <span class="nav-text">Sekolah</span>
            </a>
          </li>
          <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
              aria-expanded="false" aria-controls="email">
              <i class="mdi mdi-image-filter"></i>
              <span class="nav-text">Landing Page</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="email"
              data-parent="#sidebar-menu">
              <div class="sub-menu">
                    <li >
                      <a class="sidenav-item-link" href="email-inbox.html">
                        <span class="nav-text">Email Inbox</span>
                        
                      </a>
                    </li>
                    <li>
                      <a class="sidenav-item-link" href="email-details.html">
                        <span class="nav-text">Email Details</span>
                        
                      </a>
                    </li>
                    <li>
                      <a class="sidenav-item-link" href="email-compose.html">
                        <span class="nav-text">Email Compose</span>
                        
                      </a>
                    </li>
              </div>
            </ul>
          </li>
      </ul>

    </div>

    <div class="sidebar-footer">
      <div class="sidebar-footer-content">
        <ul class="d-flex">
          <li>
            <a href="{{route('admin.logout')}}" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
          <li>
            <a href="{{route('admin.chat.index')}}" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</aside>
