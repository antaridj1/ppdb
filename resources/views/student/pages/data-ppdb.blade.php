<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
@include('student.components.cssadmin')

  <script src="plugins/nprogress/nprogress.js"></script>
</head>
<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>
    <div class="wrapper">
        @include('student.pages.components.sidebar')
        <div class="page-wrapper">
            @include('student.pages.components.header')

            <!-- ====================================
            ——— CONTENT WRAPPER
            ===================================== -->
            <div class="content-wrapper">
                <div class="content"><!-- For Components documentaion -->
                    <div class="card card-default">
                        <div class="px-6 py-4">
                            <p>Isi formuir Pendaftaran Peserta Didik Baru berikut sesuai dengan data siswa yang akan didaftarkan. Upload berkas-berkas yang diperlukan</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <!-- Form Data Pribadi -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Data Pribadi</h1>
                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                    @csrf
                                        {{-- nama lengkap ppdb --}}
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" class="form-control rounded-0" id="nama_lengkap">
                                        </div>
                                        {{-- gender --}}
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label> <br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="laki-laki" name="gender" class="custom-control-input" value="laki-laki">
                                                <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="perempuan" name="gender" class="custom-control-input" value="perempuan">
                                                <label class="custom-control-label" for="perempuan">Perempuan</label>
                                            </div>
                                            {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                                        </div>
                                        {{-- nisn --}}
                                        <div class="form-group">
                                            <label for="nisn">NISN</label>
                                            <input type="number" name="nisn" class="form-control rounded-0" id="nisn" maxlength="10">
                                        </div>
                                        {{-- nik --}}
                                        <div class="form-group">
                                            <label for="nik">NIK/No. KITAS (Untuk WNA)</label>
                                            <input type="number" name="nik" class="form-control rounded-0" id="nik" maxlength="16">
                                        </div>
                                        {{-- kk --}}
                                        <div class="form-group">
                                            <label for="kk">No. KK</label>
                                            <input type="number" name="kk" class="form-control rounded-0" id="kk">
                                        </div>
                                        {{-- tempat lahir --}}
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control rounded-0" id="tempat_lahir">
                                        </div>
                                        {{-- tgl. lahir --}}
                                        <div class="form-group">
                                            <label for="tgl_lahir">Tgl. Lahir</label>
                                            <input type="date" name="tgl_lahir" class="form-control rounded-0" id="tgl_lahir">
                                        </div>
                                        {{-- akta kelahiran --}}
                                        <div class="form-group">
                                            <label for="akta_kelahiran">No. Registrasi Akta Kelahiran</label>
                                            <input type="number" name="akta_kelahiran" class="form-control rounded-0" id="akta_kelahiran">
                                            <div id="calendar"></div>
                                        </div>
                                        {{-- agama --}}
                                        <div class="form-group">
                                            <label>Agama dan Kepercayaan</label> <br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="islam" name="agama" class="custom-control-input" value="Islam">
                                                <label class="custom-control-label" for="islam">Islam</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kristen" name="agama" class="custom-control-input" value="Kristen/Protestan">
                                                <label class="custom-control-label" for="kristen">Kristen/Protestan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="khatolik" name="agama" class="custom-control-input" value="Khatolik">
                                                <label class="custom-control-label" for="khatolik">Khatolik</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="hindu" name="agama" class="custom-control-input" value="Hindu">
                                                <label class="custom-control-label" for="hindu">Hindu</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="budha" name="agama" class="custom-control-input" value="Budha">
                                                <label class="custom-control-label" for="budha">Budha</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="konghucu" name="agama" class="custom-control-input" value="Konghucu">
                                                <label class="custom-control-label" for="konghucu">Konghucu</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="yme" name="agama" class="custom-control-input" value="Percaya kepada Tuhan YME">
                                                <label class="custom-control-label" for="yme">Percaya kepada Tuhan YME</label>
                                            </div>
                                        </div>
                                        {{-- kewarganegaraan --}}
                                        <div class="form-group">
                                            <label>Kewarganegaraan</label> <br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wni" name="kewarganegaraan" class="custom-control-input" value="WNI">
                                                <label class="custom-control-label" for="wni">Indonesia (WNI)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wna" name="kewarganegaraan" class="custom-control-input" value="WNA">
                                                <label class="custom-control-label" for="wna">Asing (WNA)</label>
                                            </div>
                                            <input type="text" class="form-control rounded-0" name="negara" id="exampleFormControlInput4" placeholder="Negara" value="">
                                            <span class="mt-2 d-block"><span style="color:red;">*</span>Isi apabila WNA</span>
                                        </div>
                                        {{-- berkebutuhan khusus --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak" name="berkebutuhan_khusus" class="custom-control-input" value="Tidak">
                                                <label class="custom-control-label" for="tidak">Tidak</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="netra" name="berkebutuhan_khusus" class="custom-control-input" value="Netra">
                                                <label class="custom-control-label" for="netra">Netra (A)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="rungu" name="berkebutuhan_khusus" class="custom-control-input" value="Rungu">
                                                <label class="custom-control-label" for="rungu">Rungu (B)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="grahitar" name="berkebutuhan_khusus" class="custom-control-input" value="Grahita Ringan">
                                                <label class="custom-control-label" for="grahitar">Grahita Ringan (C)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="grahitas" name="berkebutuhan_khusus" class="custom-control-input" value="Grahita Sedang">
                                                <label class="custom-control-label" for="grahitas">Grahita Sedang (C1)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="daksar" name="berkebutuhan_khusus" class="custom-control-input" value="Daksa Ringan">
                                                <label class="custom-control-label" for="daksar">Daksa Ringan (D)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="daksas" name="berkebutuhan_khusus" class="custom-control-input" value="Daksa Sedang">
                                                <label class="custom-control-label" for="daksas">Daksa Sedang (D1)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="laras" name="berkebutuhan_khusus" class="custom-control-input" value="Laras">
                                                <label class="custom-control-label" for="laras">Laras (E)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wicara" name="berkebutuhan_khusus" class="custom-control-input" value="Wicara">
                                                <label class="custom-control-label" for="wicara">Wicara (F)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tuna" name="berkebutuhan_khusus" class="custom-control-input" value="Tuna Ganda">
                                                <label class="custom-control-label" for="tuna">Tuna Ganda (G)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="hiper" name="berkebutuhan_khusus" class="custom-control-input" value="Hiper Aktif">
                                                <label class="custom-control-label" for="hiper">Hiper Aktif (H)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="cerdas" name="berkebutuhan_khusus" class="custom-control-input" value="Cerdas Istimewa">
                                                <label class="custom-control-label" for="cerdas">Cerdas Istimewa (I)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="bakat" name="berkebutuhan_khusus" class="custom-control-input" value="Bakat Istimewa">
                                                <label class="custom-control-label" for="bakat">Bakat Istimewa (J)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kesulitan" name="berkebutuhan_khusus" class="custom-control-input" value="Kesulitan Belajar">
                                                <label class="custom-control-label" for="kesulitan">Kesulitan Belajar (K)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="narkoba" name="berkebutuhan_khusus" class="custom-control-input" value="Narkoba">
                                                <label class="custom-control-label" for="narkoba">Narkoba (K)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="indigo" name="berkebutuhan_khusus" class="custom-control-input" value="Indigo">
                                                <label class="custom-control-label" for="indigo">Indigo (O)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="down" name="berkebutuhan_khusus" class="custom-control-input" value="Down Sindrome">
                                                <label class="custom-control-label" for="down">Down Sindrome (P)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="autis" name="berkebutuhan_khusus" class="custom-control-input" value="Autis">
                                                <label class="custom-control-label" for="autis">Autis (Q)</label>
                                            </div>
                                        </div>
                                        {{-- alamat --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        {{-- RT --}}
                                        <div class="form-group">
                                            <label for="rt">RT</label>
                                            <input type="number" class="form-control rounded-0" name="rt" maxlength="3" id="rt">
                                            <span class="mt-2 d-block"><span style="color:red;">*</span>masukan 3 digit angka, misal 001</span>
                                        </div>
                                        {{-- RW --}}
                                        <div class="form-group">
                                            <label for="rw">RW</label>
                                            <input type="number" class="form-control rounded-0" name="rw" maxlength="3" id="rw">
                                            <span class="mt-2 d-block"><span style="color:red;">*</span>masukan 3 digit angka, misal 001</span>
                                        </div>
                                        {{-- dusun --}}
                                        <div class="form-group">
                                            <label for="dusun">Dusun</label>
                                            <input type="text" class="form-control rounded-0" name="dusun" id="dusun">
                                        </div>
                                        {{-- kelurahan --}}
                                        <div class="form-group">
                                            <label for="kelurahan">Kelurahan/Desa</label>
                                            <input type="text" class="form-control rounded-0" name="kelurahan" id="kelurahan">
                                        </div>
                                        {{-- kecamatan --}}
                                        <div class="form-group">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" class="form-control rounded-0" name="kecamatan" id="kecamatan">
                                        </div>
                                        {{-- kode pos --}}
                                        <div class="form-group">
                                            <label for="kode_pos">Kode Pos</label>
                                            <input type="number" class="form-control rounded-0" name="kode_pos" id="kode_pos">
                                        </div>
                                        {{-- lintang --}}
                                        <div class="form-group">
                                            <label for="lintang">lintan</label>
                                            <input type="text" class="form-control rounded-0" name="lintang" id="lintang">
                                        </div>
                                        {{-- bujur --}}
                                        <div class="form-group">
                                            <label for="bujur">Bujur</label>
                                            <input type="text" class="form-control rounded-0" name="bujur" id="bujur">
                                        </div>
                                        {{-- tempat tinga; --}}
                                        <div class="form-group">
                                            <label>Tempat Tinggal</label> <br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="ortu" name="tempat_tinggal" class="custom-control-input" value="ersama orang tua">
                                                <label class="custom-control-label" for="ortu">Bersama orang tua</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wali" name="tempat_tinggal" class="custom-control-input" value="waWalili">
                                                <label class="custom-control-label" for="wali">Wali</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kos" name="tempat_tinggal" class="custom-control-input" value="Kos">
                                                <label class="custom-control-label" for="kos">Kos</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="asrama" name="tempat_tinggal" class="custom-control-input" value="Asrama">
                                                <label class="custom-control-label" for="asrama">Asrama</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="panti" name="tempat_tinggal" class="custom-control-input" value="Panti Asuhan">
                                                <label class="custom-control-label" for="panti">Panti Asuhan</label>
                                            </div>
                                        </div>
                                        {{-- moda transport --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Moda Transportasi</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="jalan" name="moda_transportasi" class="custom-control-input" value="Jalan kaki">
                                                <label class="custom-control-label" for="jalan">Jalan kaki</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kendaraan" name="moda_transportasi" class="custom-control-input" value="Kendaraan pribadi">
                                                <label class="custom-control-label" for="kendaraan">Kendaraan pribadi</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="umum" name="moda_transportasi" class="custom-control-input" value="Kendaraan umum">
                                                <label class="custom-control-label" for="umum">Kendaraan umum</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="jemput" name="moda_transportasi" class="custom-control-input" value="Jemputan sekolah">
                                                <label class="custom-control-label" for="jemput">Jemputan sekolah</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kereta" name="moda_transportasi" class="custom-control-input" value="Kereta api">
                                                <label class="custom-control-label" for="kereta">Kereta api</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="ojek" name="moda_transportasi" class="custom-control-input" value="Ojek">
                                                <label class="custom-control-label" for="ojek">Ojek</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="becak" name="moda_transportasi" class="custom-control-input" value="Becak">
                                                <label class="custom-control-label" for="becak">Becak</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="penyebrangan" name="moda_transportasi" class="custom-control-input" value="Perahu penyebrangan">
                                                <label class="custom-control-label" for="penyebrangan">Perahu penyebrangan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lainnya" name="moda_transportasi" class="custom-control-input" value="Lainnya">
                                                <label class="custom-control-label" for="lainnya">lainnya</label>
                                            </div>
                                        </div>
                                        {{-- anak ke --}}
                                        <div class="form-group">
                                            <label for="anak-ke">Anak keberapa</label>
                                            <input type="number" class="form-control rounded-0" id="anak-ke" name="anak_ke">
                                        </div>
                                        {{-- KIP --}}
                                        <div class="form-group">
                                            <label>Memiliki KIP</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="oke" name="kip" class="custom-control-input" value="iya">
                                                <label class="custom-control-label" for="oke">Iya</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="no" name="kip" class="custom-control-input" value="tidak">
                                                <label class="custom-control-label" for="no">Tidak</label>
                                            </div>
                                        </div>
                                        {{-- menerima kip --}}
                                        <div class="form-group">
                                            <label>Apakah peserta didik tetap menerima KIP</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kip-y" name="menerima_kip" class="custom-control-input" value="iya">
                                                <label class="custom-control-label" for="kip-y">Iya</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kip-n" name="menerima_kip" class="custom-control-input" value="tidak">
                                                <label class="custom-control-label" for="kip-n">Tidak</label>
                                            </div>
                                        </div>
                                        {{-- PIP --}}
                                        <div class="form-group">
                                            <label>Alasan menolak PIP</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="dilarang-pemda" name="pip" class="custom-control-input" value="Menerima bantuan serupa">
                                                <label class="custom-control-label" for="dilarang-pemda">Dilarang pemda karena menerima bantuan serupa</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="menolak" name="pip" class="custom-control-input" value="Menolak">
                                                <label class="custom-control-label" for="menolak">Menolak</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sudah_mampu" name="pip" class="custom-control-input" value="Sudah mampu">
                                                <label class="custom-control-label" for="sudah_mampu">Sudah mampu</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Kirim data</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Form Data Ayah Kandung -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Data Ayah Kandung</h1>
                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- nama --}}
                                        <div class="form-group">
                                            <label for="nama_ayah">Nama Ayah</label>
                                            <input type="text" class="form-control rounded-0" id="nama_ayah" name="nama_ayah">
                                        </div>
                                        {{-- nik ayah --}}
                                        <div class="form-group">
                                            <label for="nik_ayah">NIK</label>
                                            <input type="number" class="form-control rounded-0" id="nik_ayah" name="nik_ayah">
                                        </div>
                                        {{-- tahun lahir --}}
                                        <div class="form-group">
                                            <label for="tahun_ayah">Tahun Lahir</label>
                                            <input type="number" class="form-control rounded-0" id="tahun_ayah" maxlength="4" name="tahun_ayah">
                                        </div>
                                        {{-- pendidikan --}}
                                        <div class="form-group">
                                            <label>Pendidikan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak_sekolah" name="pendidikan_ayah" class="custom-control-input" value="Tidak Sekolah">
                                                <label class="custom-control-label" for="tidak_sekolah">Tidak Sekolah</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="putus-sd" name="pendidikan_ayah" class="custom-control-input" value="Putus SD">
                                                <label class="custom-control-label" for="putus-sd">Putus SD</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sd" name="pendidikan_ayah" class="custom-control-input" value="SD Sederajat">
                                                <label class="custom-control-label" for="sd">SD Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="smp" name="pendidikan_ayah" class="custom-control-input" value="SMP Sederajat">
                                                <label class="custom-control-label" for="smp">SMP Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sma" name="pendidikan_ayah" class="custom-control-input" value="SMA Sederajat">
                                                <label class="custom-control-label" for="sma">SMA Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d1" name="pendidikan_ayah" class="custom-control-input" value="D1">
                                                <label class="custom-control-label" for="d1">D1</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d2" name="pendidikan_ayah" class="custom-control-input" value="D2">
                                                <label class="custom-control-label" for="d2">D2</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d3" name="pendidikan_ayah" class="custom-control-input" value="D3">
                                                <label class="custom-control-label" for="d3">D3</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="s1" name="pendidikan_ayah" class="custom-control-input" value="S1">
                                                <label class="custom-control-label" for="s1">S1</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="s2" name="pendidikan_ayah" class="custom-control-input" value="S2">
                                                <label class="custom-control-label" for="s2">S2</label>
                                            </div>
                                        </div>
                                        {{-- pekerjaan --}}
                                        <div class="form-group">
                                            <label>Pekerjaan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak" name="pekerjaan_ayah" class="custom-control-input" value="Tidak Bekerja">
                                                <label class="custom-control-label" for="tidak">Tidak Bekerja</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="nelayan" name="pekerjaan_ayah" class="custom-control-input" value="Nelayan">
                                                <label class="custom-control-label" for="nelayan">Nelayan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="petani" name="pekerjaan_ayah" class="custom-control-input" value="Petani">
                                                <label class="custom-control-label" for="petani">Petani</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="peternak" name="pekerjaan_ayah" class="custom-control-input" value="Peternak">
                                                <label class="custom-control-label" for="peternak">Peternak</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pns" name="pekerjaan_ayah" class="custom-control-input" value="PNS/TNI/POLRI">
                                                <label class="custom-control-label" for="pns">PNS/TNI/POLRI</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="karyawan" name="pekerjaan_ayah" class="custom-control-input" value="Karyawan Swasta">
                                                <label class="custom-control-label" for="karyawan">Karyawan Swasta</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pedagangk" name="pekerjaan_ayah" class="custom-control-input" value="Pedagang Kecil">
                                                <label class="custom-control-label" for="pedagangk">Pedagang Kecil</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pedagangb" name="pekerjaan_ayah" class="custom-control-input" value="Pedagang Besar">
                                                <label class="custom-control-label" for="pedagangb">Pedagang Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wiraswasta" name="pekerjaan_ayah" class="custom-control-input" value="Wiraswasta">
                                                <label class="custom-control-label" for="wiraswasta">Wiraswasta</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wirausaha" name="pekerjaan_ayah" class="custom-control-input" value="Wirausaha">
                                                <label class="custom-control-label" for="wirausaha">Wirausaha</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="buruh" name="pekerjaan_ayah" class="custom-control-input" value="buruh">
                                                <label class="custom-control-label" for="buruh">Buruh</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pensiun" name="pekerjaan_ayah" class="custom-control-input" value="pensiun">
                                                <label class="custom-control-label" for="pensiun">Pensiun</label>
                                            </div>
                                        </div>
                                        {{-- penghasilan --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kecil" name="penghasilan_ayah" class="custom-control-input" value="< Rp 500.000">
                                                <label class="custom-control-label" for="kecil">< Rp 500.000</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sedang" name="penghasilan_ayah" class="custom-control-input" value="Rp 500.000 - Rp 999.999">
                                                <label class="custom-control-label" for="sedang">Rp 500.000 - Rp 999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lumayan" name="penghasilan_ayah" class="custom-control-input" value="Rp 1.000.000 - Rp 1.999.999">
                                                <label class="custom-control-label" for="lumayan">Rp 1.000.000 - Rp 1.999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="menengah" name="penghasilan_ayah" class="custom-control-input" value="Rp 2.000.000 - Rp 4.999.999">
                                                <label class="custom-control-label" for="menengah">Rp 2.000.000 - Rp 4.999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="atas" name="penghasilan_ayah" class="custom-control-input" value="Rp 5.000.000 - Rp 20.000.000">
                                                <label class="custom-control-label" for="atas">Rp 5.000.000 - Rp 20.000.000</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lebih" name="penghasilan_ayah" class="custom-control-input" value="> Rp 20.000.000">
                                                <label class="custom-control-label" for="lebih">> Rp 20.000.000</label>
                                            </div>
                                        </div>
                                        {{-- berkebutuhan khusus --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Tidak">
                                                <label class="custom-control-label" for="tidak">Tidak</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="netra" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Netra">
                                                <label class="custom-control-label" for="netra">Netra (A)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="rungu" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Rungu">
                                                <label class="custom-control-label" for="rungu">Rungu (B)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="grahitar" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Grahita Ringan">
                                                <label class="custom-control-label" for="grahitar">Grahita Ringan (C)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="grahitas" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Grahita Sedang">
                                                <label class="custom-control-label" for="grahitas">Grahita Sedang (C1)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="daksar" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Daksa Ringan">
                                                <label class="custom-control-label" for="daksar">Daksa Ringan (D)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="daksas" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Daksa Sedang">
                                                <label class="custom-control-label" for="daksas">Daksa Sedang (D1)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="laras" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Laras">
                                                <label class="custom-control-label" for="laras">Laras (E)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wicara" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Wicara">
                                                <label class="custom-control-label" for="wicara">Wicara (F)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tuna" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Tuna Ganda">
                                                <label class="custom-control-label" for="tuna">Tuna Ganda (G)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="hiper" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Hiper Aktif">
                                                <label class="custom-control-label" for="hiper">Hiper Aktif (H)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="cerdas" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Cerdas Istimewa">
                                                <label class="custom-control-label" for="cerdas">Cerdas Istimewa (I)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="bakat" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Bakat Istimewa">
                                                <label class="custom-control-label" for="bakat">Bakat Istimewa (J)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kesulitan" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Kesulitan Belajar">
                                                <label class="custom-control-label" for="kesulitan">Kesulitan Belajar (K)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="narkoba" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Narkoba">
                                                <label class="custom-control-label" for="narkoba">Narkoba (K)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="indigo" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Indigo">
                                                <label class="custom-control-label" for="indigo">Indigo (O)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="down" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Down Sindrome">
                                                <label class="custom-control-label" for="down">Down Sindrome (P)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="autis" name="berkebutuhan_khusus_ayah" class="custom-control-input" value="Autis">
                                                <label class="custom-control-label" for="autis">Autis (Q)</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Kirim data</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Form Data Ibu Kandung -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Data Ibu Kandung</h1>

                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- nama --}}
                                        <div class="form-group">
                                            <label for="nama_ibu">Nama Ibu</label>
                                            <input type="text" class="form-control rounded-0" id="nama_ibu" name="nama_ibu">
                                        </div>
                                        {{-- nik --}}
                                        <div class="form-group">
                                            <label for="nik-ibu">NIK</label>
                                            <input type="number" class="form-control rounded-0" id="nik-ibu" name="nik_ibu">
                                        </div>
                                        {{-- tahun lahir --}}
                                        <div class="form-group">
                                            <label for="tahun-ibu">Tahun Lahir</label>
                                            <input type="number" class="form-control rounded-0" id="tahun-ibu" maxlength="4" name="tahun_ibu">
                                        </div>
                                        {{-- pendidikan --}}
                                        <div class="form-group">
                                            <label>Pendidikan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak_sekolah" name="pendidikan_ibu" class="custom-control-input" value="Tidak Sekolah">
                                                <label class="custom-control-label" for="tidak_sekolah">Tidak Sekolah</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="putus-sd" name="pendidikan_ibu" class="custom-control-input" value="Putus SD">
                                                <label class="custom-control-label" for="putus-sd">Putus SD</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sd" name="pendidikan_ibu" class="custom-control-input" value="SD Sederajat">
                                                <label class="custom-control-label" for="sd">SD Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="smp" name="pendidikan_ibu" class="custom-control-input" value="SMP Sederajat">
                                                <label class="custom-control-label" for="smp">SMP Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sma" name="pendidikan_ibu" class="custom-control-input" value="SMA Sederajat">
                                                <label class="custom-control-label" for="sma">SMA Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d1" name="pendidikan_ibu" class="custom-control-input" value="D1">
                                                <label class="custom-control-label" for="d1">D1</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d2" name="pendidikan_ibu" class="custom-control-input" value="D2">
                                                <label class="custom-control-label" for="d2">D2</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d3" name="pendidikan_ibu" class="custom-control-input" value="D3">
                                                <label class="custom-control-label" for="d3">D3</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="s1" name="pendidikan_ibu" class="custom-control-input" value="S1">
                                                <label class="custom-control-label" for="s1">S1</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="s2" name="pendidikan_ibu" class="custom-control-input" value="S2">
                                                <label class="custom-control-label" for="s2">S2</label>
                                            </div>
                                        </div>
                                        {{-- pekerjaan --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Pekerjaan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak" name="pekerjaan_ibu" class="custom-control-input" value="Tidak Bekerja">
                                                <label class="custom-control-label" for="tidak">Tidak Bekerja</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="nelayan" name="pekerjaan_ibu" class="custom-control-input" value="Nelayan">
                                                <label class="custom-control-label" for="nelayan">Nelayan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="petani" name="pekerjaan_ibu" class="custom-control-input" value="Petani">
                                                <label class="custom-control-label" for="petani">Petani</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="peternak" name="pekerjaan_ibu" class="custom-control-input" value="Peternak">
                                                <label class="custom-control-label" for="peternak">Peternak</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pns" name="pekerjaan_ibu" class="custom-control-input" value="PNS/TNI/POLRI">
                                                <label class="custom-control-label" for="pns">PNS/TNI/POLRI</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="karyawan" name="pekerjaan_ibu" class="custom-control-input" value="Karyawan Swasta">
                                                <label class="custom-control-label" for="karyawan">Karyawan Swasta</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pedagangk" name="pekerjaan_ibu" class="custom-control-input" value="Pedagang Kecil">
                                                <label class="custom-control-label" for="pedagangk">Pedagang Kecil</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pedagangb" name="pekerjaan_ibu" class="custom-control-input" value="Pedagang Besar">
                                                <label class="custom-control-label" for="pedagangb">Pedagang Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wiraswasta" name="pekerjaan_ibu" class="custom-control-input" value="Wiraswasta">
                                                <label class="custom-control-label" for="wiraswasta">Wiraswasta</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wirausaha" name="pekerjaan_ibu" class="custom-control-input" value="Wirausaha">
                                                <label class="custom-control-label" for="wirausaha">Wirausaha</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="buruh" name="pekerjaan_ibu" class="custom-control-input" value="buruh">
                                                <label class="custom-control-label" for="buruh">Buruh</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pensiun" name="pekerjaan_ibu" class="custom-control-input" value="pensiun">
                                                <label class="custom-control-label" for="pensiun">Pensiun</label>
                                            </div>
                                        </div>
                                        {{-- penghasilan --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kecil" name="penghasilan_ibu" class="custom-control-input" value="< Rp 500.000">
                                                <label class="custom-control-label" for="kecil">< Rp 500.000</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sedang" name="penghasilan_ibu" class="custom-control-input" value="Rp 500.000 - Rp 999.999">
                                                <label class="custom-control-label" for="sedang">Rp 500.000 - Rp 999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lumayan" name="penghasilan_ibu" class="custom-control-input" value="Rp 1.000.000 - Rp 1.999.999">
                                                <label class="custom-control-label" for="lumayan">Rp 1.000.000 - Rp 1.999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="menengah" name="penghasilan_ibu" class="custom-control-input" value="Rp 2.000.000 - Rp 4.999.999">
                                                <label class="custom-control-label" for="menengah">Rp 2.000.000 - Rp 4.999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="atas" name="penghasilan_ibu" class="custom-control-input" value="Rp 5.000.000 - Rp 20.000.000">
                                                <label class="custom-control-label" for="atas">Rp 5.000.000 - Rp 20.000.000</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lebih" name="penghasilan_ibu" class="custom-control-input" value="> Rp 20.000.000">
                                                <label class="custom-control-label" for="lebih">> Rp 20.000.000</label>
                                            </div>
                                        </div>
                                        {{-- berkebutuhan khusus --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlInput44">Berkebutuhan Khusus</label> <br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Tidak">
                                                <label class="custom-control-label" for="tidak">Tidak</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="netra" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Netra">
                                                <label class="custom-control-label" for="netra">Netra (A)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="rungu" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Rungu">
                                                <label class="custom-control-label" for="rungu">Rungu (B)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="grahitar" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Grahita Ringan">
                                                <label class="custom-control-label" for="grahitar">Grahita Ringan (C)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="grahitas" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Grahita Sedang">
                                                <label class="custom-control-label" for="grahitas">Grahita Sedang (C1)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="daksar" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Daksa Ringan">
                                                <label class="custom-control-label" for="daksar">Daksa Ringan (D)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="daksas" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Daksa Sedang">
                                                <label class="custom-control-label" for="daksas">Daksa Sedang (D1)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="laras" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Laras">
                                                <label class="custom-control-label" for="laras">Laras (E)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wicara" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Wicara">
                                                <label class="custom-control-label" for="wicara">Wicara (F)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tuna" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Tuna Ganda">
                                                <label class="custom-control-label" for="tuna">Tuna Ganda (G)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="hiper" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Hiper Aktif">
                                                <label class="custom-control-label" for="hiper">Hiper Aktif (H)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="cerdas" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Cerdas Istimewa">
                                                <label class="custom-control-label" for="cerdas">Cerdas Istimewa (I)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="bakat" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Bakat Istimewa">
                                                <label class="custom-control-label" for="bakat">Bakat Istimewa (J)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kesulitan" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Kesulitan Belajar">
                                                <label class="custom-control-label" for="kesulitan">Kesulitan Belajar (K)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="narkoba" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Narkoba">
                                                <label class="custom-control-label" for="narkoba">Narkoba (K)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="indigo" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Indigo">
                                                <label class="custom-control-label" for="indigo">Indigo (O)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="down" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Down Sindrome">
                                                <label class="custom-control-label" for="down">Down Sindrome (P)</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="autis" name="berkebutuhan_khusus_ibu" class="custom-control-input" value="Autis">
                                                <label class="custom-control-label" for="autis">Autis (Q)</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Kirim data</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Form Data Wali -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Data Wali</h1> <br>
                                    <span style="color:red">*</span><span>(Optional) Diisi bila memiliki wali</span>
                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- nama --}}
                                        <div class="form-group">
                                            <label for="nama-wali">Nama Wali</label>
                                            <input type="text" class="form-control rounded-0" id="nama-wali" name="nama_wali">
                                        </div>
                                        {{-- nik --}}
                                        <div class="form-group">
                                            <label for="nik-wali">NIK</label>
                                            <input type="number" class="form-control rounded-0" id="nik-wali" name="nik_wali">
                                        </div>
                                        {{-- tahun lahir --}}
                                        <div class="form-group">
                                            <label for="tahun-wali">Tahun Lahir</label>
                                            <input type="number" class="form-control rounded-0" id="tahun-wali" maxlength="4" name="tahun_wali">
                                        </div>
                                        {{-- pendidikan --}}
                                        <div class="form-group">
                                            <label>Pendidikan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak_sekolah" name="pendidikan_wali" class="custom-control-input" value="Tidak Sekolah">
                                                <label class="custom-control-label" for="tidak_sekolah">Tidak Sekolah</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="putus-sd" name="pendidikan_wali" class="custom-control-input" value="Putus SD">
                                                <label class="custom-control-label" for="putus-sd">Putus SD</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sd" name="pendidikan_wali" class="custom-control-input" value="SD Sederajat">
                                                <label class="custom-control-label" for="sd">SD Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="smp" name="pendidikan_wali" class="custom-control-input" value="SMP Sederajat">
                                                <label class="custom-control-label" for="smp">SMP Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sma" name="pendidikan_wali" class="custom-control-input" value="SMA Sederajat">
                                                <label class="custom-control-label" for="sma">SMA Sederajat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d1" name="pendidikan_wali" class="custom-control-input" value="D1">
                                                <label class="custom-control-label" for="d1">D1</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d2" name="pendidikan_wali" class="custom-control-input" value="D2">
                                                <label class="custom-control-label" for="d2">D2</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="d3" name="pendidikan_wali" class="custom-control-input" value="D3">
                                                <label class="custom-control-label" for="d3">D3</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="s1" name="pendidikan_wali" class="custom-control-input" value="S1">
                                                <label class="custom-control-label" for="s1">S1</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="s2" name="pendidikan_wali" class="custom-control-input" value="S2">
                                                <label class="custom-control-label" for="s2">S2</label>
                                            </div>
                                        </div>
                                        {{-- pekerjaan --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Pekerjaan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="tidak" name="pekerjaan_wali" class="custom-control-input" value="Tidak Bekerja">
                                                <label class="custom-control-label" for="tidak">Tidak Bekerja</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="nelayan" name="pekerjaan_wali" class="custom-control-input" value="Nelayan">
                                                <label class="custom-control-label" for="nelayan">Nelayan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="petani" name="pekerjaan_wali" class="custom-control-input" value="Petani">
                                                <label class="custom-control-label" for="petani">Petani</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="peternak" name="pekerjaan_wali" class="custom-control-input" value="Peternak">
                                                <label class="custom-control-label" for="peternak">Peternak</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pns" name="pekerjaan_wali" class="custom-control-input" value="PNS/TNI/POLRI">
                                                <label class="custom-control-label" for="pns">PNS/TNI/POLRI</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="karyawan" name="pekerjaan_wali" class="custom-control-input" value="Karyawan Swasta">
                                                <label class="custom-control-label" for="karyawan">Karyawan Swasta</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pedagangk" name="pekerjaan_wali" class="custom-control-input" value="Pedagang Kecil">
                                                <label class="custom-control-label" for="pedagangk">Pedagang Kecil</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pedagangb" name="pekerjaan_wali" class="custom-control-input" value="Pedagang Besar">
                                                <label class="custom-control-label" for="pedagangb">Pedagang Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wiraswasta" name="pekerjaan_wali" class="custom-control-input" value="Wiraswasta">
                                                <label class="custom-control-label" for="wiraswasta">Wiraswasta</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="wirausaha" name="pekerjaan_wali" class="custom-control-input" value="Wirausaha">
                                                <label class="custom-control-label" for="wirausaha">Wirausaha</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="buruh" name="pekerjaan_wali" class="custom-control-input" value="buruh">
                                                <label class="custom-control-label" for="buruh">Buruh</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pensiun" name="pekerjaan_wali" class="custom-control-input" value="pensiun">
                                                <label class="custom-control-label" for="pensiun">Pensiun</label>
                                            </div>
                                        </div>
                                        {{-- penghasilan --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Penghasilan Bulanan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kecil" name="penghasilan_wali" class="custom-control-input" value="< Rp 500.000">
                                                <label class="custom-control-label" for="kecil">< Rp 500.000</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sedang" name="penghasilan_wali" class="custom-control-input" value="Rp 500.000 - Rp 999.999">
                                                <label class="custom-control-label" for="sedang">Rp 500.000 - Rp 999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lumayan" name="penghasilan_wali" class="custom-control-input" value="Rp 1.000.000 - Rp 1.999.999">
                                                <label class="custom-control-label" for="lumayan">Rp 1.000.000 - Rp 1.999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="menengah" name="penghasilan_wali" class="custom-control-input" value="Rp 2.000.000 - Rp 4.999.999">
                                                <label class="custom-control-label" for="menengah">Rp 2.000.000 - Rp 4.999.999</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="atas" name="penghasilan_wali" class="custom-control-input" value="Rp 5.000.000 - Rp 20.000.000">
                                                <label class="custom-control-label" for="atas">Rp 5.000.000 - Rp 20.000.000</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lebih" name="penghasilan_wali" class="custom-control-input" value="> Rp 20.000.000">
                                                <label class="custom-control-label" for="lebih">> Rp 20.000.000</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Kirim data</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Data Periodik -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Data Periodik</h1> <br>
                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- tinggi badan --}}
                                        <div class="form-group">
                                            <label for="tinggibdn">Tinggi Badan</label>
                                            <input type="number" class="form-control rounded-0" id="tinggibdn" name="tinggi_badan"><span>Cm</span>
                                        </div>
                                        {{-- Berat Badan --}}
                                        <div class="form-group">
                                            <label for="bb">Berat Badan</label>
                                            <input type="number" class="form-control rounded-0" id="bb" name="berat_badan"><span>Kg</span>
                                        </div>
                                        {{-- Lingkar Kepala --}}
                                        <div class="form-group">
                                            <label for="lingkar">Lingkar Kepala</label>
                                            <input type="number" class="form-control rounded-0" id="lingkar" maxlength="4" name="lingkar_kepala"><span>Cm</span>
                                        </div>
                                        {{-- jarak tempat tingal --}}
                                        <div class="form-group">
                                            <label for=>Jarak Tempat Tinggal</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kurang1" name="jarak" class="custom-control-input" value="Kurang dari 1 Km">
                                                <label class="custom-control-label" for="kurang1">Kurang dari 1 Km</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lebih1" name="jarak" class="custom-control-input" value="Lebih dari 1 Km">
                                                <label class="custom-control-label" for="lebih1">Lebih dari 1 Km</label>
                                            </div>
                                        </div>
                                        {{-- jarak dalam Km --}}
                                        <div class="form-group">
                                            <label for="km">Jarak</label><br>
                                            <input type="number" class="form-control rounded-0" id="km" name="km"><span>Km</span>
                                            <span>*<span><span>Masukan angka jarak dari rumah ke sekolah</span>
                                        </div>
                                        {{-- waktu tempuh --}}
                                        <div class="form-group">
                                            <label for="waktu">Waktu Tempuh</label><br>
                                            <input type="number" class="form-control rounded-0 w-25" id="waktu" name="waktu_tempuh_jam"><span>Jam</span>
                                            <input type="number" class="form-control rounded-0 w-25" id="waktu" name="waktu_tempuh_menit"><span>Menit</span>
                                        </div>
                                        {{-- jumlah saudara --}}
                                        <div class="form-group">
                                            <label for="saudara">Jumlah Saudara Kandung</label><br>
                                            <input type="number" class="form-control rounded-0" id="saudara" name="jumlah_saudara">
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Kirim data</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Prestasi -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Prestasi</h1> <br>
                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- prestasi 1 --}}
                                        <h4>Prestasi 1</h6> <br>
                                            {{-- jenis --}}
                                        <div class="form-group">
                                            <label>Jenis Prestasi</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sains" name="jenis_prestasi_1" class="custom-control-input" value="sains">
                                                <label class="custom-control-label" for="sains">Sains</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="seni" name="jenis_prestasi_1" class="custom-control-input" value="seni">
                                                <label class="custom-control-label" for="seni">Seni</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="olah raga" name="jenis_prestasi_1" class="custom-control-input" value="olah raga">
                                                <label class="custom-control-label" for="olah raga">Olah Raga</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lain" name="jenis_prestasi_1" class="custom-control-input" value="lain-lain">
                                                <label class="custom-control-label" for="lain">Lain-lain</label>
                                            </div>
                                            <br>
                                        </div>
                                            {{-- tingkat --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Tingkat prestasi</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kecamatan" name="tingkat_1" class="custom-control-input" value="kecamatan">
                                                <label class="custom-control-label" for="kecamatan">Kecamatan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kabupaten" name="tingkat_1" class="custom-control-input" value="kabupaten">
                                                <label class="custom-control-label" for="kabupaten">Kabupaten</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="provinsi" name="tingkat_1" class="custom-control-input" value="provinsi">
                                                <label class="custom-control-label" for="provinsi">Provinsi</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="nasional" name="tingkat_1" class="custom-control-input" value="nasional">
                                                <label class="custom-control-label" for="nasional">Nasional</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="internasional" name="tingkat_1" class="custom-control-input" value="internasional">
                                                <label class="custom-control-label" for="internasional">Internasional</label>
                                            </div>
                                        </div>
                                        {{-- nama prestasi --}}
                                        <div class="form-group">
                                            <label for="namap1">Nama Prestasi</label>
                                            <input type="text" class="form-control rounded-0" id="namap1" name="nama_prestasi_1">
                                        </div>
                                        {{-- tahun prestasi --}}
                                        <div class="form-group">
                                            <label for="tahunp1">Tahun Prestasi</label>
                                            <input type="number" class="form-control rounded-0" id="tahunp1" maxlength="4" name="tahun_1">
                                        </div>
                                        {{-- nama prestasi --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Nama Penyelenggara</label>
                                            <input type="text" class="form-control rounded-0" id="exampleFormControlPasswor3" name="penyelenggara">
                                        </div>
                                        <br>
                                        {{-- prestasi 2 --}}
                                        <h4>Prestasi 2</h6> <br>
                                            {{-- jenis --}}
                                        <div class="form-group">
                                            <label>Jenis Prestasi</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sains" name="jenis_prestasi_2" class="custom-control-input" value="sains">
                                                <label class="custom-control-label" for="sains">Sains</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="seni" name="jenis_prestasi_2" class="custom-control-input" value="seni">
                                                <label class="custom-control-label" for="seni">Seni</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="olah raga" name="jenis_prestasi_2" class="custom-control-input" value="olah raga">
                                                <label class="custom-control-label" for="olah raga">Olah Raga</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lain" name="jenis_prestasi_2" class="custom-control-input" value="lain-lain">
                                                <label class="custom-control-label" for="lain">Lain-lain</label>
                                            </div>
                                            <br>
                                        </div>
                                            {{-- tingkat --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Tingkat prestasi</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kecamatan" name="tingkat_2" class="custom-control-input" value="kecamatan">
                                                <label class="custom-control-label" for="kecamatan">Kecamatan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kabupaten" name="tingkat_2" class="custom-control-input" value="kabupaten">
                                                <label class="custom-control-label" for="kabupaten">Kabupaten</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="provinsi" name="tingkat_2" class="custom-control-input" value="provinsi">
                                                <label class="custom-control-label" for="provinsi">Provinsi</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="nasional" name="tingkat_2" class="custom-control-input" value="nasional">
                                                <label class="custom-control-label" for="nasional">Nasional</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="internasional" name="tingkat_2" class="custom-control-input" value="internasional">
                                                <label class="custom-control-label" for="internasional">Internasional</label>
                                            </div>
                                        </div>
                                        {{-- nama prestasi --}}
                                        <div class="form-group">
                                            <label for="namap2">Nama Prestasi</label>
                                            <input type="text" class="form-control rounded-0" id="namap2" name="nama_prestasi_2">
                                        </div>
                                        {{-- tahun prestasi --}}
                                        <div class="form-group">
                                            <label for="tahunp2">Tahun Prestasi</label>
                                            <input type="number" class="form-control rounded-0" id="tahunp2" maxlength="4" name="tahun_2">
                                        </div>
                                        {{-- nama prestasi --}}
                                        <div class="form-group">
                                            <label for="penyelenggara2">Nama Penyelenggara</label>
                                            <input type="text" class="form-control rounded-0" id="penyelenggara2" name="penyelenggara_2">
                                        </div>
                                        <br>
                                        {{-- prestasi 3 --}}
                                        <h4>Prestasi 3</h6> <br>
                                            {{-- jenis --}}
                                        <div class="form-group">
                                            <label>Jenis Prestasi</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="sains" name="jenis_prestasi_3" class="custom-control-input" value="sains">
                                                <label class="custom-control-label" for="sains">Sains</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="seni" name="jenis_prestasi_3" class="custom-control-input" value="seni">
                                                <label class="custom-control-label" for="seni">Seni</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="olah raga" name="jenis_prestasi_3" class="custom-control-input" value="olah raga">
                                                <label class="custom-control-label" for="olah raga">Olah Raga</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="lain" name="jenis_prestasi_3" class="custom-control-input" value="lain-lain">
                                                <label class="custom-control-label" for="lain">Lain-lain</label>
                                            </div>
                                            <br>
                                        </div>
                                            {{-- tingkat --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Tingkat prestasi</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kecamatan" name="tingkat_3" class="custom-control-input" value="kecamatan">
                                                <label class="custom-control-label" for="kecamatan">Kecamatan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kabupaten" name="tingkat_3" class="custom-control-input" value="kabupaten">
                                                <label class="custom-control-label" for="kabupaten">Kabupaten</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="provinsi" name="tingkat_3" class="custom-control-input" value="provinsi">
                                                <label class="custom-control-label" for="provinsi">Provinsi</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="nasional" name="tingkat_3" class="custom-control-input" value="nasional">
                                                <label class="custom-control-label" for="nasional">Nasional</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="internasional" name="tingkat_3" class="custom-control-input" value="internasional">
                                                <label class="custom-control-label" for="internasional">Internasional</label>
                                            </div>
                                        </div>
                                        {{-- nama prestasi --}}
                                        <div class="form-group">
                                            <label for="namap3">Nama Prestasi</label>
                                            <input type="text" class="form-control rounded-0" id="namap3" name="nama_prestasi_3">
                                        </div>
                                        {{-- tahun prestasi --}}
                                        <div class="form-group">
                                            <label for="tahunp3">Tahun Prestasi</label>
                                            <input type="number" class="form-control rounded-0" id="tahunp3" maxlength="4" name="tahun_3">
                                        </div>
                                        {{-- nama prestasi --}}
                                        <div class="form-group">
                                            <label for="penyelenggara3">Nama Penyelenggara</label>
                                            <input type="text" class="form-control rounded-0" id="penyelenggara3" name="penyelenggara_3">
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Kirim data</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Beasiswa -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Beasiswa</h1> <br>
                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- beasiswa 1 --}}
                                        <h4>Beasiswa 1</h6> <br>
                                        {{-- jenis --}}
                                        <div class="form-group">
                                            <label>Jenis Beasiswa</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="anak_miskin" name="jenis_anak_berprestasi_1" class="custom-control-input" value="anak miskin">
                                                <label class="custom-control-label" for="anak_miskin">Anak miskin</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pendidikanb" name="jenis_anak_berprestasi_1" class="custom-control-input" value="pendidikan">
                                                <label class="custom-control-label" for="pendidikanb">Pendidikan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="unggulan" name="jenis_anak_berprestasi_1" class="custom-control-input" value="unggulan">
                                                <label class="custom-control-label" for="unggulan">Unggulan</label>
                                            </div>
                                        </div>
                                            {{-- nama beasiswa --}}
                                        <div class="form-group">
                                            <label for="beasiswa1">Nama Beasiswa</label><br>
                                            <input type="text" class="form-control rounded-0" id="beasiswa1" name="keterangan_1">
                                        </div>
                                            {{-- tahun mulai --}}
                                        <div class="form-group">
                                            <label for="tahunm1">Tahun Mulai</label><br>
                                            <input type="text" class="form-control rounded-0" id="tahunm1" name="tahun_mulai_1">
                                        </div>
                                            {{-- tahun berakhir --}}
                                        <div class="form-group">
                                            <label for="tahuns1">Tahun Selesai</label><br>
                                            <input type="text" class="form-control rounded-0" id="tahuns1" name="tahun_selesai_1">
                                        </div>
                                        <br>
                                        {{-- beasiswa 2 --}}
                                        <h4>Beasiswa 2</h6> <br>
                                        {{-- jenis --}}
                                        <div class="form-group">
                                            <label>Jenis Beasiswa</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="anak_miskin" name="jenis_anak_berprestasi_2" class="custom-control-input" value="anak miskin">
                                                <label class="custom-control-label" for="anak_miskin">Anak miskin</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pendidikanb" name="jenis_anak_berprestasi_2" class="custom-control-input" value="pendidikan">
                                                <label class="custom-control-label" for="pendidikanb">Pendidikan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="unggulan" name="jenis_anak_berprestasi_2" class="custom-control-input" value="unggulan">
                                                <label class="custom-control-label" for="unggulan">Unggulan</label>
                                            </div>
                                        </div>
                                            {{-- nama beasiswa --}}
                                        <div class="form-group">
                                            <label for="beasiswa2">Nama Beasiswa</label><br>
                                            <input type="text" class="form-control rounded-0" id="beasiswa2" name="keterangan_2">
                                        </div>
                                            {{-- tahun mulai --}}
                                        <div class="form-group">
                                            <label for="tahunm2">Tahun Mulai</label><br>
                                            <input type="text" class="form-control rounded-0" id="tahunm2" name="tahun_mulai_2">
                                        </div>
                                            {{-- tahun berakhir --}}
                                        <div class="form-group">
                                            <label for="tahuns2">Tahun Selesai</label><br>
                                            <input type="text" class="form-control rounded-0" id="tahuns2" name="tahun_selesai_2">
                                        </div>
                                        <br>
                                        {{-- beasiswa 3 --}}
                                        <h4>Beasiswa 3</h6> <br>
                                        {{-- jenis --}}
                                        <div class="form-group">
                                            <label>Jenis Beasiswa</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="anak_miskin" name="jenis_anak_berprestasi_3" class="custom-control-input" value="anak miskin">
                                                <label class="custom-control-label" for="anak_miskin">Anak miskin</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pendidikanb" name="jenis_anak_berprestasi_3" class="custom-control-input" value="pendidikan">
                                                <label class="custom-control-label" for="pendidikanb">Pendidikan</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="unggulan" name="jenis_anak_berprestasi_3" class="custom-control-input" value="unggulan">
                                                <label class="custom-control-label" for="unggulan">Unggulan</label>
                                            </div>
                                        </div>
                                            {{-- nama beasiswa --}}
                                        <div class="form-group">
                                            <label for="beasiswa3">Nama Beasiswa</label><br>
                                            <input type="text" class="form-control rounded-0" id="beasiswa3" name="keterangan_3">
                                        </div>
                                            {{-- tahun mulai --}}
                                        <div class="form-group">
                                            <label for="tahunm3">Tahun Mulai</label><br>
                                            <input type="text" class="form-control rounded-0" id="tahunm3" name="tahun_mulai_3">
                                        </div>
                                            {{-- tahun berakhir --}}
                                        <div class="form-group">
                                            <label for="tahuns3">Tahun Selesai</label><br>
                                            <input type="text" class="form-control rounded-0" id="tahuns3" name="tahun_selesai_3">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-block btn-primary">Kirim data</button>
                                    </form>
                                </div>
                            </div>

                            <!-- kesejahteraan -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Kesejahteraan Peserta Didik</h1> <br>
                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- jenis kesejahteraan --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlPasswor3">Jenis Kesejahteraan</label><br>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="pkh" name="jenis_kesejahteraan" class="custom-control-input" value="PKH">
                                                <label class="custom-control-label" for="pkh">PKH</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kps" name="jenis_kesejahteraan" class="custom-control-input" value="Kartu Perlindungan Sosial">
                                                <label class="custom-control-label" for="kps">Kartu Perlindungan Sosial</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kks" name="jenis_kesejahteraan" class="custom-control-input" value="Kartu Keluarg Sehat">
                                                <label class="custom-control-label" for="kks">Kartu Keluarg Sehat</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                <input type="radio" id="kkes" name="jenis_kesejahteraan" class="custom-control-input" value="Kartu Kesehatan">
                                                <label class="custom-control-label" for="kkes">Kartu Kesehatan</label>
                                            </div>
                                        </div>
                                        {{-- No Kartu --}}
                                        <div class="form-group">
                                            <label for="no_kartuKkes">No. Kartu</label>
                                            <input type="number" class="form-control rounded-0" id="no_kartuKkes" name="no_kartu">
                                        </div>
                                        {{-- Nama kartu --}}
                                        <div class="form-group">
                                            <label for="nama_kartuKes">Nama Kartu</label>
                                            <input type="text" class="form-control rounded-0" id="nama_kartuKes" name="nama_kartu">
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Kirim data</button>
                                    </form>
                                </div>
                            </div>
                            {{-- upload berkas --}}
                            <div class="card card-default">
                                <div class="card-header">
                                    <h1>Upload Berkas</h1> <br>
                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- file kk --}}
                                        <div class="form-group">
                                            <label for="scan_kk">Scan Kartu Keluarga</label>
                                            <input type="file" class="form-control rounded-0" id="scan_kk" name="file_kk">
                                        </div>
                                        {{-- file akta --}}
                                        <div class="form-group">
                                            <label for="scan_akta">Scan Kartu Akta Kelahiran</label>
                                            <input type="file" class="form-control rounded-0" id="scan_akta" name="file_akta_kelahiran">
                                        </div>
                                        {{-- file ktp ortu --}}
                                        <div class="form-group">
                                            <label for="scan_ktp">Scan KTP Ortu</label>
                                            <input type="file" class="form-control rounded-0" id="scan_ktp" name="file_ktp_ortu">
                                        </div>
                                        {{-- file ijazah tk --}}
                                        <div class="form-group">
                                            <label for="scan_ijazah">Scan Ijazah TK</label>
                                            <input type="file" class="form-control rounded-0" id="scan_ijazah" name="file_ijazah_tk">
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Kirim data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end content wrapper --}}
            @include('student.pages.components.footer')

        </div>
    </div>




                   @include('student.components.jsadmin')
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>




                    <!--  -->


  </body>
</html>
