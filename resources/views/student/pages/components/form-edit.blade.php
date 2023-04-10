<form method="POST" enctype="multipart/form-data" action={{ route('siswa.edit') }}>
    @csrf
    <input type="hidden" value="{{ $siswa->sekolah_id }}" name="sekolah_id">
    <input type="hidden" value="edit" name="action">
    {{-- Data Pribadi Siswa --}}
    <div class="card card-default">
        <div class="card-header">
            <h1>Data Pribadi</h1>
        </div>
        <div class="card-body">
            {{-- nama lengkap ppdb --}}
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control rounded-0 @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" value="{{ old('nama_lengkap', $siswa->dataPribadi->nama_lengkap) }}" required>
                @error('nama_lengkap')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- gender --}}
            <div class="form-group">
                <label>Jenis Kelamin</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="laki-laki" name="gender" class="custom-control-input" checked value="laki-laki" @if(old('gender', $siswa->dataPribadi->gender) == 'laki-laki') checked @endif>
                    <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="perempuan" name="gender" class="custom-control-input" value="perempuan" @if(old('gender', $siswa->dataPribadi->gender) == 'perempuan') checked @endif>
                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                </div>
                @error('gender')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- nisn --}}
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" name="nisn" class="form-control rounded-0 @error('nisin') is-invalid @enderror" id="nisn" maxlength="10" value="{{ old('nisn', $siswa->dataPribadi->nisn) }}" required>
                <span class="mt-2 d-block"><span style="color:red;">*</span>masukan 10 digit NISN</span>
                @error('nisn')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- nik --}}
            <div class="form-group">
                <label for="nik">NIK/No. KITAS (Untuk WNA)</label>
                <input type="text" name="nik" class="form-control rounded-0 @error('nik') is-invalid @enderror" id="nik" maxlength="16" value="{{ old('nik', $siswa->dataPribadi->nik) }}" required>
                <span class="mt-2 d-block"><span style="color:red;">*</span>masukan 16 digit NIK</span>
                @error('nik')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- kk --}}
            <div class="form-group">
                <label for="kk">No. KK</label>
                <input type="text" name="kk" class="form-control rounded-0 @error('kk') is-invalid @enderror" id="kk" value="{{ old('kk', $siswa->dataPribadi->kk) }}" required>
                @error('kk')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- tempat lahir --}}
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control rounded-0 @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" value="{{ old('tempat_lahir', $siswa->dataPribadi->tempat_lahir) }}" required>
                @error('tempat_lahir')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- tgl. lahir --}}
            <div class="form-group">
                <label for="tgl_lahir">Tgl. Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control rounded-0" id="tgl_lahir" value="{{ old('tgl_lahir', $siswa->dataPribadi->tgl_lahir) }}" required>
                @error('tgl_lahir')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- akta kelahiran --}}
            <div class="form-group">
                <label for="akta_kelahiran">No. Registrasi Akta Kelahiran</label>
                <input type="string" name="akta_kelahiran" class="form-control rounded-0" id="akta_kelahiran" value="{{ old('akta_kelahiran', $siswa->dataPribadi->akta_kelahiran) }}" required>
                @error('akta_kelahiran')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- agama --}}
            <div class="form-group">
                <label>Agama dan Kepercayaan</label> <br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="islam" name="agama" class="custom-control-input" checked value="Islam" @if(old('agama', $siswa->dataPribadi->agama) == 'Islam') checked @endif>
                    <label class="custom-control-label" for="islam">Islam</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kristen" name="agama" class="custom-control-input" value="Kristen/Protestan" @if(old('agama', $siswa->dataPribadi->agama) == 'Kristen/Protestan') checked @endif>
                    <label class="custom-control-label" for="kristen">Kristen/Protestan</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="khatolik" name="agama" class="custom-control-input" value="Khatolik" @if(old('agama', $siswa->dataPribadi->agama) == 'Khatolik') checked @endif>
                    <label class="custom-control-label" for="khatolik">Khatolik</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="hindu" name="agama" class="custom-control-input" value="Hindu" @if(old('agama', $siswa->dataPribadi->agama) == 'Hindu') checked @endif>
                    <label class="custom-control-label" for="hindu">Hindu</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="budha" name="agama" class="custom-control-input" value="Budha" @if(old('agama', $siswa->dataPribadi->agama) == 'Budha') checked @endif>
                    <label class="custom-control-label" for="budha">Budha</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="konghucu" name="agama" class="custom-control-input" value="Konghucu" @if(old('agama', $siswa->dataPribadi->agama) == 'Konghucu') checked @endif>
                    <label class="custom-control-label" for="konghucu">Konghucu</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="yme" name="agama" class="custom-control-input" value="Percaya kepada Tuhan YME" @if(old('agama', $siswa->dataPribadi->agama) == 'Percaya kepada Tuhan YME') checked @endif>
                    <label class="custom-control-label" for="yme">Percaya kepada Tuhan YME</label>
                </div>
                @error('agama')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- kewarganegaraan --}}
            <div class="form-group">
                <label>Kewarganegaraan</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wni" name="kewarganegaraan" class="custom-control-input" checked value="WNI" @if(old('kewarganegaraan', $siswa->dataPribadi->kewarganegaraan) == 'WNI') checked @endif>
                    <label class="custom-control-label" for="wni">Indonesia (WNI)</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wna" name="kewarganegaraan" class="custom-control-input" value="WNA" @if(old('kewarganegaraan', $siswa->dataPribadi->kewarganegaraan) == 'WNA') checked @endif>
                    <label class="custom-control-label" for="wna">Asing (WNA)</label>
                </div>
                @error('kewarganegaraan')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
                <input type="text" class="form-control rounded-0" name="negara" id="exampleFormControlInput4" value="@if(old('kewarganegaraan', $siswa->dataPribadi->kewarganegaraan) == 'WNA') {{ old('negara', $siswa->dataPribadi->negara) }} @endif">
                <span class="mt-2 d-block"><span style="color:red;">*</span>Isi apabila WNA</span>
                @error('negara')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- berkebutuhan khusus --}}
            <div class="form-group">
                <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tidak" name="berkebutuhan_khusus" class="custom-control-input" checked value="Tidak" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Tidak') checked @endif>
                    <label class="custom-control-label" for="tidak">Tidak</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="netra" name="berkebutuhan_khusus" class="custom-control-input" value="Netra" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Netra') checked @endif>
                    <label class="custom-control-label" for="netra">Netra (A)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="rungu" name="berkebutuhan_khusus" class="custom-control-input" value="Rungu" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'WNRunguA') checked @endif>
                    <label class="custom-control-label" for="rungu">Rungu (B)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="grahitar" name="berkebutuhan_khusus" class="custom-control-input" value="Grahita Ringan" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Grahita Ringan') checked @endif>
                    <label class="custom-control-label" for="grahitar">Grahita Ringan (C)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="grahitas" name="berkebutuhan_khusus" class="custom-control-input" value="Grahita Sedang" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Grahita Sedang') checked @endif>
                    <label class="custom-control-label" for="grahitas">Grahita Sedang (C1)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="daksar" name="berkebutuhan_khusus" class="custom-control-input" value="Daksa Ringan" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Daksa Ringan') checked @endif>
                    <label class="custom-control-label" for="daksar">Daksa Ringan (D)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="daksas" name="berkebutuhan_khusus" class="custom-control-input" value="Daksa Sedang" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Daksa Sedang') checked @endif>
                    <label class="custom-control-label" for="daksas">Daksa Sedang (D1)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="laras" name="berkebutuhan_khusus" class="custom-control-input" value="Laras" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Laras') checked @endif>
                    <label class="custom-control-label" for="laras">Laras (E)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wicara" name="berkebutuhan_khusus" class="custom-control-input" value="Wicara" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Wicara') checked @endif>
                    <label class="custom-control-label" for="wicara">Wicara (F)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tuna" name="berkebutuhan_khusus" class="custom-control-input" value="Tuna Ganda" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Tuna Ganda') checked @endif>
                    <label class="custom-control-label" for="tuna">Tuna Ganda (G)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="hiper" name="berkebutuhan_khusus" class="custom-control-input" value="Hiper Aktif" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Hiper Aktif') checked @endif>
                    <label class="custom-control-label" for="hiper">Hiper Aktif (H)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="cerdas" name="berkebutuhan_khusus" class="custom-control-input" value="Cerdas Istimewa" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Cerdas Istimewa') checked @endif>
                    <label class="custom-control-label" for="cerdas">Cerdas Istimewa (I)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="bakat" name="berkebutuhan_khusus" class="custom-control-input" value="Bakat Istimewa" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Bakat Istimewa') checked @endif>
                    <label class="custom-control-label" for="bakat">Bakat Istimewa (J)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kesulitan" name="berkebutuhan_khusus" class="custom-control-input" value="Kesulitan Belajar" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Kesulitan Belajar') checked @endif>
                    <label class="custom-control-label" for="kesulitan">Kesulitan Belajar (K)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="narkoba" name="berkebutuhan_khusus" class="custom-control-input" value="Narkoba" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Narkoba') checked @endif>
                    <label class="custom-control-label" for="narkoba">Narkoba (K)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="indigo" name="berkebutuhan_khusus" class="custom-control-input" value="Indigo" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Indigo') checked @endif>
                    <label class="custom-control-label" for="indigo">Indigo (O)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="down" name="berkebutuhan_khusus" class="custom-control-input" value="Down Sindrome" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Down Sindrome') checked @endif>
                    <label class="custom-control-label" for="down">Down Sindrome (P)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="autis" name="berkebutuhan_khusus" class="custom-control-input" value="Autis" @if(old('berkebutuhan_khusus', $siswa->dataPribadi->berkebutuhan_khusus) == 'Autis') checked @endif>
                    <label class="custom-control-label" for="autis">Autis (Q)</label>
                </div>
                @error('berkebutuhan_khusus')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- alamat --}}
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" required>{{ old('alamat', $siswa->dataPribadi->alamat) }}</textarea>
                @error('alamat')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- RT --}}
            <div class="form-group">
                <label for="rt">RT</label>
                <input type="text" class="form-control rounded-0" name="rt" maxlength="3" id="rt" value="{{ old('rt', $siswa->dataPribadi->rt) }}" required>
                <span class="mt-2 d-block"><span style="color:red;">*</span>masukan 3 digit angka, misal 001</span>
                @error('rt')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- RW --}}
            <div class="form-group">
                <label for="rw">RW</label>
                <input type="text" class="form-control rounded-0" name="rw" maxlength="3" id="rw" value="{{ old('rw', $siswa->dataPribadi->rw) }}" required>
                <span class="mt-2 d-block"><span style="color:red;">*</span>masukan 3 digit angka, misal 001</span>
                @error('rw')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- dusun --}}
            <div class="form-group">
                <label for="dusun">Dusun</label>
                <input type="text" class="form-control rounded-0" name="dusun" id="dusun" value="{{ old('dusun', $siswa->dataPribadi->dusun) }}" required>
                @error('dusun')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- kelurahan --}}
            <div class="form-group">
                <label for="kelurahan">Kelurahan/Desa</label>
                <input type="text" class="form-control rounded-0" name="kelurahan" id="kelurahan" value="{{ old('kelurahan', $siswa->dataPribadi->kelurahan) }}" required>
                @error('kelurahan')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- kecamatan --}}
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" class="form-control rounded-0" name="kecamatan" id="kecamatan" value="{{ old('kecamatan', $siswa->dataPribadi->kecamatan) }}" required>
                @error('kecamatan')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- kode pos --}}
            <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="number" class="form-control rounded-0" name="kode_pos" id="kode_pos" value="{{ old('kode_pos', $siswa->dataPribadi->kode_pos) }}" required>
                @error('kode_pos')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- lintang --}}
            <div class="form-group">
                <label for="lintang">Lintang</label>
                <input type="text" class="form-control rounded-0" name="lintang" id="lintang" value="{{ old('lintang', $siswa->dataPribadi->lintang) }}" required>
                @error('lintang')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- bujur --}}
            <div class="form-group">
                <label for="bujur">Bujur</label>
                <input type="text" class="form-control rounded-0" name="bujur" id="bujur" value="{{ old('bujur', $siswa->dataPribadi->bujur) }}" required>
                @error('bujur')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- tempat tinga; --}}
            <div class="form-group">
                <label>Tempat Tinggal</label> <br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="ortu" name="tempat_tinggal" class="custom-control-input" checked value="Bersama orang tua" @if(old('tempat_tinggal', $siswa->dataPribadi->tempat_tinggal) == 'Bersama orang tua') checked @endif>
                    <label class="custom-control-label" for="ortu">Bersama orang tua</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wali" name="tempat_tinggal" class="custom-control-input" value="Wali" @if(old('tempat_tinggal', $siswa->dataPribadi->tempat_tinggal) == 'Wali') checked @endif>
                    <label class="custom-control-label" for="wali">Wali</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kos" name="tempat_tinggal" class="custom-control-input" value="Kos" @if(old('tempat_tinggal', $siswa->dataPribadi->tempat_tinggal) == 'Kos') checked @endif>
                    <label class="custom-control-label" for="kos">Kos</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="asrama" name="tempat_tinggal" class="custom-control-input" value="Asrama" @if(old('tempat_tinggal', $siswa->dataPribadi->tempat_tinggal) == 'Asrama') checked @endif>
                    <label class="custom-control-label" for="asrama">Asrama</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="panti" name="tempat_tinggal" class="custom-control-input" value="Panti Asuhan" @if(old('tempat_tinggal', $siswa->dataPribadi->tempat_tinggal) == 'Panti Asuhan') checked @endif>
                    <label class="custom-control-label" for="panti">Panti Asuhan</label>
                </div>
                @error('tempat_tinggal')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- moda transport --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Moda Transportasi</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="jalan" name="moda_transportasi" class="custom-control-input" checked value="Jalan kaki" @if(old('moda_transportasi', $siswa->dataPribadi->moda_transportasi) == 'Jalan kaki') checked @endif>
                    <label class="custom-control-label" for="jalan">Jalan kaki</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kendaraan" name="moda_transportasi" class="custom-control-input" value="Kendaraan pribadi" @if(old('moda_transportasi', $siswa->dataPribadi->moda_transportasi) == 'Kendaraan pribadi') checked @endif>
                    <label class="custom-control-label" for="kendaraan">Kendaraan pribadi</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="umum" name="moda_transportasi" class="custom-control-input" value="Kendaraan umum" @if(old('moda_transportasi', $siswa->dataPribadi->moda_transportasi) == 'Kendaraan umum') checked @endif>
                    <label class="custom-control-label" for="umum">Kendaraan umum</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="jemput" name="moda_transportasi" class="custom-control-input" value="Jemputan sekolah" @if(old('moda_transportasi', $siswa->dataPribadi->moda_transportasi) == 'Jemputan sekolah') checked @endif>
                    <label class="custom-control-label" for="jemput">Jemputan sekolah</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kereta" name="moda_transportasi" class="custom-control-input" value="Kereta api" @if(old('moda_transportasi', $siswa->dataPribadi->moda_transportasi) == 'Kereta api') checked @endif>
                    <label class="custom-control-label" for="kereta">Kereta api</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="ojek" name="moda_transportasi" class="custom-control-input" value="Ojek" @if(old('moda_transportasi', $siswa->dataPribadi->moda_transportasi) == 'Ojek') checked @endif>
                    <label class="custom-control-label" for="ojek">Ojek</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="becak" name="moda_transportasi" class="custom-control-input" value="Becak" @if(old('moda_transportasi', $siswa->dataPribadi->moda_transportasi) == 'Becak') checked @endif>
                    <label class="custom-control-label" for="becak">Becak</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="penyebrangan" name="moda_transportasi" class="custom-control-input" value="Perahu penyebrangan" @if(old('moda_transportasi', $siswa->dataPribadi->moda_transportasi) == 'Perahu penyebrangan') checked @endif>
                    <label class="custom-control-label" for="penyebrangan">Perahu penyebrangan</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lainnya" name="moda_transportasi" class="custom-control-input" value="Lainnya" @if(old('moda_transportasi', $siswa->dataPribadi->moda_transportasi) == 'Lainnya') checked @endif>
                    <label class="custom-control-label" for="lainnya">lainnya</label>
                </div>
                @error('moda_transportasi')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- anak ke --}}
            <div class="form-group">
                <label for="anak-ke">Anak keberapa</label>
                <input type="number" class="form-control rounded-0" id="anak-ke" name="anak_ke" value="{{ old('anak_ke', $siswa->dataPribadi->anak_ke) }}" required>
                @error('anak_ke')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- KIP --}}
            <div class="form-group">
                <label>Memiliki KIP</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="oke" name="kip" class="custom-control-input" checked value="iya" @if(old('kip', $siswa->dataPribadi->kip) == 'iya') checked @endif>
                    <label class="custom-control-label" for="oke">Iya</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="no" name="kip" class="custom-control-input" value="tidak" @if(old('kip', $siswa->dataPribadi->kip) == 'tidak') checked @endif>
                    <label class="custom-control-label" for="no">Tidak</label>
                </div>
                @error('kip')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- menerima kip --}}
            <div class="form-group">
                <label>Apakah peserta didik tetap menerima KIP</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kip-y" name="menerima_kip" class="custom-control-input" checked value="iya" @if(old('menerima_kip', $siswa->dataPribadi->kip) == 'iya') checked @endif>
                    <label class="custom-control-label" for="kip-y">Iya</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kip-n" name="menerima_kip" class="custom-control-input" value="tidak" @if(old('menerima_kip', $siswa->dataPribadi->kip) == 'tidak') checked @endif>
                    <label class="custom-control-label" for="kip-n">Tidak</label>
                </div>
                @error('menerima_kip')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- PIP --}}
            <div class="form-group">
                <label>Alasan menolak PIP</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="dilarang-pemda" name="pip" class="custom-control-input" checked value="Menerima bantuan serupa" @if(old('pip', $siswa->dataPribadi->pip) == 'Menerima bantuan serupa') checked @endif>
                    <label class="custom-control-label" for="dilarang-pemda">Dilarang pemda karena menerima bantuan serupa</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="menolak" name="pip" class="custom-control-input" value="Menolak" @if(old('pip', $siswa->dataPribadi->pip) == 'Menolak') checked @endif>
                    <label class="custom-control-label" for="menolak">Menolak</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="sudah_mampu" name="pip" class="custom-control-input" value="Sudah mampu" @if(old('pip', $siswa->dataPribadi->pip) == 'Sudah mampu') checked @endif>
                    <label class="custom-control-label" for="sudah_mampu">Sudah mampu</label>
                </div>
                @error('pip')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <!-- Form Data Ayah Kandung -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Data Ayah Kandung</h1>
        </div>
        <div class="card-body">
            {{-- nama --}}
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" class="form-control rounded-0" id="nama_ayah" name="nama_ayah" value="{{ old('nama_ayah', $siswa->dataPribadi->dataAyah->nama_ayah) }}" required>
                @error('nama_ayah')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- nik ayah --}}
            <div class="form-group">
                <label for="nik_ayah">NIK</label>
                <input type="text" class="form-control rounded-0" id="nik_ayah" name="nik_ayah" maxlength="16" value="{{ old('nik_ayah', $siswa->dataPribadi->dataAyah->nik_ayah) }}" required>
                @error('nik_ayah')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- tahun lahir --}}
            <div class="form-group">
                <label for="tahun_ayah">Tahun Lahir</label>
                <input type="text" class="form-control rounded-0" id="tahun_ayah" maxlength="4" name="tahun_ayah" value="{{ old('tahun_ayah', $siswa->dataPribadi->dataAyah->tahun_ayah) }}" required>
                @error('tahun_ayah')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- pendidikan --}}
            <div class="form-group">
                <label>Pendidikan</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tidak_sekolah" name="pendidikan_ayah" class="custom-control-input" checked value="Tidak Sekolah" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'Tidak Sekolah') checked @endif>
                    <label class="custom-control-label" for="tidak_sekolah">Tidak Sekolah</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="putus-sd" name="pendidikan_ayah" class="custom-control-input" value="Putus SD" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'Putus SD') checked @endif>
                    <label class="custom-control-label" for="putus-sd">Putus SD</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="sd" name="pendidikan_ayah" class="custom-control-input" value="SD Sederajat" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'SD Sederajat') checked @endif>
                    <label class="custom-control-label" for="sd">SD Sederajat</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="smp" name="pendidikan_ayah" class="custom-control-input" value="SMP Sederajat" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'SMP Sederajat') checked @endif>
                    <label class="custom-control-label" for="smp">SMP Sederajat</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="sma" name="pendidikan_ayah" class="custom-control-input" value="SMA Sederajat" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'SMA Sederajat') checked @endif>
                    <label class="custom-control-label" for="sma">SMA Sederajat</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="d1" name="pendidikan_ayah" class="custom-control-input" value="D1" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'D1') checked @endif>
                    <label class="custom-control-label" for="d1">D1</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="d2" name="pendidikan_ayah" class="custom-control-input" value="D2" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'D2') checked @endif>
                    <label class="custom-control-label" for="d2">D2</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="d3" name="pendidikan_ayah" class="custom-control-input" value="D3" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'D3') checked @endif>
                    <label class="custom-control-label" for="d3">D3</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="s1" name="pendidikan_ayah" class="custom-control-input" value="S1" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'S1') checked @endif>
                    <label class="custom-control-label" for="s1">S1</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="s2" name="pendidikan_ayah" class="custom-control-input" value="S2" @if(old('pendidikan_ayah', $siswa->dataPribadi->dataAyah->pendidikan_ayah) == 'S2') checked @endif>
                    <label class="custom-control-label" for="s2">S2</label>
                </div>
                @error('pendidikan_ayah')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- pekerjaan --}}
            <div class="form-group">
                <label>Pekerjaan</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tidakayah" name="pekerjaan_ayah" class="custom-control-input" checked value="Tidak Bekerja" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Tidak Bekerja') checked @endif>
                    <label class="custom-control-label" for="tidakayah">Tidak Bekerja</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="nelayan" name="pekerjaan_ayah" class="custom-control-input" value="Nelayan" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Nelayan') checked @endif>
                    <label class="custom-control-label" for="nelayan">Nelayan</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="petani" name="pekerjaan_ayah" class="custom-control-input" value="Petani" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Petani') checked @endif>
                    <label class="custom-control-label" for="petani">Petani</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="peternak" name="pekerjaan_ayah" class="custom-control-input" value="Peternak" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Peternak') checked @endif>
                    <label class="custom-control-label" for="peternak">Peternak</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pns" name="pekerjaan_ayah" class="custom-control-input" value="PNS/TNI/POLRI" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'PNS/TNI/POLRI') checked @endif>
                    <label class="custom-control-label" for="pns">PNS/TNI/POLRI</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="karyawan" name="pekerjaan_ayah" class="custom-control-input" value="Karyawan Swasta" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Karyawan Swasta') checked @endif>
                    <label class="custom-control-label" for="karyawan">Karyawan Swasta</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pedagangk" name="pekerjaan_ayah" class="custom-control-input" value="Pedagang Kecil" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Pedagang Kecil') checked @endif>
                    <label class="custom-control-label" for="pedagangk">Pedagang Kecil</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pedagangb" name="pekerjaan_ayah" class="custom-control-input" value="Pedagang Besar" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Pedagang Besar') checked @endif>
                    <label class="custom-control-label" for="pedagangb">Pedagang Besar</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wiraswasta" name="pekerjaan_ayah" class="custom-control-input" value="Wiraswasta" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Wiraswasta') checked @endif>
                    <label class="custom-control-label" for="wiraswasta">Wiraswasta</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wirausaha" name="pekerjaan_ayah" class="custom-control-input" value="Wirausaha" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Wirausaha') checked @endif>
                    <label class="custom-control-label" for="wirausaha">Wirausaha</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="buruh" name="pekerjaan_ayah" class="custom-control-input" value="Buruh" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Buruh') checked @endif>
                    <label class="custom-control-label" for="buruh">Buruh</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pensiun" name="pekerjaan_ayah" class="custom-control-input" value="Pensiun" @if(old('pekerjaan_ayah', $siswa->dataPribadi->dataAyah->pekerjaan_ayah) == 'Pensiun') checked @endif>
                    <label class="custom-control-label" for="pensiun">Pensiun</label>
                </div>
                @error('pekerjaan_ayah')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- penghasilan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kecil" name="penghasilan_ayah" class="custom-control-input" checked value="< Rp 500.000" @if(old('penghasilan_ayah', $siswa->dataPribadi->dataAyah->penghasilan_ayah) == '< Rp 500.000') checked @endif>
                    <label class="custom-control-label" for="kecil">< Rp 500.000</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="sedang" name="penghasilan_ayah" class="custom-control-input" value="Rp 500.000 - Rp 999.999" @if(old('penghasilan_ayah', $siswa->dataPribadi->dataAyah->penghasilan_ayah) == 'Rp 500.000 - Rp 999.999') checked @endif>
                    <label class="custom-control-label" for="sedang">Rp 500.000 - Rp 999.999</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lumayan" name="penghasilan_ayah" class="custom-control-input" value="Rp 1.000.000 - Rp 1.999.999" @if(old('penghasilan_ayah', $siswa->dataPribadi->dataAyah->penghasilan_ayah) == 'Rp 1.000.000 - Rp 1.999.999') checked @endif>
                    <label class="custom-control-label" for="lumayan">Rp 1.000.000 - Rp 1.999.999</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="menengah" name="penghasilan_ayah" class="custom-control-input" value="Rp 2.000.000 - Rp 4.999.999" @if(old('penghasilan_ayah', $siswa->dataPribadi->dataAyah->penghasilan_ayah) == 'Rp 2.000.000 - Rp 4.999.999') checked @endif>
                    <label class="custom-control-label" for="menengah">Rp 2.000.000 - Rp 4.999.999</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="atas" name="penghasilan_ayah" class="custom-control-input" value="Rp 5.000.000 - Rp 20.000.000" @if(old('penghasilan_ayah', $siswa->dataPribadi->dataAyah->penghasilan_ayah) == 'Rp 5.000.000 - Rp 20.000.000') checked @endif>
                    <label class="custom-control-label" for="atas">Rp 5.000.000 - Rp 20.000.000</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lebih" name="penghasilan_ayah" class="custom-control-input" value="> Rp 20.000.000" @if(old('penghasilan_ayah', $siswa->dataPribadi->dataAyah->penghasilan_ayah) == '> Rp 20.000.000') checked @endif>
                    <label class="custom-control-label" for="lebih">> Rp 20.000.000</label>
                </div>
                @error('penghasilan_ayah')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- berkebutuhan khusus --}}
            <div class="form-group">
                <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tidak_ayah" name="berkebutuhan_khusus_ayah" checked class="custom-control-input" value="Tidak" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Tidak') checked @endif>
                    <label class="custom-control-label" for="tidak_ayah">Tidak</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="netraayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Netra" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Netra') checked @endif>
                    <label class="custom-control-label" for="netraayah">Netra (A)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="runguayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Rungu" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Pensiun') checked @endif>
                    <label class="custom-control-label" for="runguayah">Rungu (B)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="grahitarayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Grahita Ringan" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Grahita Ringan') checked @endif>
                    <label class="custom-control-label" for="grahitarayah">Grahita Ringan (C)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="grahitasayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Grahita Sedang" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Grahita Sedang') checked @endif>
                    <label class="custom-control-label" for="grahitasayah">Grahita Sedang (C1)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="daksarayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Daksa Ringan" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Daksa Ringan') checked @endif>
                    <label class="custom-control-label" for="daksarayah">Daksa Ringan (D)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="daksasayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Daksa Sedang" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Daksa Sedang') checked @endif>
                    <label class="custom-control-label" for="daksasayah">Daksa Sedang (D1)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="larasayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Laras" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Laras') checked @endif>
                    <label class="custom-control-label" for="larasayah">Laras (E)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wicaraayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Wicara" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Wicara') checked @endif>
                    <label class="custom-control-label" for="wicaraayah">Wicara (F)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tunaayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Tuna Ganda" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Tuna Ganda') checked @endif>
                    <label class="custom-control-label" for="tunaayah">Tuna Ganda (G)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="hiperayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Hiper Aktif" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Hiper Aktif') checked @endif>
                    <label class="custom-control-label" for="hiperayah">Hiper Aktif (H)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="cerdasayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Cerdas Istimewa" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Cerdas Istimewa') checked @endif>
                    <label class="custom-control-label" for="cerdasayah">Cerdas Istimewa (I)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="bakatayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Bakat Istimewa" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Bakat Istimewa') checked @endif>
                    <label class="custom-control-label" for="bakatayah">Bakat Istimewa (J)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kesulitanayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Kesulitan Belajar" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Kesulitan Belajar') checked @endif>
                    <label class="custom-control-label" for="kesulitanayah">Kesulitan Belajar (K)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="narkobaayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Narkoba" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Narkoba') checked @endif>
                    <label class="custom-control-label" for="narkobaayah">Narkoba (K)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="indigoayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Indigo" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Indigo') checked @endif>
                    <label class="custom-control-label" for="indigoayah">Indigo (O)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="downayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Down Sindrome" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Down Sindrome') checked @endif>
                    <label class="custom-control-label" for="downayah">Down Sindrome (P)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="autisayah" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Autis" @if(old('berkebutuhan_khusus_ayah', $siswa->dataPribadi->dataAyah->berkebutuhan_khusus_ayah) == 'Autis') checked @endif>
                    <label class="custom-control-label" for="autisayah">Autis (Q)</label>
                </div>
                @error('berkebutuhan_khusus_ayah')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <!-- Form Data Ibu Kandung -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Data Ibu Kandung</h1>

        </div>
        <div class="card-body">
            {{-- nama ibu --}}
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" class="form-control rounded-0" id="nama_ibu" name="nama_ibu" value="{{ old('nama_ibu', $siswa->dataPribadi->dataIbu->nama_ibu) }}" required>
                @error('nama_ibu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- nik --}}
            <div class="form-group">
                <label for="nik-ibu">NIK</label>
                <input type="text" class="form-control rounded-0" id="nik-ibu" maxlength="16" name="nik_ibu" value="{{ old('nik_ibu',  $siswa->dataPribadi->dataIbu->nik_ibu) }}" required>
                @error('nik_ibu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- tahun lahir --}}
            <div class="form-group">
                <label for="tahun-ibu">Tahun Lahir</label>
                <input type="text" class="form-control rounded-0" id="tahun-ibu" maxlength="4" name="tahun_ibu" value="{{ old('tahun_ibu',  $siswa->dataPribadi->dataIbu->tahun_ibu) }}" required>
                @error('tahun_ibu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- pendidikan --}}
            <div class="form-group">
                <label>Pendidikan</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tidak_sekolahibu" name="pendidikan_ibu" class="custom-control-input" checked value="Tidak Sekolah" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'Tidak Sekolah') checked @endif>
                    <label class="custom-control-label" for="tidak_sekolahibu">Tidak Sekolah</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="putus-sdibu" name="pendidikan_ibu" class="custom-control-input" value="Putus SD" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'Putus SD') checked @endif>
                    <label class="custom-control-label" for="putus-sdibu">Putus SD</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="sdi" name="pendidikan_ibu" class="custom-control-input" value="SD Sederajat" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'SD Sederajat') checked @endif>
                    <label class="custom-control-label" for="sdi">SD Sederajat</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="smpi" name="pendidikan_ibu" class="custom-control-input" value="SMP Sederajat" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'SMP Sederajat') checked @endif>
                    <label class="custom-control-label" for="smpi">SMP Sederajat</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="smai" name="pendidikan_ibu" class="custom-control-input" value="SMA Sederajat" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'SMA Sederajat') checked @endif>
                    <label class="custom-control-label" for="smai">SMA Sederajat</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="d1i" name="pendidikan_ibu" class="custom-control-input" value="D1" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'D1') checked @endif>
                    <label class="custom-control-label" for="d1i">D1</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="d2i" name="pendidikan_ibu" class="custom-control-input" value="D2" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'D2') checked @endif>
                    <label class="custom-control-label" for="d2i">D2</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="d3i" name="pendidikan_ibu" class="custom-control-input" value="D3" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'D3') checked @endif>
                    <label class="custom-control-label" for="d3i">D3</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="s1i" name="pendidikan_ibu" class="custom-control-input" value="S1" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'S1') checked @endif>
                    <label class="custom-control-label" for="s1i">S1</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="s2i" name="pendidikan_ibu" class="custom-control-input" value="S2" @if(old('pendidikan_ibu',  $siswa->dataPribadi->dataIbu->pendidikan_ibu) == 'S2') checked @endif>
                    <label class="custom-control-label" for="s2i">S2</label>
                </div>
                @error('pendidikan_ibu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- pekerjaan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Pekerjaan</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tidaki" name="pekerjaan_ibu" class="custom-control-input" checked value="Tidak Bekerja" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Tidak Bekerja') checked @endif>
                    <label class="custom-control-label" for="tidaki">Tidak Bekerja</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="nelayani" name="pekerjaan_ibu" class="custom-control-input" value="Nelayan" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Nelayan') checked @endif>
                    <label class="custom-control-label" for="nelayani">Nelayan</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="petanii" name="pekerjaan_ibu" class="custom-control-input" value="Petani" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Petani') checked @endif>
                    <label class="custom-control-label" for="petanii">Petani</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="peternaki" name="pekerjaan_ibu" class="custom-control-input" value="Peternak" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Peternak') checked @endif>
                    <label class="custom-control-label" for="peternaki">Peternak</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pnsi" name="pekerjaan_ibu" class="custom-control-input" value="PNS/TNI/POLRI" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'PNS/TNI/POLRI') checked @endif>
                    <label class="custom-control-label" for="pnsi">PNS/TNI/POLRI</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="karyawani" name="pekerjaan_ibu" class="custom-control-input" value="Karyawan Swasta" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Karyawan Swasta') checked @endif>
                    <label class="custom-control-label" for="karyawani">Karyawan Swasta</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pedagangki" name="pekerjaan_ibu" class="custom-control-input" value="Pedagang Kecil" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Pedagang Kecil') checked @endif>
                    <label class="custom-control-label" for="pedagangki">Pedagang Kecil</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pedagangbi" name="pekerjaan_ibu" class="custom-control-input" value="Pedagang Besar" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Pedagang Besar') checked @endif>
                    <label class="custom-control-label" for="pedagangbi">Pedagang Besar</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wiraswastai" name="pekerjaan_ibu" class="custom-control-input" value="Wiraswasta" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Wiraswasta') checked @endif>
                    <label class="custom-control-label" for="wiraswastai">Wiraswasta</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wirausahai" name="pekerjaan_ibu" class="custom-control-input" value="Wirausaha" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Wirausaha') checked @endif>
                    <label class="custom-control-label" for="wirausahai">Wirausaha</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="buruhi" name="pekerjaan_ibu" class="custom-control-input" value="Buruh" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Buruh') checked @endif>
                    <label class="custom-control-label" for="buruhi">Buruh</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pensiuni" name="pekerjaan_ibu" class="custom-control-input" value="Pensiun" @if(old('pekerjaan_ibu',  $siswa->dataPribadi->dataIbu->pekerjaan_ibu) == 'Pensiun') checked @endif>
                    <label class="custom-control-label" for="pensiuni">Pensiun</label>
                </div>
                @error('pekerjaan_ibu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- penghasilan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kecili" name="penghasilan_ibu" class="custom-control-input" checked value="< Rp 500.000"  @if(old('penghasilan_ibu',  $siswa->dataPribadi->dataIbu->penghasilan_ibu) == 'Pens< Rp 500.000iun') checked @endif>
                    <label class="custom-control-label" for="kecili">< Rp 500.000</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="sedangi" name="penghasilan_ibu" class="custom-control-input" value="Rp 500.000 - Rp 999.999"  @if(old('penghasilan_ibu',  $siswa->dataPribadi->dataIbu->penghasilan_ibu) == 'Rp 500.000 - Rp 999.999') checked @endif>
                    <label class="custom-control-label" for="sedangi">Rp 500.000 - Rp 999.999</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lumayani" name="penghasilan_ibu" class="custom-control-input" value="Rp 1.000.000 - Rp 1.999.999"  @if(old('penghasilan_ibu',  $siswa->dataPribadi->dataIbu->penghasilan_ibu) == 'Rp 1.000.000 - Rp 1.999.999') checked @endif>
                    <label class="custom-control-label" for="lumayani">Rp 1.000.000 - Rp 1.999.999</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="menengah" name="penghasilan_ibu" class="custom-control-input" value="Rp 2.000.000 - Rp 4.999.999"  @if(old('penghasilan_ibu',  $siswa->dataPribadi->dataIbu->penghasilan_ibu) == 'Rp 2.000.000 - Rp 4.999.999') checked @endif>
                    <label class="custom-control-label" for="menengah">Rp 2.000.000 - Rp 4.999.999</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="atasi" name="penghasilan_ibu" class="custom-control-input" value="Rp 5.000.000 - Rp 20.000.000"  @if(old('penghasilan_ibu',  $siswa->dataPribadi->dataIbu->penghasilan_ibu) == 'Rp 5.000.000 - Rp 20.000.000') checked @endif>
                    <label class="custom-control-label" for="atasi">Rp 5.000.000 - Rp 20.000.000</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lebihi" name="penghasilan_ibu" class="custom-control-input" value="> Rp 20.000.000"  @if(old('penghasilan_ibu',  $siswa->dataPribadi->dataIbu->penghasilan_ibu) == '> Rp 20.000.000') checked @endif>
                    <label class="custom-control-label" for="lebihi">> Rp 20.000.000</label>
                </div>
                @error('penghasilan_ibu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- berkebutuhan khusus --}}
            <div class="form-group">
                <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tidakb" name="berkebutuhan_khusus_ibu" class="custom-control-input" checked value="Tidak" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Tidak') checked @endif>
                    <label class="custom-control-label" for="tidakb">Tidak</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="netrab" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Netra" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Netra') checked @endif>
                    <label class="custom-control-label" for="netrab">Netra (A)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="rungub" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Rungu" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Rungu') checked @endif>
                    <label class="custom-control-label" for="rungub">Rungu (B)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="grahitarb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Grahita Ringan" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Grahita Ringan') checked @endif>
                    <label class="custom-control-label" for="grahitarb">Grahita Ringan (C)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="grahitasb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Grahita Sedang" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Grahita Sedang') checked @endif>
                    <label class="custom-control-label" for="grahitasb">Grahita Sedang (C1)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="daksarb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Daksa Ringan" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Daksa Ringan') checked @endif>
                    <label class="custom-control-label" for="daksarb">Daksa Ringan (D)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="daksasb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Daksa Sedang" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Daksa Sedang') checked @endif>
                    <label class="custom-control-label" for="daksasb">Daksa Sedang (D1)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="larasb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Laras" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Laras') checked @endif>
                    <label class="custom-control-label" for="larasb">Laras (E)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wicarab" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Wicara" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Wicara') checked @endif>
                    <label class="custom-control-label" for="wicarab">Wicara (F)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tunab" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Tuna Ganda" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Tuna Ganda') checked @endif>
                    <label class="custom-control-label" for="tunab">Tuna Ganda (G)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="hiperb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Hiper Aktif" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Hiper Aktif') checked @endif>
                    <label class="custom-control-label" for="hiperb">Hiper Aktif (H)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="cerdasb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Cerdas Istimewa" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Cerdas Istimewa') checked @endif>
                    <label class="custom-control-label" for="cerdasb">Cerdas Istimewa (I)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="bakatb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Bakat Istimewa" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Bakat Istimewa') checked @endif>
                    <label class="custom-control-label" for="bakatb">Bakat Istimewa (J)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kesulitanb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Kesulitan Belajar" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Kesulitan Belajar') checked @endif>
                    <label class="custom-control-label" for="kesulitanb">Kesulitan Belajar (K)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="narkobab" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Narkoba" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Narkoba') checked @endif>
                    <label class="custom-control-label" for="narkobab">Narkoba (K)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="indigob" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Indigo" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Indigo') checked @endif>
                    <label class="custom-control-label" for="indigob">Indigo (O)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="downb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Down Sindrome" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Down Sindrome') checked @endif>
                    <label class="custom-control-label" for="downb">Down Sindrome (P)</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="autisb" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Autis" @if(old('berkebutuhan_khusus_ibu',  $siswa->dataPribadi->dataIbu->berkebutuhan_khusus_ibu) == 'Autis') checked @endif>
                    <label class="custom-control-label" for="autisb">Autis (Q)</label>
                </div>
                @error('penghasilan_ibu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
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
                <input type="text" class="form-control rounded-0" id="nama-wali" name="nama_wali" value="{{ old('nama_wali', !empty($siswa->dataPribadi->dataWali) ? $siswa->dataPribadi->dataWali->nama_wali : '') }}">
                @error('nama_wali')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- nik --}}
            <div class="form-group">
                <label for="nik-wali">NIK</label>
                <input type="text" class="form-control rounded-0" id="nik-wali" maxlength="16" name="nik_wali" value="{{ old('nik_wali', !empty($siswa->dataPribadi->dataWali) ? $siswa->dataPribadi->dataWali->nik_wali : '') }}">
                @error('nik_wali')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- tahun lahir --}}
            <div class="form-group">
                <label for="tahun-wali">Tahun Lahir</label>
                <input type="text" class="form-control rounded-0" id="tahun-wali" maxlength="4" name="tahun_wali" value="{{ old('tahun_wali', !empty($siswa->dataPribadi->dataWali) ? $siswa->dataPribadi->dataWali->tahun_wali : '') }}">
                @error('tahun_wali')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- pendidikan --}}
            <div class="form-group">
                <label>Pendidikan</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tidak_sekolahw" name="pendidikan_wali" class="custom-control-input" value="Tidak Sekolah" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'Tidak Sekolah' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="tidak_sekolahw">Tidak Sekolah</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="putus-sdw" name="pendidikan_wali" class="custom-control-input" value="Putus SD" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'Putus SD' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="putus-sdw">Putus SD</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="sdw" name="pendidikan_wali" class="custom-control-input" value="SD Sederajat" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'SD Sederajat' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="sdw">SD Sederajat</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="smpw" name="pendidikan_wali" class="custom-control-input" value="SMP Sederajat" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'SMP Sederajat' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="smpw">SMP Sederajat</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="smaw" name="pendidikan_wali" class="custom-control-input" value="SMA Sederajat" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'SMA Sederajat' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="smaw">SMA Sederajat</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="d1w" name="pendidikan_wali" class="custom-control-input" value="D1" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'D1' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="d1w">D1</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="d2w" name="pendidikan_wali" class="custom-control-input" value="D2" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'D2' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="d2w">D2</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="d3w" name="pendidikan_wali" class="custom-control-input" value="D3" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'D3' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="d3w">D3</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="s1w" name="pendidikan_wali" class="custom-control-input" value="S1" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'S1' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="s1w">S1</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="s2w" name="pendidikan_wali" class="custom-control-input" value="S2" {{ old('pendidikan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pendidikan_wali == 'S2' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="s2w">S2</label>
                </div>
                @error('pendidikan_wali')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- pekerjaan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Pekerjaan</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="tidakw" name="pekerjaan_wali" class="custom-control-input" value="Tidak Bekerja" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Tidak Bekerja' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="tidakw">Tidak Bekerja</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="nelayanw" name="pekerjaan_wali" class="custom-control-input" value="Nelayan" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Nelayan' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="nelayanw">Nelayan</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="petaniw" name="pekerjaan_wali" class="custom-control-input" value="Petani" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Petani' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="petaniw">Petani</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="peternakw" name="pekerjaan_wali" class="custom-control-input" value="Peternak" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Peternak' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="peternakw">Peternak</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pnsw" name="pekerjaan_wali" class="custom-control-input" value="PNS/TNI/POLRI" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'PNS/TNI/POLRI' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="pnsw">PNS/TNI/POLRI</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="karyawanw" name="pekerjaan_wali" class="custom-control-input" value="Karyawan Swasta" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Karyawan Swasta' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="karyawanw">Karyawan Swasta</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pedagangkw" name="pekerjaan_wali" class="custom-control-input" value="Pedagang Kecil" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Pedagang Kecil' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="pedagangkw">Pedagang Kecil</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pedagangbw" name="pekerjaan_wali" class="custom-control-input" value="Pedagang Besar" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Pedagang Besar' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="pedagangbw">Pedagang Besar</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wiraswastaw" name="pekerjaan_wali" class="custom-control-input" value="Wiraswasta" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Wiraswasta' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="wiraswastaw">Wiraswasta</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="wirausahaw" name="pekerjaan_wali" class="custom-control-input" value="Wirausaha" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Wirausaha' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="wirausahaw">Wirausaha</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="buruhw" name="pekerjaan_wali" class="custom-control-input" value="Buruh" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Buruh' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="buruhw">Buruh</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pensiunw" name="pekerjaan_wali" class="custom-control-input" value="Pensiun" {{ old('pekerjaan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->pekerjaan_wali == 'Pensiun' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="pensiunw">Pensiun</label>
                </div>
                @error('pendidikan_wali')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- penghasilan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kecilw" name="penghasilan_wali" class="custom-control-input" value="< Rp 500.000" {{ old('penghasilan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->penghasilan_wali == '< Rp 500.000' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="kecilw">< Rp 500.000</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="sedangw" name="penghasilan_wali" class="custom-control-input" value="Rp 500.000 - Rp 999.999" {{ old('penghasilan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->penghasilan_wali == 'Rp 500.000 - Rp 999.999' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="sedangw">Rp 500.000 - Rp 999.999</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lumayanw" name="penghasilan_wali" class="custom-control-input" value="Rp 1.000.000 - Rp 1.999.999" {{ old('penghasilan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->penghasilan_wali == 'Rp 1.000.000 - Rp 1.999.999' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="lumayanw">Rp 1.000.000 - Rp 1.999.999</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="menengahw" name="penghasilan_wali" class="custom-control-input" value="Rp 2.000.000 - Rp 4.999.999" {{ old('penghasilan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->penghasilan_wali == 'Rp 2.000.000 - Rp 4.999.999' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="menengahw">Rp 2.000.000 - Rp 4.999.999</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="atasw" name="penghasilan_wali" class="custom-control-input" value="Rp 5.000.000 - Rp 20.000.000" {{ old('penghasilan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->penghasilan_wali == 'Rp 5.000.000 - Rp 20.000.000' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="atasw">Rp 5.000.000 - Rp 20.000.000</label>
                </div>
                <div class="col-sm-3 custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lebihw" name="penghasilan_wali" class="custom-control-input" value="> Rp 20.000.000" {{ old('penghasilan_wali', !empty($siswa->dataPribadi->dataWali) ? ($siswa->dataPribadi->dataWali->penghasilan_wali == '> Rp 20.000.000' ? 'checked' : '') : '') }}>
                    <label class="custom-control-label" for="lebihw">> Rp 20.000.000</label>
                </div>
                @error('penghasilan_wali')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
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
                <div class="input-group" style="width: 20%;">
                    <input type="number" class="form-control rounded-0 custom-input" id="tinggibdn" name="tinggi_badan" value="{{ old('tinggi_badan', $siswa->dataPribadi->dataPeriodik->tinggi_badan) }}" required>
                    <div class="input-group-append">
                        <span class="input-group-text">Cm</span>
                    </div>
                </div>
                @error('pendidikan_wali')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- Berat Badan --}}
            <div class="form-group">
                <label for="bb">Berat Badan</label>
                <div class="input-group" style="width: 20%;">
                    <input type="number" class="form-control rounded-0 custom-input" id="bb" name="berat_badan" value="{{ old('berat_badan', $siswa->dataPribadi->dataPeriodik->berat_badan) }}" required>
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
                @error('pendidikan_wali')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- Lingkar Kepala --}}
            <div class="form-group">
                <label for="lingkar">Lingkar Kepala</label>
                <div class="input-group" style="width: 20%;">
                    <input type="number" class="form-control rounded-0 custom-input" id="lingkar" maxlength="4" name="lingkar_kepala" value="{{ old('lingkar_kepala', $siswa->dataPribadi->dataPeriodik->lingkar_kepala) }}" required>
                    <div class="input-group-append">
                        <span class="input-group-text">Cm</span>
                    </div>
                </div>
                @error('pendidikan_wali')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- jarak tempat tingal --}}
            <div class="form-group">
                <label for=>Jarak Tempat Tinggal</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kurang1" name="jarak" class="custom-control-input" checked value="Kurang dari 1 Km" @if(old('jarak', $siswa->dataPribadi->dataPeriodik->jarak) == 'Kurang dari 1 Km') checked @endif>
                    <label class="custom-control-label" for="kurang1">Kurang dari 1 Km</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="lebih1" name="jarak" class="custom-control-input" value="Lebih dari 1 Km" @if(old('jarak', $siswa->dataPribadi->dataPeriodik->jarak) == 'Lebih dari 1 Km') checked @endif>
                    <label class="custom-control-label" for="lebih1">Lebih dari 1 Km</label>
                </div>
                @error('jarak')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- jarak dalam Km --}}
            <div class="form-group">
                <label for="km">Jarak</label><br>
                <div class="input-group" style="width: 20%;">
                    <input type="text" class="form-control rounded-0" id="km" name="km" value="{{ old('km', $siswa->dataPribadi->dataPeriodik->km) }}" required>
                    <div class="input-group-append">
                        <span class="input-group-text">Km</span>
                    </div>
                </div>
                <span>*<span><span>Masukan angka jarak dari rumah ke sekolah</span>
                @error('km')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- waktu tempuh --}}
            <div class="form-group">
                <label for="waktu">Waktu Tempuh</label><br>
                <div class="input-group">
                    <div class="input-group" style="width: 20%; margin-right:5%;">
                        <input type="number" class="form-control rounded-0 w-25" id="waktu" name="waktu_tempuh_jam" value="{{ old('waktu_tempuh_jam', $jam) }}" required>
                        <div class="input-group-append">
                            <span class="input-group-text">Jam</span>
                        </div>
                    </div>
                    <div class="input-group" style="width: 20%;">
                        <input type="number" class="form-control rounded-0 w-25" id="waktu" name="waktu_tempuh_menit" value="{{ old('waktu_tempuh_menit', $menit) }}" required>
                        <div class="input-group-append">
                            <span class="input-group-text">Menit</span>
                        </div>
                    </div>
                </div>
                @error('waktu_tempuh_jam')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
                @error('waktu_tempuh_menit')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- jumlah saudara --}}
            <div class="form-group">
                <label for="saudara">Jumlah Saudara Kandung</label><br>
                <input type="number" class="form-control rounded-0" id="saudara" name="jumlah_saudara" value="{{ old('jumlah_saudara', $siswa->dataPribadi->dataPeriodik->jumlah_saudara) }}" required>
                @error('jumlah_saudara')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <!-- Prestasi -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Prestasi</h1> <br>
            <span style="color:red">*</span><span>(Optional) Diisi bila memiliki riwayat prestasi</span>
        </div>
        <div class="card-body">
            @php
                $prestasiCount = $siswa->dataPribadi->dataPrestasi;
            @endphp
            @if($prestasiCount->count() > 0)
            @for ($i=0; $i<3; $i++)
                {{-- prestasi 1 --}}
                <h4>Prestasi {{ $i+1 }}</h6> <br>
                <input type="hidden" name='id_pres{{ $i }}' value="{{ $prestasiCount[$i]->id }}">
                {{-- jenis --}}
                <div class="form-group">
                    <label>Jenis Prestasi</label><br>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="sains{{ $i }}" name="prestasi{{ $i }}jenis_prestasi" class="custom-control-input" value="sains" {{ old('prestasi'.$i.'jenis_prestasi', !empty($prestasiCount[$i]) ? ($prestasiCount[$i]->jenis_prestasi == 'sains' ? 'checked' : '') : '') }}>
                        <label class="custom-control-label" for="sains{{ $i }}">Sains</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="seni{{ $i }}" name="prestasi{{ $i }}jenis_prestasi" class="custom-control-input" value="seni" {{ old('prestasi'.$i.'jenis_prestasi', !empty($prestasiCount[$i]) ? ($prestasiCount[$i]->jenis_prestasi == 'seni' ? 'checked' : '') : '') }}>
                        <label class="custom-control-label" for="seni{{ $i }}">Seni</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="olah raga{{ $i }}" name="prestasi{{ $i }}jenis_prestasi" class="custom-control-input" value="olah raga" {{ old('prestasi'.$i.'jenis_prestasi', !empty($prestasiCount[$i]) ? ($prestasiCount[$i]->jenis_prestasi == 'olah raga' ? 'checked' : '') : '') }}>
                        <label class="custom-control-label" for="olah raga{{ $i }}">Olah Raga</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="lain{{ $i }}" name="prestasi{{ $i }}jenis_prestasi" class="custom-control-input" value="lain-lain" {{ old('prestasi'.$i.'jenis_prestasi', !empty($prestasiCount[$i]) ? ($prestasiCount[$i]->jenis_prestasi == 'lain-lain' ? 'checked' : '') : '') }}>
                        <label class="custom-control-label" for="lain{{ $i }}">Lain-lain</label>
                    </div>
                    @error('prestasi'.$i.'jenis_prestasi')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                    {{-- tingkat --}}
                <div class="form-group">
                    <label for="exampleFormControlPasswor3">Tingkat prestasi</label><br>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="kecamatan{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="kecamatan" {{ old('prestasi'.$i.'tingkat', !empty($prestasiCount[$i]) ? ($prestasiCount[$i]->tingkat == 'kecamatan' ? 'checked' : '') : '') }}>
                        <label class="custom-control-label" for="kecamatan{{ $i }}">Kecamatan</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="kabupaten{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="kabupaten" {{ old('prestasi'.$i.'tingkat', !empty($prestasiCount[$i]) ? ($prestasiCount[$i]->tingkat == 'kabupaten' ? 'checked' : '') : '') }}>
                        <label class="custom-control-label" for="kabupaten{{ $i }}">Kabupaten</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="provinsi{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="provinsi" {{ old('prestasi'.$i.'tingkat', !empty($prestasiCount[$i]) ? ($prestasiCount[$i]->tingkat == 'provinsi' ? 'checked' : '') : '') }}>
                        <label class="custom-control-label" for="provinsi{{ $i }}">Provinsi</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="nasional{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="nasional" {{ old('prestasi'.$i.'tingkat', !empty($prestasiCount[$i]) ? ($prestasiCount[$i]->tingkat == 'nasional' ? 'checked' : '') : '') }}>
                        <label class="custom-control-label" for="nasional{{ $i }}">Nasional</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="internasional{{ $i }}" name="prestasi{{ $i }}tingkat" class="custom-control-input" value="internasional" {{ old('prestasi'.$i.'tingkat', !empty($prestasiCount[$i]) ? ($prestasiCount[$i]->tingkat == 'internasional' ? 'checked' : '') : '') }}>
                        <label class="custom-control-label" for="internasional{{ $i }}">Internasional</label>
                    </div>
                    @error('prestasi'.$i.'tingkat')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                {{-- nama prestasi --}}
                <div class="form-group">
                    <label for="namap{{ $i }}">Nama Prestasi</label>
                    <input type="text" class="form-control rounded-0 @error('prestasi'.$i.'nama_prestasi') is-invalid @enderror" id="namap{{ $i }}" name="prestasi{{ $i }}nama_prestasi" value="{{ old('prestasi'.$i.'nama_prestasi', !empty($prestasiCount[$i]) ? $prestasiCount[$i]->nama_prestasi : '') }}">
                    @error('prestasi'.$i.'nama_prestasi')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                {{-- tahun prestasi --}}
                <div class="form-group">
                    <label for="tahunp{{ $i }}">Tahun Prestasi</label>
                    <input type="number" class="form-control rounded-0 @error('prestasi'.$i.'tahun') is-invalid @enderror" id="tahunp{{ $i }}" maxlength="4" name="prestasi{{ $i }}tahun" value="{{ old('prestasi'.$i.'tahun', !empty($prestasiCount[$i]) ? $prestasiCount[$i]->tahun : '') }}">
                    @error('prestasi'.$i.'tahun')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                {{-- nama penyelenggara --}}
                <div class="form-group">
                    <label for="exampleFormControlPasswor3{{ $i }}">Nama Penyelenggara</label>
                    <input type="text" class="form-control rounded-0" id="exampleFormControlPasswor3{{ $i }}" name="prestasi{{ $i }}penyelenggara" value="{{ old('prestasi'.$i.'penyelenggara', !empty($prestasiCount[$i]) ? $prestasiCount[$i]->penyelenggara : '') }}">
                    @error('prestasi'.$i.'penyelenggara')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <br>
            @endfor
            @endif
        </div>
    </div>

    <!-- Beasiswa -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Beasiswa</h1> <br>
            <span style="color:red">*</span><span>(Optional) Diisi bila memiliki riwayat beasiswa</span>
        </div>
        <div class="card-body">
            @php
                $beasiswaCount = $siswa->dataPribadi->dataBeasiswa;
            @endphp
            @if($beasiswaCount->count() > 0)
            @for($i=0; $i<3; $i++)
                 {{-- beasiswa 1 --}}
                <h4>Beasiswa {{ $i+1 }}</h6> <br>
                {{-- jenis --}}
                <input type="hidden" name="id_bea{{ $i }}" value="{{ $beasiswaCount[$i]->id }}">
                <div class="form-group">
                    <label>Jenis Beasiswa</label><br>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="anak_miskin{{ $i }}" name="beasiswa{{ $i }}jenis_anak_berprestasi" class="custom-control-input" value="anak miskin" {{ old('beasiswa'. $i .'jenis_anak_berprestasi', !empty($beasiswaCount) && ($beasiswaCount[$i]->jenis_anak_berprestasi == 'anak miskin') ? 'checked' : '') }}>
                        <label class="custom-control-label" for="anak_miskin{{ $i }}">Anak miskin</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="pendidikanb{{ $i }}" name="beasiswa{{ $i }}jenis_anak_berprestasi" class="custom-control-input" value="pendidikan" {{ old('beasiswa'. $i .'jenis_anak_berprestasi', !empty($beasiswaCount) && ($beasiswaCount[$i]->jenis_anak_berprestasi == 'pendidikan') ? 'checked' : '') }}>
                        <label class="custom-control-label" for="pendidikanb{{ $i }}">Pendidikan</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="unggulan{{ $i }}" name="beasiswa{{ $i }}jenis_anak_berprestasi" class="custom-control-input" value="unggulan" {{ old('beasiswa'. $i .'jenis_anak_berprestasi', !empty($beasiswaCount) && ($beasiswaCount[$i]->jenis_anak_berprestasi == 'unggulan') ? 'checked' : '') }}>
                        <label class="custom-control-label" for="unggulan{{ $i }}">Unggulan</label>
                    </div>
                    @error('beasiswa{{ $i }}jenis_anak_berprestasi')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                {{-- keterangan beasiswa --}}
                <div class="form-group">
                    <label for="beasiswa{{ $i }}">Nama Beasiswa</label><br>
                    <input type="text" class="form-control rounded-0 @error('beasiswa'.$i.'keterangan') is-invalid @enderror" id="beasiswa{{ $i }}" name="beasiswa{{ $i }}keterangan" value="{{ old('beasiswa'.$i.'keterangan', !empty($beasiswaCount[$i]) ? $beasiswaCount[$i]->keterangan : '') }}">
                    @error('beasiswa'.$i.'keterangan')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                {{-- tahun mulai --}}
                <div class="form-group">
                    <label for="tahunm{{ $i }}">Tahun Mulai</label><br>
                    <input type="text" class="form-control rounded-0 @error('beasiswa'.$i.'tahun_mulai') is-invalid @enderror" id="tahunm{{ $i }}" name="beasiswa{{ $i }}tahun_mulai" value="{{ old('beasiswa'.$i.'tahun_mulai', !empty($beasiswaCount[$i]) ? $beasiswaCount[$i]->tahun_mulai : '') }}">
                    @error('beasiswa'.$i.'tahun_mulai')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                    {{-- tahun berakhir --}}
                <div class="form-group">
                    <label for="tahuns{{ $i }}">Tahun Selesai</label><br>
                    <input type="text" class="form-control rounded-0 @error('beasiswa'.$i.'tahun_selesai') is-invalid @enderror" id="tahuns{{ $i }}" name="beasiswa{{ $i }}tahun_selesai" value="{{ old('beasiswa'.$i.'tahun_selesai', !empty($beasiswaCount[$i]) ? $beasiswaCount[$i]->tahun_selesai : '') }}">
                    @error('beasiswa'.$i.'tahun_selesai')
                        <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <br>
            @endfor
            @endif

        </div>
    </div>

    <!-- kesejahteraan -->
    <div class="card card-default">
        <div class="card-header">
            <h1>Kesejahteraan Peserta Didik</h1> <br>
            <span style="color:red">*</span><span>(Optional)</span>
        </div>
        <div class="card-body">
            {{-- jenis kesejahteraan --}}
            <div class="form-group">
                <label for="exampleFormControlPasswor3">Jenis Kesejahteraan</label><br>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="pkh" name="jenis_kesejahteraan" class="custom-control-input" checked value="PKH" @if(old('jenis_kesejahteraan', $siswa->dataPribadi->kesejahteraan->jenis_kesejahteraan) == 'PKH') checked @endif>
                    <label class="custom-control-label" for="pkh">PKH</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kps" name="jenis_kesejahteraan" class="custom-control-input" value="Kartu Perlindungan Sosial" @if(old('jenis_kesejahteraan', $siswa->dataPribadi->kesejahteraan->jenis_kesejahteraan) == 'Kartu Perlindungan Sosial') checked @endif>
                    <label class="custom-control-label" for="kps">Kartu Perlindungan Sosial</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kks" name="jenis_kesejahteraan" class="custom-control-input" value="Kartu Keluarg Sehat" @if(old('jenis_kesejahteraan', $siswa->dataPribadi->kesejahteraan->jenis_kesejahteraan) == 'Kartu Keluarg Sehat') checked @endif>
                    <label class="custom-control-label" for="kks">Kartu Keluarg Sehat</label>
                </div>
                <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                    <input type="radio" id="kkes" name="jenis_kesejahteraan" class="custom-control-input" value="Kartu Kesehatan" @if(old('jenis_kesejahteraan', $siswa->dataPribadi->kesejahteraan->jenis_kesejahteraan) == 'Kartu Kesehatan') checked @endif>
                    <label class="custom-control-label" for="kkes">Kartu Kesehatan</label>
                </div>
                @error('jenis_kesejahteraan')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- No Kartu --}}
            <div class="form-group">
                <label for="no_kartuKkes">No. Kartu</label>
                <input type="number" class="form-control rounded-0" id="no_kartuKkes" name="no_kartu" value="{{ old('no_kartu', $siswa->dataPribadi->kesejahteraan->no_kartu) }}" required>
                @error('no_kartu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- Nama kartu --}}
            <div class="form-group">
                <label for="nama_kartuKes">Nama Kartu</label>
                <input type="text" class="form-control rounded-0" id="nama_kartuKes" name="nama_sejahtera" value="{{ old('nama_sejahtera', $siswa->dataPribadi->kesejahteraan->nama_sejahtera) }}" required>
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
                {{-- <input type="file" class="form-control-file" id="scan_kk" name="file_kk" value="{{ old('file_kk', $siswa->dataPribadi->file->file_kk) }}">
                <p>{{$siswa->dataPribadi->file->file_kk}}</p> --}}
                <input type="file" id="scan_kk" class="dropify" data-height="300" name="file_kk" data-default-file="{{ old('file_kk', asset('storage/'.$siswa->dataPribadi->file->file_kk)) }}" data-allowed-file-extensions="pdf" value="{{ old('file_kk', asset('storage/'.$siswa->dataPribadi->file->file_kk)) }}" />
                @error('file_kk')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- file akta --}}
            <div class="form-group">
                <label for="scan_akta">Scan Kartu Akta Kelahiran</label>
                {{-- <input type="file" class="form-control-file" id="scan_akta" name="file_akta_kelahiran" value="{{ old('file_akta_kelahiran', $siswa->dataPribadi->file->file_akta_kelahiran) }}"> --}}
                <input type="file" id="scan_akta" class="dropify" data-height="300" name="file_akta_kelahiran" data-default-file="{{ old('file_akta_kelahiran', asset('storage/'.$siswa->dataPribadi->file->file_akta_kelahiran)) }}" data-allowed-file-extensions="pdf" value="{{ old('file_akta_kelahiran', asset('storage/'.$siswa->dataPribadi->file->file_akta_kelahiran)) }}" />
                @error('file_akta_kelahiran')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- file ktp ortu --}}
            <div class="form-group">
                <label for="scan_ktp">Scan Kartu Akta Kelahiran</label>
                {{-- <input type="file" class="form-control-file" id="scan_ktp" name="file_ktp_ortu" value="{{ old('file_ktp_ortu', $siswa->dataPribadi->file->file_ktp_ortu) }}"> --}}
                <input type="file" id="scan_ktp" class="dropify" data-height="300" name="file_ktp_ortu" data-default-file="{{ old('file_ktp_ortu', asset('storage/'.$siswa->dataPribadi->file->file_ktp_ortu)) }}" data-allowed-file-extensions="pdf" {{ old('file_kk', asset('storage/'.$siswa->dataPribadi->file->file_ktp_ortu)) }} />
                @error('file_ktp_ortu')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- file ijazah tk --}}
            <div class="form-group">
                <label for="scan_ijazah">Scan Ijazah TK</label>
                {{-- <input type="file" class="form-control-file" id="scan_ijazah" name="file_ijazah_tk" value="{{ old('file_ijazah_tk', $siswa->dataPribadi->file->file_ijazah_tk) }}"> --}}
                <input type="file" id="scan_ijazah" class="dropify" data-height="300" name="file_ijazah_tk" data-default-file="{{ old('file_ijazah_tk', asset('storage/'.$siswa->dataPribadi->file->file_ijazah_tk)) }}" data-allowed-file-extensions="pdf" {{ old('file_kk', asset('storage/'.$siswa->dataPribadi->file->file_ijazah_tk)) }} />
                @error('file_ijazah_tk')
                    <span class="mt-2 d-block" style="color:red;">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Kirim Data Siswa</button>
</form>
