
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
            @auth('admin')
                <a class="nav-link active" href="{{route('admin.siswa.show', $peserta_didik->dataPribadi->id)}}">Profile</a>
            @endauth
            @auth('sekolah')
                <a class="nav-link active" href="{{route('sekolah.siswa.show', $peserta_didik->dataPribadi->id)}}">Profile</a>
            @endauth
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
        <h3 class="card-title">Data Periodik</h3>
        <div class="row">
            <div class="col-12 col-lg-8">
                <table class="table table-border">
                    <tr>
                        <th>Tinggi Badan</th>
                        <td>: {{$peserta_didik->dataPribadi->dataPeriodik->tinggi_badan}}</td>
                    </tr>
                    <tr>
                        <th>Berat Badan</th>
                        <td>: {{$peserta_didik->dataPribadi->dataPeriodik->berat_badan}}</td>
                    </tr>
                    <tr>
                        <th>Lingkar Kepala</th>
                        <td>: {{$peserta_didik->dataPribadi->dataPeriodik->lingkar_kepala}}</td>
                    </tr>
                    <tr>
                        <th>Jarak Tempuh dari rumah ke sekolah</th>
                        <td>: {{$peserta_didik->dataPribadi->dataPeriodik->jarak}}</td>
                    </tr>
                    <tr>
                        <th>Waktu Tempuh dari rumah ke sekolah</th>
                        <td>: {{$peserta_didik->dataPribadi->dataPeriodik->waktu_tempuh}}</td>
                    </tr>
                    <tr>
                        <th>Jumlah Saudara</th>
                        <td>: {{$peserta_didik->dataPribadi->dataPeriodik->jumlah_saudara}}</td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
</div>
<div class="card card-default col-12">
    <div class="card-body">
        <h3 class="card-title">Data Ayah</h3>
        <div class="row">
            <div class="col-12 col-lg-8">
                <table class="table table-border">
                    <tr>
                        <th>Nama Ayah</th>
                        <td>: {{$peserta_didik->dataPribadi->dataAyah->nama_ayah}}</td>
                    </tr>
                    <tr>
                        <th>NIK</th>
                        <td>: {{$peserta_didik->dataPribadi->dataAyah->nik_ayah}}</td>
                    </tr>
                    <tr>
                        <th>Tahun Lahir</th>
                        <td>: {{$peserta_didik->dataPribadi->dataAyah->tahun_ayah}}</td>
                    </tr>
                    <tr>
                        <th>Pendidikan Terakhir</th>
                        <td>: {{$peserta_didik->dataPribadi->dataAyah->pendidikan_ayah}}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan</th>
                        <td>: {{$peserta_didik->dataPribadi->dataAyah->pekerjaan_ayah}}</td>
                    </tr>
                    <tr>
                        <th>Penghasilan</th>
                        <td>: {{$peserta_didik->dataPribadi->dataAyah->penghasilan_ayah}}</td>
                    </tr>
                    <tr>
                        <th>Berkebutuhan Khusus</th>
                        <td>: {{$peserta_didik->dataPribadi->dataAyah->berkebutuhan_khusus_ayah}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="card card-default col-12">
    <div class="card-body">
        <h3 class="card-title">Data Ibu</h3>
        <div class="row">
            <div class="col-12 col-lg-8">
                <table class="table table-border">
                    <tr>
                        <th>Nama Ibu</th>
                        <td>: {{$peserta_didik->dataPribadi->dataIbu->nama_ibu}}</td>
                    </tr>
                    <tr>
                        <th>NIK</th>
                        <td>: {{$peserta_didik->dataPribadi->dataIbu->nik_ibu}}</td>
                    </tr>
                    <tr>
                        <th>Tahun Lahir</th>
                        <td>: {{$peserta_didik->dataPribadi->dataIbu->tahun_ibu}}</td>
                    </tr>
                    <tr>
                        <th>Pendidikan Terakhir</th>
                        <td>: {{$peserta_didik->dataPribadi->dataIbu->pendidikan_ibu}}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan</th>
                        <td>: {{$peserta_didik->dataPribadi->dataIbu->pekerjaan_ibu}}</td>
                    </tr>
                    <tr>
                        <th>Penghasilan</th>
                        <td>: {{$peserta_didik->dataPribadi->dataIbu->penghasilan_ibu}}</td>
                    </tr>
                    <tr>
                        <th>Berkebutuhan Khusus</th>
                        <td>: {{$peserta_didik->dataPribadi->dataIbu->berkebutuhan_khusus_ibu}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@if($peserta_didik->dataPribadi->dataWali)
    <div class="card card-default col-12">
        <div class="card-body">
            <h3 class="card-title">Data Wali</h3>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <table class="table table-border">
                        <tr>
                            <th>Nama Wali</th>
                            <td>: {{$peserta_didik->dataPribadi->dataWali->nama_wali}}</td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td>: {{$peserta_didik->dataPribadi->dataWali->nik_wali}}</td>
                        </tr>
                        <tr>
                            <th>Tahun Lahir</th>
                            <td>: {{$peserta_didik->dataPribadi->dataWali->tahun_wali}}</td>
                        </tr>
                        <tr>
                            <th>Pendidikan Terakhir</th>
                            <td>: {{$peserta_didik->dataPribadi->dataWali->pendidikan_wali}}</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan</th>
                            <td>: {{$peserta_didik->dataPribadi->dataWali->pekerjaan_wali}}</td>
                        </tr>
                        <tr>
                            <th>Penghasilan</th>
                            <td>: {{$peserta_didik->dataPribadi->dataWali->penghasilan_wali}}</td>
                        </tr>
                        <tr>
                            <th>Berkebutuhan Khusus</th>
                            <td>: {{$peserta_didik->dataPribadi->dataWali->berkebutuhan_khusus_wali}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif
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
@if($peserta_didik->dataPribadi->beasiswa)
    <div class="card card-default col-12">
        <div class="card-body">
            @foreach ($$peserta_didik->dataPribadi->beasiswa as $data_beasiswa)
                <h3 class="card-title">Beasiswa {{$loop->iteration}}</h3>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <table class="table table-border">
                            <tr>
                                <th>Jenis Beasiswa</th>
                                <td>: {{$data_beasiswa->jenis_anak_berprestasi}}</td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td>: {{$data_beasiswa->keterangan}}</td>
                            </tr>
                            <tr>
                                <th>Tahun Mulai</th>
                                <td>: {{$data_beasiswa->tahun_mulai}}</td>
                            </tr>
                            <tr>
                                <th>Tahun Selesai</th>
                                <td>: {{$data_beasiswa->tahun_selesai}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
@if($peserta_didik->dataPribadi->prestasi)
    <div class="card card-default col-12">
        <div class="card-body">
            @foreach ($$peserta_didik->dataPribadi->prestasi as $data_prestasi)
                <h3 class="card-title">Prestasi {{$loop->iteration}}</h3>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <table class="table table-border">
                            <tr>
                                <th>Nama prestasi</th>
                                <td>: {{$data_prestasi->nama_prestasi}}</td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>: {{$data_prestasi->tahun}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Prestasi</th>
                                <td>: {{$data_prestasi->jenis_prestasi}}</td>
                            </tr>
                            <tr>
                                <th>Tingkat</th>
                                <td>: {{$data_prestasi->tingkat}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
@if($peserta_didik->dataPribadi->kesejahteraan)
    <div class="card card-default col-12">
        <div class="card-body">
            <h3 class="card-title">Kesejahteraan</h3>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <table class="table table-border">
                        <tr>
                            <th>Jenis Kesejahteraan</th>
                            <td>: {{$peserta_didik->dataPribadi->kesejahteraan->jenis_kesejahteraan}}</td>
                        </tr>
                        <tr>
                            <th>No Kartu</th>
                            <td>: {{$peserta_didik->dataPribadi->kesejahteraan->no_kartu}}</td>
                        </tr>
                        <tr>
                            <th>Nama di Kartu</th>
                            <td>: {{$peserta_didik->dataPribadi->kesejahteraan->nama_sejahtera}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif
