
<div class="card card-default card-profile">
    <div class="card-header-bg" style="background-image:url({{ asset('storage/'.$peserta_didik->sekolah->gambar) }})"></div>
        <div class="card-body card-profile-body">
            <div class="profile-avata">
                <img class="rounded-circle" src="{{asset('assets/images/graduation-hat1.png')}}" width="80px" alt="Avata Image">
                <span class="h5 d-block mt-3 mb-2">{{$peserta_didik->dataPribadi->nama_lengkap}}</span>
                <span class="text-color d-block">{{$peserta_didik->email}}</span>
                <div class="d-flex justify-content-center mt-3">
                    @if($peserta_didik->dataPribadi->isVerificated === null)
                        <button data-toggle="modal" data-target="#verifikasiModal_{{$peserta_didik->dataPribadi->id}}" class="btn btn-primary btn-pill">Verifikasi</button>
                    @else
                        <span class="badge {{$peserta_didik->dataPribadi->verification_status_badge}} badge-pill">{{$peserta_didik->dataPribadi->verification_status_string}}</span>
                    @endif
                    @include('peserta-didik._modal')
                </div>
            </div>
        
        </div>

  <div class="card-footer card-profile-footer">
      <ul class="nav nav-border-top justify-content-center">
          <li class="nav-item">
              <a class="nav-link active" href="{{route('admin.siswa.show', $peserta_didik->dataPribadi->id)}}">Profile</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('admin.siswa.edit', $peserta_didik->dataPribadi->id)}}">Edit</a>
          </li>

      </ul>
  </div>

</div>

<div class="card card-default col-12">
    <div class="card-body">
        <h3 class="card-title">Data Pribadi</h3>
        <div class="row">
            <div class="col-12 col-lg-6">
                 <table class="table table-border">
                    <tr>
                        <th>Nama </th>
                        <td>: {{$peserta_didik->dataPribadi->nama_lengkap}}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>: {{$peserta_didik->dataPribadi->gender}}</td>
                    </tr>
                    <tr>
                        <th>NISN</th>
                        <td>: {{$peserta_didik->dataPribadi->nisn}}</td>
                    </tr>
                    <tr>
                        <th>No Akta Kelahiran</th>
                        <td>: {{$peserta_didik->dataPribadi->akta_kelahiran}}</td>
                    </tr>
                    <tr>
                        <th>No KK</th>
                        <td>: {{$peserta_didik->dataPribadi->kk}}</td>
                    </tr>
                    <tr>
                        <th>Agama</th>
                        <td>: {{$peserta_didik->dataPribadi->agama}}</td>
                    </tr>
                    <tr>
                        <th>Kewarganegaraan</th>
                        <td>: {{$peserta_didik->dataPribadi->kewarganegaraan}}</td>
                    </tr>
                    <tr>
                        <th>Negara</th>
                        <td>: {{$peserta_didik->dataPribadi->negara}}</td>
                    </tr>
                    <tr>
                        <th>Berkebutuhan Khusus</th>
                        <td>: {{$peserta_didik->dataPribadi->berkebutuhan_khusus}}</td>
                    </tr>
                    <tr>
                        <th>Tempat, Tgl Lahir</th>
                        <td>: {{$peserta_didik->dataPribadi->tempat_lahir}}, {{Carbon\Carbon::parse($peserta_didik->dataPribadi->tgl_lahir)->format('d M Y')}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-lg-6">
                <table class="table table-border">
                    <tr>
                        <th>Alamat</th>
                        <td>: {{$peserta_didik->dataPribadi->alamat}}</td>
                    </tr>
                    <tr>
                        <th>RT/RW</th>
                        <td>: {{$peserta_didik->dataPribadi->rt}}/{{$peserta_didik->dataPribadi->rw}}</td>
                    </tr>
                    <tr>
                        <th>Dusun</th>
                        <td>: {{$peserta_didik->dataPribadi->dusun}}</td>
                    </tr>
                    <tr>
                        <th>Kelurahan</th>
                        <td>: {{$peserta_didik->dataPribadi->kelurahan}}</td>
                    </tr>
                    <tr>
                        <th>Kecamatan</th>
                        <td>: {{$peserta_didik->dataPribadi->kecamatan}}</td>
                    </tr>
                    <tr>
                        <th>Kode Pos</th>
                        <td>: {{$peserta_didik->dataPribadi->kode_pos}}</td>
                    </tr>
                    <tr>
                        <th>Tempat Tinggal</th>
                        <td>: {{$peserta_didik->dataPribadi->tempat_tinggal}}</td>
                    </tr>
                    <tr>
                        <th>Transportasi</th>
                        <td>: {{$peserta_didik->dataPribadi->moda_tranportasi}}</td>
                    </tr>
                    <tr>
                        <th>Anak Ke-</th>
                        <td>: {{$peserta_didik->dataPribadi->anak_ke}}</td>
                    </tr>
                    <tr>
                        <th>KIP</th>
                        <td>: {{$peserta_didik->dataPribadi->kip}}</td>
                    </tr>
                    <tr>
                        <th>PIP</th>
                        <td>: {{$peserta_didik->dataPribadi->pip}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
  
  <div class="card card-default col-12">
      <div class="card-body">
          <h3 class="card-title">Dokumen</h3>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <table class="table table-borderless text-start">
                        <tr>
                            <th>Scan Kartu Keluarga</th>
                            <td>: <a href="{{asset('storage/'.$peserta_didik->dataPribadi->file->file_kk)}}" target="_blank"  class="btn btn-sm btn-outline-primary"><i class="mdi mdi-download"></i> Lihat Dokumen</a></td>
                        </tr>
                        <tr>
                            <th>Scan Akta Kelahiran</th>
                            <td>: <a href="{{asset('storage/'.$peserta_didik->dataPribadi->file->file_akta_kelahiran)}}" target="_blank"  class="btn btn-sm btn-outline-primary"><i class="mdi mdi-download"></i> Lihat Dokumen</a></td>
                        </tr>
                        <tr>
                            <th>Scan KTP Orang Tua</th>
                            <td>: <a href="{{asset('storage/'.$peserta_didik->dataPribadi->file->file_akta_kelahiran)}}" target="_blank"  class="btn btn-sm btn-outline-primary"><i class="mdi mdi-download"></i> Lihat Dokumen</a></td>
                        </tr>
                        @if($peserta_didik->dataPribadi->file->file_ijazah_tk !== null)
                            <tr>
                                <th>Scan Ijasah TK</th>
                                <td>: <a href="{{asset('storage/'.$peserta_didik->dataPribadi->file->file_ijazah_tk)}}" target="_blank"  class="btn btn-sm btn-outline-primary"><i class="mdi mdi-download"></i> Lihat Dokumen</a></td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
         
      </div>
  </div>
