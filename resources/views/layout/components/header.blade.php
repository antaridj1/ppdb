<header class="main-header" id="header">
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <!-- Sidebar toggle button -->
    <button id="sidebar-toggler" class="sidebar-toggle">
      <span class="sr-only">Toggle navigation</span>
    </button>

    <div class="navbar-right ">
      <ul class="nav navbar-nav">
        <!-- User Account -->
        <li class="dropdown user-menu">
          <button class="dropdown-toggle nav-link" data-toggle="dropdown">
            @auth('admin')
              <span class="d-none d-lg-inline-block">{{auth()->guard('admin')->user()->name}}</span>
            @endauth
            @auth('sekolah')
              <span class="d-none d-lg-inline-block">Operator</span>
            @endauth
          </button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li>
              <a class="dropdown-link-item" href="user-profile.html">
                <i class="mdi mdi-account-outline"></i>
                <span class="nav-text">Profil</span>
              </a>
            </li>
            <li>
              <a class="dropdown-link-item" href="user-account-settings.html">
                <i class="mdi mdi-settings"></i>
                <span class="nav-text">Edit Akun</span>
              </a>
            </li>

            <li class="dropdown-footer">
              @auth('admin')
                <a class="dropdown-link-item" href="{{route('admin.logout')}}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">

                  <i class="mdi mdi-logout"></i> 
                  <span class="nav-text">Log Out</span>
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              @endauth
              @auth('sekolah')
              <a class="dropdown-link-item" href="{{route('sekolah.logout')}}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">

                <i class="mdi mdi-logout"></i> 
                <span class="nav-text">Log Out</span>
              </a>
              <form id="logout-form" action="{{ route('sekolah.logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            @endauth
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>


</header>
