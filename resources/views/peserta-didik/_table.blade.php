<table id="productsTable" class="table table-hover table-product" style="width:100%">
    <thead>
      <tr>
        <th>Nama</th>
        @auth('admin')
          <th>Sekolah</th>
        @endauth
        <th>Tanggal Daftar</th>
        <th>Wali</th>
        <th>Email</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($peserta_didiks as $peserta_didik)
        <tr>
            <td>{{$peserta_didik->nama_lengkap}}</td>
            @auth('admin')
              <td>{{$peserta_didik->sekolah->nama_sekolah}}</td>
            @endauth
            <td>{{date('d-m-Y', strtotime($peserta_didik->created_at))}}</td>
            <td>{{$peserta_didik->dataAyah->nama_ayah}}</td>
            <td>{{$peserta_didik->siswa->email}}</td>
            <td class="text-center"> <span class="badge badge-pill {{$peserta_didik->verification_status_badge}}">{{$peserta_didik->verification_status_string}}</span></td>
            <td class="text-center">
              <div class="dropdown">
                <a class="dropdown-toggle icon-burger-mini" style="color:black" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="{{route('admin.siswa.show',$peserta_didik->id)}}">Detail</a>
                 
                 
                </div>
              </div>
            </td>

        </tr>
      @empty

      @endforelse

    </tbody>
  </table>
