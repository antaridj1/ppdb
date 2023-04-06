<table id="productsTable" class="table table-product" style="width:100%">
    <thead>
        <tr class="text-center">
            @if(Route::is('sekolah.siswa.penerimaan'))
                <th>
                    <div class="custom-control custom-checkbox checkbox-success d-inline-block">
                    <input type="checkbox" class="custom-control-input" id="checkAll">
                    <label class="custom-control-label" for="checkAll">All</label>
                    </div>
                </th>
            @endif
            <th>No.</th>
            <th>Nama</th>
            @auth('admin')
                <th>Sekolah</th>
            @endauth
            <th>Tgl Daftar</th>
            <th>Wali</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($peserta_didiks as $peserta_didik)
            <tr>
                @if(Route::is('sekolah.siswa.penerimaan'))
                    <td>
                        <div class="custom-control custom-checkbox checkbox-success d-inline-block mr-3 mb-3">
                            <input type="checkbox" name="checked" class="custom-control-input check" id="{{$peserta_didik->id}}" value="{{$peserta_didik->id}}">
                            <label class="custom-control-label" for="{{$peserta_didik->id}}"></label>
                        </div>
                    </td>
                @endif
                <td class="py-0">{{$loop->iteration}}</td>
                <td>{{$peserta_didik->nama_lengkap}}</td>
                @auth('admin')
                    <td>{{$peserta_didik->sekolah->nama_sekolah}}</td>
                @endauth
                <td>{{date('d-m-Y', strtotime($peserta_didik->created_at))}}</td>
                <td>{{$peserta_didik->dataAyah->nama_ayah}}</td>
                <td class="text-center"> <span class="badge badge-pill {{$peserta_didik->verification_status_badge}}">{{$peserta_didik->verification_status_string}}</span></td>
                <td class="text-center">
                    <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" style="color:black" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        @auth('admin')
                            <a class="dropdown-item" href="{{route('admin.siswa.show',$peserta_didik->id)}}">Detail</a>
                        @endauth
                        @auth('sekolah')
                            <a class="dropdown-item" href="{{route('sekolah.siswa.show',$peserta_didik->id)}}">Detail</a>
                        @endauth
                        
                    </div>
                    </div>
                </td>

            </tr>
        @empty
        <tr>
            <td>Tidak Ada Data</td>
        </tr>
        @endforelse

    </tbody>
  </table>

