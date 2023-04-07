<aside class="left-sidebar sidebar-light" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('siswa.dashboard') }}">
            <span class="brand-name">{{ $siswa->sekolah->nama_sekolah }}</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li
                class="{{ request()->routeIs('siswa.dashboard') ? 'active' : '' }}"
                >
                <a class="sidenav-item-link" href="{{ route('siswa.dashboard') }}">
                    <i class="mdi mdi-apple-safari"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                </li>
                <li
                class="{{ request()->routeIs('siswa.data') ? 'active' : '' }}"
                >
                <a class="sidenav-item-link" href="{{ route('siswa.data') }}">
                    <i class="mdi mdi-file"></i>
                    <span class="nav-text">Data Peserta Didik</span>
                </a>
                </li>
                <li
                class="{{ request()->routeIs('siswa.datatable') ? 'active' : '' }}"
                >
                <a class="sidenav-item-link" href="{{ route('siswa.datatable') }}">
                    <i class="mdi mdi-account-multiple-check"></i>
                    <span class="nav-text">Daftar Siswa Diterima</span>
                </a>
                </li>
                <li
                class="{{ request()->routeIs('siswa.profile') ? 'active' : '' }}"
                >
                <a class="sidenav-item-link" href="{{ route('siswa.profile') }}">
                    <i class="mdi mdi-account"></i>
                    <span class="nav-text">Profile Setting</span>
                </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-footer-content">
                <ul class="d-flex">
                    <li>
                        <form action="{{ route('siswa.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link btn-block" data-toggle="tooltip" title="Logout" style="color:white">
                                <i class="mdi mdi-power" style="font-size: 30px;"></i>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="{{ route('siswa.indexUser') }}">
                            <button type="submit" class="btn btn-link btn-block" data-toggle="tooltip" title="Chat Admin" style="color:white; padding-top:12px;">
                                <i class="mdi mdi-message-outline" style="font-size: 28px;"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
