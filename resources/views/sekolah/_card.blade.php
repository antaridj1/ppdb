
<div class="card card-default card-profile">
    <div class="card-header-bg" style="background-image:url({{ asset('storage/'.$sekolah->gambar) }})"></div>
    <div class="card-body card-profile-body">
        <div class="profile-avata">
            <img class="rounded-circle" src="{{asset('assets/images/gallery/school2.jpg')}}" alt="Avata Image">
            <span class="h5 d-block mt-3 mb-2">{{$sekolah->nama_sekolah}}</span>

            <div class="d-flex justify-content-center mb-3">
                <div class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="h5 text-center d-block">{{$sekolah->total_peserta_didik}}</span>
                        <span class="text-color d-block">Total Pendaftar</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="h5 text-center d-block">{{$sekolah->peserta_belum_tervalidasi}}</span>
                        <span class="text-color d-block">Belum Tervalidasi</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="h5 text-center d-block">{{$sekolah->peserta_tervalidasi}}</span>
                        <span class="text-color d-block">Tervalidasi</span>
                    </a>
                </div>
            </div>
        
            <div class="d-flex justify-content-center">
                <span class="badge {{$sekolah->status_badge}} badge-pill">{{$sekolah->status_string}}</span>
            </div>
        </div>
    
    </div>

    <div class="card-footer card-profile-footer">
        <ul class="nav nav-border-top justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('admin.sekolah.show', $sekolah->id)}}">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.sekolah.edit', $sekolah->id)}}">Edit</a>
            </li>

        </ul>
    </div>
  
</div>

    <div class="card card-default col-12">
        <div class="card-body">
            <h5 class="card-title">Profil</h5>
            <table class="table table-borderless">
                <tr>
                    <td>Nama Sekolah </td>
                    <td>: {{$sekolah->nama_sekolah}}</td>
                </tr>
                <tr>
                    <td>Telp </td>
                    <td>: {{$sekolah->tlp_sekolah}}</td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>: {{$sekolah->alamat_sekolah}}</td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>: {{$sekolah->email}}</td>
                </tr>
            </table>
        </div>
    </div>