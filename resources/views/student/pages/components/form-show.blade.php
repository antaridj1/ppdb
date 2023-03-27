<form method="POST" enctype="multipart/form-data" action={{ route('siswa.store') }}>
    <fieldset disabled>
    {{-- Data Pribadi Siswa --}}
    <div class="card card-default">
        <div class="card-header">
            <h1>Data Pribadi</h1>
        </div>
        <div class="card-body">
            {{-- nama lengkap ppdb --}}
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control rounded-0" id="nama_lengkap" value="{{ $pesertaDidik->dataPribadi->nama }}">
            </div>
            {{-- gender --}}
            <div class="form-group">
                <label>Jenis Kelamin</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="laki-laki" name="gender" class="custom-control-input" checked value="laki-laki">
                    <label class="custom-control-label" for="laki-laki">{{ $pesertaDidik->dataPribadi->gender }}</label>
                </div>
            </div>
            {{-- nisn --}}
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" name="nisn" class="form-control rounded-0" id="nisn" maxlength="10" value="{{ $pesertaDidik->dataPribadi->nisn }}">
            </div>
            {{-- nik --}}
            <div class="form-group">
                <label for="nik">NIK/No. KITAS (Untuk WNA)</label>
                <input type="text" name="nik" class="form-control rounded-0" id="nik" maxlength="16" value="{{ $pesertaDidik->dataPribadi->nik }}">
            </div>
            {{-- kk --}}
            <div class="form-group">
                <label for="kk">No. KK</label>
                <input type="text" name="kk" class="form-control rounded-0" id="kk" value="{{ $pesertaDidik->dataPribadi->kk }}">
            </div>
            {{-- tempat lahir --}}
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control rounded-0" id="tempat_lahir" value="{{ $pesertaDidik->dataPribadi->tempat_lahir }}">
            </div>
            {{-- tgl. lahir --}}
            <div class="form-group">
                <label for="tgl_lahir">Tgl. Lahir</label>
                <input type="text" name="tgl_lahir" class="form-control rounded-0" id="tgl_lahir" value="{{ $pesertaDidik->dataPribadi->tgl_lahir }}">
            </div>
            {{-- akta kelahiran --}}
            <div class="form-group">
                <label for="akta_kelahiran">No. Registrasi Akta Kelahiran</label>
                <input type="string" name="akta_kelahiran" class="form-control rounded-0" id="akta_kelahiran" value="{{ $pesertaDidik->dataPribadi->akta_kelahiran }}">
            </div>
            {{-- agama --}}
            <div class="form-group">
                <label>Agama dan Kepercayaan</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="islam" name="agama" class="custom-control-input" value="Islam" checked>
                    <label class="custom-control-label" for="islam">{{ $pesertaDidik->dataPribadi->agama }}</label>
                </div>
            </div>
            {{-- kewarganegaraan --}}
            <div class="form-group">
                <label>Kewarganegaraan</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wni" name="kewarganegaraan" class="custom-control-input" value="WNI" checked>
                    <label class="custom-control-label" for="wni">{{ $pesertaDidik->dataPribadi->kewarganegaraan }}</label>
                </div>
                <input type="text" class="form-control rounded-0" name="negara" id="exampleFormControlInput4" value="{{ $pesertaDidik->dataPribadi->negara }}">
            </div>
            {{-- berkebutuhan khusus --}}
            <div class="form-group">
                <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="autis" name="berkebutuhan_khusus" class="custom-control-input" value="Autis" checked>
                    <label class="custom-control-label" for="autis">{{ $pesertaDidik->dataPribadi->berkebutuhan_khusus }}</label>
                </div>
            </div>
            {{-- alamat --}}
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" value="{{ $pesertaDidik->dataPribadi->alamat }}"></textarea>
            </div>
            {{-- RT --}}
            <div class="form-group">
                <label for="rt">RT</label>
                <input type="text" class="form-control rounded-0" name="rt" maxlength="3" id="rt" value="{{ $pesertaDidik->dataPribadi->rt }}">
            </div>
            {{-- RW --}}
            <div class="form-group">
                <label for="rw">RW</label>
                <input type="text" class="form-control rounded-0" name="rw" maxlength="3" id="rw" value="{{ $pesertaDidik->dataPribadi->rw }}">
            </div>
            {{-- dusun --}}
            <div class="form-group">
                <label for="dusun">Dusun</label>
                <input type="text" class="form-control rounded-0" name="dusun" id="dusun" value="{{ $pesertaDidik->dataPribadi->dusun }}">
            </div>
            {{-- kelurahan --}}
            <div class="form-group">
                <label for="kelurahan">Kelurahan/Desa</label>
                <input type="text" class="form-control rounded-0" name="kelurahan" id="kelurahan" value="{{ $pesertaDidik->dataPribadi->kelurahan }}">
            </div>
            {{-- kecamatan --}}
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" class="form-control rounded-0" name="kecamatan" id="kecamatan" value="{{ $pesertaDidik->dataPribadi->kecamatan }}">
            </div>
            {{-- kode pos --}}
            <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="number" class="form-control rounded-0" name="kode_pos" id="kode_pos" value="{{ $pesertaDidik->dataPribadi->kode_pos }}">
            </div>
            {{-- lintang --}}
            <div class="form-group">
                <label for="lintang">lintan</label>
                <input type="text" class="form-control rounded-0" name="lintang" id="lintang" value="{{ $pesertaDidik->dataPribadi->lintang }}">
            </div>
            {{-- bujur --}}
            <div class="form-group">
                <label for="bujur">Bujur</label>
                <input type="text" class="form-control rounded-0" name="bujur" id="bujur" value="{{ $pesertaDidik->dataPribadi->bujur }}">
            </div>
            {{-- tempat tinga; --}}
            <div class="form-group">
                <label>Tempat Tinggal</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="panti" name="tempat_tinggal" class="custom-control-input" value="Panti Asuhan" checked>
                    <label class="custom-control-label" for="panti">{{ $pesertaDidik->dataPribadi->tempat_tinggal }}</label>
                </div>
            </div>
            {{-- moda transport --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Moda Transportasi</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lainnya" name="moda_transportasi" class="custom-control-input" value="Lainnya" checked>
                    <label class="custom-control-label" for="lainnya">{{ $pesertaDidik->dataPribadi->moda_transportasi }}</label>
                </div>
            </div>
            {{-- anak ke --}}
            <div class="form-group">
                <label for="anak-ke">Anak keberapa</label>
                <input type="text" class="form-control rounded-0" id="anak-ke" name="anak_ke" value="{{ $pesertaDidik->dataPribadi->anak_ke }}">
            </div>
            {{-- KIP --}}
            <div class="form-group">
                <label>Memiliki KIP</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="oke" name="kip" class="custom-control-input" value="iya" checked>
                    <label class="custom-control-label" for="oke">{{ $pesertaDidik->dataPribadi->kip }}</label>
                </div>
            </div>
            {{-- menerima kip --}}
            <div class="form-group">
                <label>Apakah peserta didik tetap menerima KIP</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kip-y" name="menerima_kip" class="custom-control-input" value="iya" checked>
                    <label class="custom-control-label" for="kip-y">{{ $pesertaDidik->dataPribadi->menerima_kip }}</label>
                </div>
            </div>
            {{-- PIP --}}
            <div class="form-group">
                <label>Alasan menolak PIP</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="sudah_mampu" name="pip" class="custom-control-input" value="Sudah mampu" checked>
                    <label class="custom-control-label" for="sudah_mampu">{{ $pesertaDidik->dataPribadi->pip }}</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Data ayah Kandung -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Data Ayah Kandung</h1>
        </div>
        <div class="card-body">
            {{-- nama --}}
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" class="form-control rounded-0" id="nama_ayah" name="nama_ayah" value="{{ $pesertaDidik->dataAyah->nama_ayah }}">
            </div>
            {{-- nik ayah --}}
            <div class="form-group">
                <label for="nik_ayah">NIK</label>
                <input type="text" class="form-control rounded-0" id="nik_ayah" name="nik_ayah" maxlength="16" value="{{ $pesertaDidik->dataAyah->nik_ayah }}">
            </div>
            {{-- tahun lahir --}}
            <div class="form-group">
                <label for="tahun_ayah">Tahun Lahir</label>
                <input type="text" class="form-control rounded-0" id="tahun_ayah" maxlength="4" name="tahun_ayah" value="{{ $pesertaDidik->dataAyah->tahun_ayah }}">
            </div>
            {{-- pendidikan --}}
            <div class="form-group">
                <label>Pendidikan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="s2" name="pendidikan_ayah" class="custom-control-input" value="S2" checked>
                    <label class="custom-control-label" for="s2">{{ $pesertaDidik->dataAyah->pendidikan_ayah }}</label>
                </div>
            </div>
            {{-- pekerjaan --}}
            <div class="form-group">
                <label>Pekerjaan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pensiun" name="pekerjaan_ayah" class="custom-control-input" value="Pensiun" checked>
                    <label class="custom-control-label" for="pensiun">{{ $pesertaDidik->dataAyah->pekerjaan_ayah }}</label>
                </div>
            </div>
            {{-- penghasilan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lebih" name="penghasilan_ayah" class="custom-control-input" value="> Rp 20.000.000" checked>
                    <label class="custom-control-label" for="lebih">{{ $pesertaDidik->dataAyah->penghasilan_ayah }}</label>
                </div>
            </div>
            {{-- berkebutuhan khusus --}}
            <div class="form-group">
                <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="autisayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Autis" checked>
                    <label class="custom-control-label" for="autisayah">{{ $pesertaDidik->dataAyah->berkebutuhan_khusus_ayah }}</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Data Ibu Kandung -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Data Ibu Kandung</h1>
        </div>
        <div class="card-body">
            {{-- nama --}}
            <div class="form-group">
                <label for="nama_ayah">Nama Ibu</label>
                <input type="text" class="form-control rounded-0" id="nama_ayah" name="nama_ayah" value="{{ $pesertaDidik->dataIbu->nama_ibu }}">
            </div>
            {{-- nik ibu --}}
            <div class="form-group">
                <label for="nik_ayah">NIK</label>
                <input type="text" class="form-control rounded-0" id="nik_ayah" name="nik_ayah" maxlength="16" value="{{ $pesertaDidik->dataIbu->nik_ibu }}">
            </div>
            {{-- tahun lahir --}}
            <div class="form-group">
                <label for="tahun_ibu">Tahun Lahir</label>
                <input type="text" class="form-control rounded-0" id="tahun_ibu" maxlength="4" name="tahun_ibu" value="{{ $pesertaDidik->dataIbu->tahun_ibu }}">
            </div>
            {{-- pendidikan --}}
            <div class="form-group">
                <label>Pendidikan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="s2" name="pendidikan_ibu" class="custom-control-input" value="S2" checked>
                    <label class="custom-control-label" for="s2">{{ $pesertaDidik->dataIbu->pendidikan_ibu }}</label>
                </div>
            </div>
            {{-- pekerjaan --}}
            <div class="form-group">
                <label>Pekerjaan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pensiun" name="pekerjaan_ibu" class="custom-control-input" value="Pensiun" checked>
                    <label class="custom-control-label" for="pensiun">{{ $pesertaDidik->dataIbu->pekerjaan_ibu }}</label>
                </div>
            </div>
            {{-- penghasilan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lebih" name="penghasilan_ibu" class="custom-control-input" value="> Rp 20.000.000" checked>
                    <label class="custom-control-label" for="lebih">{{ $pesertaDidik->dataIbu->penghasilan_ibu }}</label>
                </div>
            </div>
            {{-- berkebutuhan khusus --}}
            <div class="form-group">
                <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="autisibu" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Autis" checked>
                    <label class="custom-control-label" for="autisibu">{{ $pesertaDidik->dataIbu->berkebutuhan_khusus_ibu }}</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Data Wali -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Data Wali</h1> <br>
            <span style="color:red">*</span><span>(Optional) Diisi bila memiliki wali</span>
        </div>
        <div class="card-body">
            {{-- nama wali --}}
            <div class="form-group">
                <label for="nama-wali">Nama Wali</label>
                <input type="text" class="form-control rounded-0" id="nama-wali" name="nama_wali" value="{{ $pesertaDidik->dataWali->nama_wali }}">
            </div>
            {{-- nik --}}
            <div class="form-group">
                <label for="nik-wali">NIK</label>
                <input type="text" class="form-control rounded-0" id="nik-wali" maxlength="16" name="nik_wali" value="{{ $pesertaDidik->dataWali->nik_wali }}">
            </div>
            {{-- tahun lahir --}}
            <div class="form-group">
                <label for="tahun-wali">Tahun Lahir</label>
                <input type="text" class="form-control rounded-0" id="tahun-wali" maxlength="4" name="tahun_wali" value="{{ $pesertaDidik->dataWali->tahun_wali }}">
            </div>
            {{-- pendidikan --}}
            <div class="form-group">
                <label>Pendidikan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="s2w" name="pendidikan_wali" class="custom-control-input" value="S2" checked>
                    <label class="custom-control-label" for="s2w">{{ $pesertaDidik->dataWali->pendidikan_wali }}</label>
                </div>
            </div>
            {{-- pekerjaan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Pekerjaan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pensiunw" name="pekerjaan_wali" class="custom-control-input" value="Pensiun" checked>
                    <label class="custom-control-label" for="pensiunw">{{ $pesertaDidik->dataWali->pekerjaan_wali }}</label>
                </div>
            </div>
            {{-- penghasilan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lebihw" name="penghasilan_wali" class="custom-control-input" value="> Rp 20.000.000" checked>
                    <label class="custom-control-label" for="lebihw">{{ $pesertaDidik->dataWali->penghasilan_wali }}</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Periodik -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Data Periodik</h1> <br>
        </div>
        <div class="card-body">
            {{-- tinggi badan --}}
            <div class="form-group">
                <label for="tinggibdn">Tinggi Badan</label>
                <input type="number" class="form-control rounded-0" id="tinggibdn" name="tinggi_badan" value="{{ $detailPesertaDidik->dataPeriodik->tinggi_badan }}"><span>Cm</span>
            </div>
            {{-- Berat Badan --}}
            <div class="form-group">
                <label for="bb">Berat Badan</label>
                <input type="number" class="form-control rounded-0" id="bb" name="berat_badan" value="{{ $detailPesertaDidik->dataPeriodik->berat_badan }}"><span>Kg</span>
            </div>
            {{-- Lingkar Kepala --}}
            <div class="form-group">
                <label for="lingkar">Lingkar Kepala</label>
                <input type="number" class="form-control rounded-0" id="lingkar" maxlength="4" name="lingkar_kepala" value="{{ $detailPesertaDidik->dataPeriodik->lingkar_kepala }}"><span>Cm</span>
            </div>
            {{-- jarak tempat tingal --}}
            <div class="form-group">
                <label for=>Jarak Tempat Tinggal</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kurang1" name="jarak" class="custom-control-input" value="Kurang dari 1 Km" checked>
                    <label class="custom-control-label" for="kurang1">{{ $detailPesertaDidik->dataPeriodik->jarak }}</label>
                </div>
            </div>
            {{-- jarak dalam Km --}}
            <div class="form-group">
                <label for="km">Jarak</label><br>
                <input type="number" class="form-control rounded-0" id="km" name="km" value="{{ $detailPesertaDidik->dataPeriodik->km }}"><span>Km</span>
            </div>
            {{-- waktu tempuh --}}
            <div class="form-group">
                <label for="waktu">Waktu Tempuh</label><br>
                <input type="text" class="form-control rounded-0 w-25" id="waktu" name="waktu_tempuh_jam" value="{{ $detailPesertaDidik->dataPeriodik->waktu_tempuh }}">
            </div>
            {{-- jumlah saudara --}}
            <div class="form-group">
                <label for="saudara">Jumlah Saudara Kandung</label><br>
                <input type="number" class="form-control rounded-0" id="saudara" name="jumlah_saudara" value="{{ $detailPesertaDidik->dataPeriodik->jumlah_saudara }}">
            </div>
        </div>
    </div>

    <!-- Prestasi -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Prestasi</h1> <br>
        </div>
        <div class="card-body">
            @for ($i=0; $i<3; $i++)
                {{-- prestasi 1 --}}
                <h4>Prestasi {{ $i+1 }}</h6> <br>
                {{-- jenis --}}
                <div class="form-group">
                    <label>Jenis Prestasi</label><br>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="sains{{ $i }}" name="prestasi{{ $i }}nama_prestasi" class="custom-control-input" value="sains" @if(old('prestasi'.$i.'nama_prestasi') == 'sains') checked @endif>
                        <label class="custom-control-label" for="sains{{ $i }}">Sains</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="seni{{ $i }}" name="prestasi{{ $i }}nama_prestasi" class="custom-control-input" value="seni" @if(old('prestasi'.$i.'nama_prestasi') == 'seni') checked @endif>
                        <label class="custom-control-label" for="seni{{ $i }}">Seni</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="olah raga{{ $i }}" name="prestasi{{ $i }}nama_prestasi" class="custom-control-input" value="olah raga" @if(old('prestasi'.$i.'nama_prestasi') == 'olah raga') checked @endif>
                        <label class="custom-control-label" for="olah raga{{ $i }}">Olah Raga</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="lain{{ $i }}" name="prestasi{{ $i }}nama_prestasi" class="custom-control-input" value="lain-lain" @if(old('prestasi'.$i.'nama_prestasi') == 'lain-lain') checked @endif>
                        <label class="custom-control-label" for="lain{{ $i }}">Lain-lain</label>
                    </div>
                    @error('prestasi'.$i.'nama_prestasi')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                    {{-- tingkat --}}
                <div class="form-group">
                    <label for="exampleFormControlPasswor3">Tingkat prestasi</label><br>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="kecamatan{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="kecamatan" @if(old('prestasi'.$i.'tingkat') == 'kecamatan') checked @endif>
                        <label class="custom-control-label" for="kecamatan{{ $i }}">Kecamatan</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="kabupaten{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="kabupaten" @if(old('prestasi'.$i.'tingkat') == 'kabupaten') checked @endif>
                        <label class="custom-control-label" for="kabupaten{{ $i }}">Kabupaten</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="provinsi{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="provinsi" @if(old('prestasi'.$i.'tingkat') == 'provinsi') checked @endif>
                        <label class="custom-control-label" for="provinsi{{ $i }}">Provinsi</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="nasional{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="nasional" @if(old('prestasi'.$i.'tingkat') == 'nasional') checked @endif>
                        <label class="custom-control-label" for="nasional{{ $i }}">Nasional</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="internasional{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="internasional" @if(old('prestasi'.$i.'tingkat') == 'internasional') checked @endif>
                        <label class="custom-control-label" for="internasional{{ $i }}">Internasional</label>
                    </div>
                    @error('prestasi'.$i.'tingkat')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                {{-- nama prestasi --}}
                <div class="form-group">
                    <label for="namap{{ $i }}">Nama Prestasi</label>
                    <input type="text" class="form-control rounded-0" id="namap{{ $i }}" name="prestasi{{ $i }}nama_prestasi" value="{{ old('prestasi'.$i.'nama_prestasi') }}">
                    @error('prestasi'.$i.'nama_prestasi')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                {{-- tahun prestasi --}}
                <div class="form-group">
                    <label for="tahunp{{ $i }}">Tahun Prestasi</label>
                    <input type="number" class="form-control rounded-0" id="tahunp{{ $i }}" maxlength="4" name="prestasi{{ $i }}tahun" value="{{ old('prestasi'.$i.'tahun') }}">
                    @error('prestasi'.$i.'tahun')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                {{-- nama penyelenggara --}}
                <div class="form-group">
                    <label for="exampleFormControlPasswor3{{ $i }}">Nama Penyelenggara</label>
                    <input type="text" class="form-control rounded-0" id="exampleFormControlPasswor3{{ $i }}" name="prestasi{{ $i }}penyelenggara" value="{{ old('prestasi'.$i.'penyelenggara') }}">
                    @error('prestasi'.$i.'penyelenggara')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <br>
            @endfor


        </div>
    </div>

    <!-- Beasiswa -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Beasiswa</h1> <br>
        </div>
        <div class="card-body">
            @for($i=0; $i<3; $i++)
                 {{-- beasiswa 1 --}}
                <h4>Beasiswa {{ $i+1 }}</h6> <br>
                {{-- jenis --}}
                <div class="form-group">
                    <label>Jenis Beasiswa</label><br>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="anak_miskin{{ $i }}" name="beasiswa{{ $i }}jenis_anak_berprestasi" class="custom-control-input" value="anak miskin" @if(old('beasiswa'. $i .'jenis_anak_berprestasi') == 'anak miskin') checked @endif>
                        <label class="custom-control-label" for="anak_miskin{{ $i }}">Anak miskin</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="pendidikanb{{ $i }}" name="beasiswa{{ $i }}jenis_anak_berprestasi" class="custom-control-input" value="pendidikan" @if(old('beasiswa'. $i .'jenis_anak_berprestasi') == 'pendidikan') checked @endif>
                        <label class="custom-control-label" for="pendidikanb{{ $i }}">Pendidikan</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="unggulan{{ $i }}" name="beasiswa{{ $i }}jenis_anak_berprestasi" class="custom-control-input" value="unggulan" @if(old('beasiswa'. $i .'jenis_anak_berprestasi') == 'unggulan') checked @endif>
                        <label class="custom-control-label" for="unggulan{{ $i }}">Unggulan</label>
                    </div>
                    @error('beasiswa{{ $i }}jenis_anak_berprestasi')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                    {{-- nama beasiswa --}}
                <div class="form-group">
                    <label for="beasiswa1{{ $i }}">Nama Beasiswa</label><br>
                    <input type="text" class="form-control rounded-0" id="beasiswa1{{ $i }}" name="beasiswa{{ $i }}keterangan" value="{{ old('beasiswa'.$i.'keterangan') }}">
                    @error('beasiswa'.$i.'keterangan')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                    {{-- tahun mulai --}}
                <div class="form-group">
                    <label for="tahunm1{{ $i }}">Tahun Mulai</label><br>
                    <input type="text" class="form-control rounded-0" id="tahunm1{{ $i }}" name="beasiswa{{ $i }}tahun_mulai" value="{{ old('beasiswa'.$i.'tahun_mulai') }}">
                    @error('beasiswa'.$i.'tahun_mulai')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                    {{-- tahun berakhir --}}
                <div class="form-group">
                    <label for="tahuns1{{ $i }}">Tahun Selesai</label><br>
                    <input type="text" class="form-control rounded-0" id="tahuns1{{ $i }}" name="beasiswa{{ $i }}tahun_selesai" value="{{ old('beasiswa'.$i.'tahun_selesai') }}">
                    @error('beasiswa'.$i.'tahun_selesai')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <br>
            @endfor
        </div>
    </div>

    <!-- kesejahteraan -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Kesejahteraan Peserta Didik</h1> <br>
        </div>
        <div class="card-body">
            {{-- jenis kesejahteraan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Jenis Kesejahteraan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pkh" name="jenis_kesejahteraan" class="custom-control-input" value="PKH" @if(old('jenis_kesejahteraan') == 'PKH') checked @endif>
                    <label class="custom-control-label" for="pkh">PKH</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kps" name="jenis_kesejahteraan" class="custom-control-input" value="Kartu Perlindungan Sosial" @if(old('jenis_kesejahteraan') == 'Kartu Perlindungan Sosial') checked @endif>
                    <label class="custom-control-label" for="kps">Kartu Perlindungan Sosial</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kks" name="jenis_kesejahteraan" class="custom-control-input" value="Kartu Keluarg Sehat" @if(old('jenis_kesejahteraan') == 'Kartu Keluarg Sehat') checked @endif>
                    <label class="custom-control-label" for="kks">Kartu Keluarg Sehat</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kkes" name="jenis_kesejahteraan" class="custom-control-input" value="Kartu Kesehatan" @if(old('jenis_kesejahteraan') == 'Kartu Kesehatan') checked @endif>
                    <label class="custom-control-label" for="kkes">Kartu Kesehatan</label>
                </div>
                @error('jenis_kesejahteraan')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- No Kartu --}}
            <div class="form-group">
                <label for="no_kartuKkes">No. Kartu</label>
                <input type="number" class="form-control rounded-0" id="no_kartuKkes" name="no_kartu" value="{{ old('no_kartu') }}">
                @error('no_kartu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- Nama kartu --}}
            <div class="form-group">
                <label for="nama_kartuKes">Nama Kartu</label>
                <input type="text" class="form-control rounded-0" id="nama_kartuKes" name="nama_kartu" value="{{ old('nama_kartu') }}">
                @error('nama_kartu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- upload berkas --}}
    <div class="card card-default">
        <div class="card-header">
            <h1>Upload Berkas</h1> <br>
        </div>
        <div class="card-body">
            {{-- file kk --}}
            <div class="form-group">
                <label for="scan_kk">Scan Kartu Keluarga</label>
                <input type="file" class="form-control-file" id="scan_kk" name="file_kk" value="{{ old('file_kk') }}">
                @error('file_kk')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- file akta --}}
            <div class="form-group">
                <label for="scan_akta">Scan Kartu Akta Kelahiran</label>
                <input type="file" class="form-control-file" id="scan_akta" name="file_akta_kelahiran" value="{{ old('file_akta_kelahiran') }}">
                @error('file_akta_kelahiran')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- file ktp ortu --}}
            <div class="form-group">
                <label for="scan_ktp">Scan Kartu Akta Kelahiran</label>
                <input type="file" class="form-control-file" id="scan_ktp" name="file_ktp_ortu" value="{{ old('file_ktp_ortu') }}">
                @error('file_ktp_ortu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- file ijazah tk --}}
            <div class="form-group">
                <label for="scan_ijazah">Scan Ijazah TK</label>
                <input type="file" class="form-control-file" id="scan_ijazah" name="file_ijazah_tk" value="{{ old('file_ijazah_tk') }}">
                @error('file_ijazah_tk')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg btn-block">Kirim Data Siswa</button>
    </fieldset>
</form>
