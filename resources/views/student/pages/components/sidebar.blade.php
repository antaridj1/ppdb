<aside class="left-sidebar sidebar-light" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('dashboard.siswa') }}">
            <span class="brand-name">PPDB SDN 01 Gianyar</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li
                class="active"
                >
                <a class="sidenav-item-link" href="{{ route('dashboard.siswa') }}">
                    <i class="mdi mdi-apple-safari"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                </li>
                <li
                >
                <a class="sidenav-item-link" href="{{ route('data.siswa') }}">
                    <i class="mdi mdi-file"></i>
                    <span class="nav-text">Data Peserta Didik</span>
                </a>
                </li>
                <li
                >
                <a class="sidenav-item-link" href="{{ route('profile.siswa') }}">
                    <i class="mdi mdi-account"></i>
                    <span class="nav-text">Profile Setting</span>
                </a>
                </li>
                {{-- <li
                >
                <a class="sidenav-item-link" href="getting-started.html">
                    <i class="mdi mdi-airplane"></i>
                    <span class="nav-text">Pesan</span>
                </a>
                </li> --}}
            </ul>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-footer-content">
                <ul class="d-flex">
                    <li>
                        <form action="{{ route('logout.siswa') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link btn-block" data-toggle="tooltip" title="Logout" style="color:white">
                                <i class="mdi mdi-power" style="font-size: 30px;"></i>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="http://127.0.0.1:8000/ppdb/sdn/1/pesan">
                            <button type="submit" class="btn btn-link btn-block" data-toggle="tooltip" title="Logout" style="color:white; padding-top:12px;">
                                <i class="mdi mdi-message-outline" style="font-size: 28px;"></i>
                            </button>
                        </form>
                        {{-- <a href="http://127.0.0.1:8000/ppdb/sdn-01-gianyar/pesan" data-toggle="tooltip" title="Chat">
                            <i class="mdi mdi-message-outline"></i>
                        </a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
