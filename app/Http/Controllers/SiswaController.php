<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Siswa;
use App\Models\Pengumuman;
use App\Models\DataIbu;
use App\Models\DataAyah;
use App\Models\DataWali;
use App\Models\PesertaDidik;
use App\Models\File;
use App\Models\PPDB;
use App\Models\DetailPesertaDidik;
use App\Models\Prestasi;
use App\Models\DataPribadi;
use App\Models\DataPeriodik;
use Illuminate\Http\Request;
use App\Models\Kesejahteraan;
use Illuminate\Support\Facades\Hash;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (roleController('siswa')) {
            // Untuk Wali
            $id = auth()->guard('siswa')->id();
            $siswa = Siswa::find($id);
            if ($siswa->daftar === 0) {
                return view('student.pages.data-ppdb', ['siswa' => $siswa, 'daftar' => 0]);
            } else {
                $siswa = Siswa::find($id);
                $waktu = DataPeriodik::find($siswa->data_pribadi_id);
                $data = explode(" ", $waktu->waktu_tempuh);
                $jam = $data[0];
                $menit = $data[2];
                return view('student.pages.data-ppdb', ['daftar' => 1, 'siswa' => $siswa, 'jam' => $jam, 'menit' => $menit]);
            }
        } elseif (roleController('admin')) {
            // Untuk admin
            $sekolahs = Sekolah::all();

            if ($request->sdn) {
                $peserta_didiks = DataPribadi::where('sekolah_id', $request->sdn)->get();
            } else {
                $peserta_didiks = DataPribadi::all();
            }
            return view('peserta-didik.index', compact('peserta_didiks', 'sekolahs'));
        } else {
            // Untuk Sekolah
            $peserta_didiks = DataPribadi::where('sekolah_id', Auth::id())->get();
            return view('peserta-didik.index', compact('peserta_didiks'));
        }
    }

    /**
     * Dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $siswa = Siswa::find(auth()->guard('siswa')->id());
        $pengumuman = Pengumuman::all();
        return view(
            'student.pages.dashboard',
            ['siswa' => $siswa, 'pengumumans' => $pengumuman]
        );
    }

    public function datatableSiswaLolos()
    {
        $siswa = Siswa::find(auth()->guard('siswa')->id());
        $data = DataPribadi::where('sekolah_id', $siswa->sekolah_id)->where('isAccepted', 1)->get();
        return view('student.pages.siswa-lolos', ['siswa' => $siswa, 'data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = Siswa::find(auth()->guard('siswa')->id());
        try {
            $rules = array_merge([
                //data pribadi
                'nama_lengkap' => 'required',
                'gender' => 'required',
                'nisn' => 'required|min:10|max:10',
                'nik' => 'required|min:16|max:16',
                'kk' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'akta_kelahiran' => 'required',
                'agama' => 'required',
                'kewarganegaraan' => 'required',
                'negara' => 'required',
                'berkebutuhan_khusus' => 'required',
                'alamat' => 'required',
                'rt' => 'required|min:3|max:3',
                'rw' => 'required|min:3|max:3',
                'dusun' => 'required',
                'kelurahan' => 'required',
                'kecamatan' => 'required',
                'kode_pos' => 'required',
                'lintang' => 'required',
                'bujur' => 'required',
                'tempat_tinggal' => 'required',
                'moda_transportasi' => 'required',
                'anak_ke' => 'required',
                'kip' => 'required',
                'menerima_kip' => 'required',
                'pip' => 'required',
            ], [
                //data periodik
                'tinggi_badan' => 'required',
                'berat_badan' => 'required',
                'lingkar_kepala' => 'required',
                'jarak' => 'required',
                'km' => 'required',
                'waktu_tempuh_jam' => 'required',
                'waktu_tempuh_menit' => 'required',
                'jumlah_saudara' => 'required',
            ], [
                //data ayah
                'nama_ayah' => 'required',
                'nik_ayah' => 'required',
                'tahun_ayah' => 'required',
                'pendidikan_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'penghasilan_ayah' => 'required',
                'berkebutuhan_khusus_ayah' => 'required',
            ], [
                //data ibu
                'nama_ibu' => 'required',
                'nik_ibu' => 'required',
                'tahun_ibu' => 'required',
                'pendidikan_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'penghasilan_ibu' => 'required',
                'berkebutuhan_khusus_ibu' => 'required',
            ], [
                //cata wali
                'nama_wali' => 'nullable|required_with:nik_wali,tahun_wali,pendidikan_wali,pekerjaan_wali,penghasilan_wali',
                'nik_wali' => 'nullable|required_with:nama_wali,tahun_wali,pendidikan_wali,pekerjaan_wali,penghasilan_wali',
                'tahun_wali' => 'nullable|required_with:nama_wali,nik_wali,pendidikan_wali,pekerjaan_wali,penghasilan_wali',
                'pendidikan_wali' => 'nullable|required_with:nama_wali,nik_wali,tahun_wali,pekerjaan_wali,penghasilan_wali',
                'pekerjaan_wali' => 'nullable|required_with:nama_wali,nik_wali,tahun_wali,pendidikan_wali,penghasilan_wali',
                'penghasilan_wali' => 'nullable|required_with:nama_wali,nik_wali,tahun_wali,pendidikan_wali,pekerjaan_wali',
            ], [
                //data beasiswa
                'beasiswa.*.jenis_anak_berprestasi' => 'nullable|required_with:beasiswa.*.keterangan,beasiswa.*.tahun_mulai,beasiswa.*.tahun_selesai',
                'beasiswa.*.keterangan' => 'nullable|required_with:beasiswa.*.jenis_anak_berprestasi,beasiswa.*.tahun_mulai,beasiswa.*.tahun_selesai',
                'beasiswa.*.tahun_mulai' => 'nullable|required_with:beasiswa.*.jenis_anak_berprestasi,beasiswa.*.keterangan,beasiswa.*.tahun_selesai',
                'beasiswa.*.tahun_selesai' => 'nullable|required_with:beasiswa.*.jenis_anak_berprestasi,beasiswa.*.keterangan,beasiswa.*.tahun_mulai',
            ], [
                //data prestasi
                'prestasi.*.nama_prestasi' => 'nullable|required_with:prestasi.*.tahun,prestasi.*.penyelenggara,prestasi.*.jenis_prestasi,prestasi.*.jenis_prestasi',
                'prestasi.*.tahun' => 'nullable|required_with:prestasi.*.nama_prestasi,prestasi.*.penyelenggara,prestasi.*.jenis_prestasi,prestasi.*.jenis_prestasi',
                'prestasi.*.penyelenggara' => 'nullable|required_with:prestasi.*.nama_prestasi,prestasi.*.tahun,prestasi.*.jenis_prestasi,prestasi.*.jenis_prestasi',
                'prestasi.*.jenis_prestasi' => 'nullable|required_with:prestasi.*.nama_prestasi,prestasi.*.tahun,prestasi.*.penyelenggara,prestasi.*.jenis_prestasi',
            ], [
                //data kesejahteraan
                'jenis_kesejahteraan' => 'required',
                'no_kartu' => 'required',
                'nama_sejahtera' => 'required',
            ], [
                //file
                'file_kk' => 'required|mimes:pdf|max:5120',
                'file_akta_kelahiran' => 'required|mimes:pdf|max:5120',
                'file_ktp_ortu' => 'required|mimes:pdf|max:5120',
                'file_ijazah_tk' => 'required|mimes:pdf|max:5120',
            ]);

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }


        try {
            $dataPribadi = DataPribadi::create([
                'sekolah_id' => $request->input('sekolah_id'),
                'nama_lengkap' => $request->input('nama_lengkap'),
                'gender' => $request->input('gender'),
                'nisn' => $request->input('nisn'),
                'nik' => $request->input('nik'),
                'kk' => $request->input('kk'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'akta_kelahiran' => $request->input('akta_kelahiran'),
                'agama' => $request->input('agama'),
                'kewarganegaraan' => $request->input('kewarganegaraan'),
                'negara' => $request->input('negara'),
                'berkebutuhan_khusus' => $request->input('berkebutuhan_khusus'),
                'alamat' => $request->input('alamat'),
                'rt' => $request->input('rt'),
                'rw' => $request->input('rw'),
                'dusun' => $request->input('dusun'),
                'kelurahan' => $request->input('kelurahan'),
                'kecamatan' => $request->input('kecamatan'),
                'kode_pos' => $request->input('kode_pos'),
                'lintang' => $request->input('lintang'),
                'bujur' => $request->input('bujur'),
                'tempat_tinggal' => $request->input('tempat_tinggal'),
                'moda_tranportasi' => $request->input('moda_transportasi'),
                'anak_ke' => $request->input('anak_ke'),
                'kip' => $request->input('kip'),
                'menerima_kip' => $request->input('menerima_kip'),
                'pip' => $request->input('pip'),
            ]);

            $id_datapribadi = $dataPribadi->id;

            /**
             * Data periodik
             */


            DataPeriodik::create([
                'data_pribadi_id' => $id_datapribadi,
                'tinggi_badan' => $request->input('tinggi_badan'),
                'berat_badan' => $request->input('berat_badan'),
                'lingkar_kepala' => $request->input('lingkar_kepala'),
                'jarak' => $request->input('jarak'),
                'km' => $request->input('km'),
                'waktu_tempuh' => $request->input('waktu_tempuh_jam') . " jam " . $request->input('waktu_tempuh_menit') . " menit",
                'jumlah_saudara' => $request->input('jumlah_saudara'),
            ]);


            /**
             * Data Ayah
             */
            DataAyah::create([
                'data_pribadi_id' => $id_datapribadi,
                'nama_ayah' => $request->input('nama_ayah'),
                'nik_ayah' => $request->input('nik_ayah'),
                'tahun_ayah' => $request->input('tahun_ayah'),
                'pendidikan_ayah' => $request->input('pendidikan_ayah'),
                'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                'penghasilan_ayah' => $request->input('penghasilan_ayah'),
                'berkebutuhan_khusus_ayah' => $request->input('berkebutuhan_khusus_ayah')
            ]);


            /**
             * Data Ibu
             */
            DataIbu::create([
                'data_pribadi_id' => $id_datapribadi,
                'nama_ibu' => $request->input('nama_ibu'),
                'nik_ibu' => $request->input('nik_ibu'),
                'tahun_ibu' => $request->input('tahun_ibu'),
                'pendidikan_ibu' => $request->input('pendidikan_ibu'),
                'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
                'penghasilan_ibu' => $request->input('penghasilan_ibu'),
                'berkebutuhan_khusus_ibu' => $request->input('berkebutuhan_khusus_ibu')
            ]);

            /**
             * Data Wali
             */
            if ($request->input('nama_wali')) {
                DataWali::create([
                    'data_pribadi_id' => $id_datapribadi,
                    'nama_wali' => $request->input('nama_wali'),
                    'nik_wali' => $request->input('nik_wali'),
                    'tahun_wali' => $request->input('tahun_wali'),
                    'pendidikan_wali' => $request->input('pendidikan_wali'),
                    'pekerjaan_wali' => $request->input('pekerjaan_wali'),
                    'penghasilan_wali' => $request->input('penghasilan_wali'),
                ]);
            }


            /**
             * Beasiswa
             */
            for ($i = 0; $i <= 2; $i++) {
                if ($request->input('beasiswa' . $i . 'jenis_anak_berprestasi')) {
                    Beasiswa::create([
                        'data_pribadi_id' => $id_datapribadi,
                        'jenis_anak_berprestasi' => $request->input('beasiswa' . $i . 'jenis_anak_berprestasi'),
                        'keterangan' => $request->input('beasiswa' . $i . 'keterangan'),
                        'tahun_mulai' => $request->input('beasiswa' . $i . 'tahun_mulai'),
                        'tahun_selesai' => $request->input('beasiswa' . $i . 'tahun_selesai')
                    ]);
                }
            }

            /**
             * Prestasi
             */
            for ($i = 0; $i <= 2; $i++) {
                if ($request->input('prestasi' . $i . 'nama_prestasi')) {

                    Prestasi::create([
                        'data_pribadi_id' => $id_datapribadi,
                        'nama_prestasi' => $request->input('prestasi' . $i . 'nama_prestasi'),
                        'tahun' => $request->input('prestasi' . $i . 'tahun'),
                        'penyelenggara' => $request->input('prestasi' . $i . 'penyelenggara'),
                        'jenis_prestasi' => $request->input('prestasi' . $i . 'jenis_prestasi'),
                        'tingkat' => $request->input('prestasi' . $i . 'tingkat'),
                    ]);
                }
            }

            /**
             * Kesejahteraan
             */

            Kesejahteraan::create([
                'data_pribadi_id' => $id_datapribadi,
                'jenis_kesejahteraan' => $request->input('jenis_kesejahteraan'),
                'no_kartu' => $request->input('no_kartu'),
                'nama_sejahtera' => $request->input('nama_sejahtera'),
            ]);


            /**
             * File
             */
            if ($request->hasFile('file_kk')) {
                $pdf_kk = $request->file('file_kk');
                $name_kk = uniqid() . '.' . $pdf_kk->getClientOriginalExtension();
                $pdf_kk->storeAs('file/kk/', $name_kk);
            }
            if ($request->hasFile('file_akta_kelahiran')) {
                $pdf_akta = $request->file('file_akta_kelahiran');
                $name_akta = uniqid() . '.' . $pdf_akta->getClientOriginalExtension();
                $pdf_akta->storeAs('file/akta/', $name_akta);
            }
            if ($request->hasFile('file_ktp_ortu')) {
                $pdf_ktp = $request->file('file_ktp_ortu');
                $name_ktp = uniqid() . '.' . $pdf_ktp->getClientOriginalExtension();
                $pdf_ktp->storeAs('file/ktp/', $name_ktp);
            }
            if ($request->hasFile('file_ijazah_tk')) {
                $pdf_ijazah = $request->file('file_ijazah_tk');
                $name_ijazah = uniqid() . '.' . $pdf_ijazah->getClientOriginalExtension();
                $pdf_ijazah->storeAs('file/ijazah/', $name_ijazah);
            }


            File::create([
                'file_kk' => 'storage/file/kk/' . $name_kk,
                'file_akta_kelahiran' => 'storage/file/akta/' . $name_akta,
                'file_ktp_ortu' => 'storage/file/ktp/' . $name_ktp,
                'file_ijazah_tk' => 'storage/file/ijazah/' . $name_ijazah,
                'data_pribadi_id' => $id_datapribadi
            ]);



            /**
             * Update data siswa
             */

            Siswa::where('id', $siswa->id)->update([
                'daftar' => 1,
                'data_pribadi_id' => $id_datapribadi
            ]);

            DataPribadi::where('id', $id_datapribadi)->update(['isisVerificated' => 0]);

            return view(
                'student.pages.data-ppdb',
                ['daftar' => 1, 'siswa' => $siswa]
            );
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        if (roleController('siswa')) {
            // untuk Wali
            $siswa = Siswa::find(auth()->guard('siswa')->id());
            return view('student.pages.profile-siswa-ppdb', ['siswa' => $siswa]);
        } else {
            $peserta_didik = $siswa;
            return view('peserta-didik.show', compact('peserta_didik'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function editData(Request $request)
    {
        $siswa = Siswa::find(auth()->guard('siswa')->id());
        try {
            $rules = array_merge([
                //data pribadi
                'nama_lengkap' => 'required',
                'gender' => 'required',
                'nisn' => 'required|min:10|max:10',
                'nik' => 'required|min:16|max:16',
                'kk' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'akta_kelahiran' => 'required',
                'agama' => 'required',
                'kewarganegaraan' => 'required',
                'negara' => 'required',
                'berkebutuhan_khusus' => 'required',
                'alamat' => 'required',
                'rt' => 'required|min:3|max:3',
                'rw' => 'required|min:3|max:3',
                'dusun' => 'required',
                'kelurahan' => 'required',
                'kecamatan' => 'required',
                'kode_pos' => 'required',
                'lintang' => 'required',
                'bujur' => 'required',
                'tempat_tinggal' => 'required',
                'moda_transportasi' => 'required',
                'anak_ke' => 'required',
                'kip' => 'required',
                'menerima_kip' => 'required',
                'pip' => 'required',
            ], [
                //data periodik
                'tinggi_badan' => 'required',
                'berat_badan' => 'required',
                'lingkar_kepala' => 'required',
                'jarak' => 'required',
                'km' => 'required',
                'waktu_tempuh_jam' => 'required',
                'waktu_tempuh_menit' => 'required',
                'jumlah_saudara' => 'required',
            ], [
                //data ayah
                'nama_ayah' => 'required',
                'nik_ayah' => 'required',
                'tahun_ayah' => 'required',
                'pendidikan_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'penghasilan_ayah' => 'required',
                'berkebutuhan_khusus_ayah' => 'required',
            ], [
                //data ibu
                'nama_ibu' => 'required',
                'nik_ibu' => 'required',
                'tahun_ibu' => 'required',
                'pendidikan_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'penghasilan_ibu' => 'required',
                'berkebutuhan_khusus_ibu' => 'required',
            ], [
                //cata wali
                'nama_wali' => 'nullable|required_with:nik_wali,tahun_wali,pendidikan_wali,pekerjaan_wali,penghasilan_wali',
                'nik_wali' => 'nullable|required_with:nama_wali,tahun_wali,pendidikan_wali,pekerjaan_wali,penghasilan_wali',
                'tahun_wali' => 'nullable|required_with:nama_wali,nik_wali,pendidikan_wali,pekerjaan_wali,penghasilan_wali',
                'pendidikan_wali' => 'nullable|required_with:nama_wali,nik_wali,tahun_wali,pekerjaan_wali,penghasilan_wali',
                'pekerjaan_wali' => 'nullable|required_with:nama_wali,nik_wali,tahun_wali,pendidikan_wali,penghasilan_wali',
                'penghasilan_wali' => 'nullable|required_with:nama_wali,nik_wali,tahun_wali,pendidikan_wali,pekerjaan_wali',
            ], [
                //data beasiswa
                'beasiswa.*.jenis_anak_berprestasi' => 'nullable|required_with:beasiswa.*.keterangan,beasiswa.*.tahun_mulai,beasiswa.*.tahun_selesai',
                'beasiswa.*.keterangan' => 'nullable|required_with:beasiswa.*.jenis_anak_berprestasi,beasiswa.*.tahun_mulai,beasiswa.*.tahun_selesai',
                'beasiswa.*.tahun_mulai' => 'nullable|required_with:beasiswa.*.jenis_anak_berprestasi,beasiswa.*.keterangan,beasiswa.*.tahun_selesai',
                'beasiswa.*.tahun_selesai' => 'nullable|required_with:beasiswa.*.jenis_anak_berprestasi,beasiswa.*.keterangan,beasiswa.*.tahun_mulai',
            ], [
                //data prestasi
                'prestasi.*.nama_prestasi' => 'nullable|required_with:prestasi.*.tahun,prestasi.*.penyelenggara,prestasi.*.jenis_prestasi,prestasi.*.jenis_prestasi',
                'prestasi.*.tahun' => 'nullable|required_with:prestasi.*.nama_prestasi,prestasi.*.penyelenggara,prestasi.*.jenis_prestasi,prestasi.*.jenis_prestasi',
                'prestasi.*.penyelenggara' => 'nullable|required_with:prestasi.*.nama_prestasi,prestasi.*.tahun,prestasi.*.jenis_prestasi,prestasi.*.jenis_prestasi',
                'prestasi.*.jenis_prestasi' => 'nullable|required_with:prestasi.*.nama_prestasi,prestasi.*.tahun,prestasi.*.penyelenggara,prestasi.*.jenis_prestasi',
            ], [
                //data kesejahteraan
                'jenis_kesejahteraan' => 'required',
                'no_kartu' => 'required',
                'nama_sejahtera' => 'required',
            ], [
                //file
                'file_kk' => 'nullable|mimes:pdf|max:5120',
                'file_akta_kelahiran' => 'nullable|mimes:pdf|max:5120',
                'file_ktp_ortu' => 'nullable|mimes:pdf|max:5120',
                'file_ijazah_tk' => 'nullable|mimes:pdf|max:5120',
            ]);

            $validator = Validator::make($request->all(), $rules);
            // dd($request->all(), $validator->messages());
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }


        try {
            DataPribadi::where('id', $siswa->data_pribadi_id)->update([
                'sekolah_id' => $request->input('sekolah_id'),
                'nama_lengkap' => $request->input('nama_lengkap'),
                'gender' => $request->input('gender'),
                'nisn' => $request->input('nisn'),
                'nik' => $request->input('nik'),
                'kk' => $request->input('kk'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'akta_kelahiran' => $request->input('akta_kelahiran'),
                'agama' => $request->input('agama'),
                'kewarganegaraan' => $request->input('kewarganegaraan'),
                'negara' => $request->input('negara'),
                'berkebutuhan_khusus' => $request->input('berkebutuhan_khusus'),
                'alamat' => $request->input('alamat'),
                'rt' => $request->input('rt'),
                'rw' => $request->input('rw'),
                'dusun' => $request->input('dusun'),
                'kelurahan' => $request->input('kelurahan'),
                'kecamatan' => $request->input('kecamatan'),
                'kode_pos' => $request->input('kode_pos'),
                'lintang' => $request->input('lintang'),
                'bujur' => $request->input('bujur'),
                'tempat_tinggal' => $request->input('tempat_tinggal'),
                'moda_tranportasi' => $request->input('moda_transportasi'),
                'anak_ke' => $request->input('anak_ke'),
                'kip' => $request->input('kip'),
                'menerima_kip' => $request->input('menerima_kip'),
                'pip' => $request->input('pip'),
            ]);

            /**
             * Data periodik
             */

            DataPeriodik::where('data_pribadi_id', $siswa->data_pribadi_id)->update([
                'tinggi_badan' => $request->input('tinggi_badan'),
                'berat_badan' => $request->input('berat_badan'),
                'lingkar_kepala' => $request->input('lingkar_kepala'),
                'jarak' => $request->input('jarak'),
                'km' => $request->input('km'),
                'waktu_tempuh' => $request->input('waktu_tempuh_jam') . " jam " . $request->input('waktu_tempuh_menit') . " menit",
                'jumlah_saudara' => $request->input('jumlah_saudara'),
            ]);


            /**
             * Data Ayah
             */
            DataAyah::where('data_pribadi_id', $siswa->data_pribadi_id)->update([
                'nama_ayah' => $request->input('nama_ayah'),
                'nik_ayah' => $request->input('nik_ayah'),
                'tahun_ayah' => $request->input('tahun_ayah'),
                'pendidikan_ayah' => $request->input('pendidikan_ayah'),
                'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                'penghasilan_ayah' => $request->input('penghasilan_ayah'),
                'berkebutuhan_khusus_ayah' => $request->input('berkebutuhan_khusus_ayah')
            ]);


            /**
             * Data Ibu
             */

            DataIbu::where('data_pribadi_id', $siswa->data_pribadi_id)->update([
                'nama_ibu' => $request->input('nama_ibu'),
                'nik_ibu' => $request->input('nik_ibu'),
                'tahun_ibu' => $request->input('tahun_ibu'),
                'pendidikan_ibu' => $request->input('pendidikan_ibu'),
                'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
                'penghasilan_ibu' => $request->input('penghasilan_ibu'),
                'berkebutuhan_khusus_ibu' => $request->input('berkebutuhan_khusus_ibu')
            ]);



            /**
             * Data Wali
             */
            if ($request->input('nama_wali')) {
                DataWali::where('data_pribadi_id', $siswa->data_pribadi_id)->update([
                    'nama_wali' => $request->input('nama_wali'),
                    'nik_wali' => $request->input('nik_wali'),
                    'tahun_wali' => $request->input('tahun_wali'),
                    'pendidikan_wali' => $request->input('pendidikan_wali'),
                    'pekerjaan_wali' => $request->input('pekerjaan_wali'),
                    'penghasilan_wali' => $request->input('penghasilan_wali'),
                ]);
            }



            /**
             * Beasiswa
             */
            for ($i = 0; $i <= 2; $i++) {
                if ($request->input('beasiswa' . $i . 'jenis_anak_berprestasi')) {

                    Beasiswa::where('id', $request->id_bea . '' . $i)->update([
                        'jenis_anak_berprestasi' => $request->input('beasiswa' . $i . 'jenis_anak_berprestasi'),
                        'keterangan' => $request->input('beasiswa' . $i . 'keterangan'),
                        'tahun_mulai' => $request->input('beasiswa' . $i . 'tahun_mulai'),
                        'tahun_selesai' => $request->input('beasiswa' . $i . 'tahun_selesai')
                    ]);
                }
            }



            /**
             * Prestasi
             */
            for ($i = 0; $i <= 2; $i++) {
                if ($request->input('prestasi' . $i . 'nama_prestasi')) {
                    Prestasi::where('id', $request->id_pres . '' . $i)->update([
                        'nama_prestasi' => $request->input('prestasi' . $i . 'nama_prestasi'),
                        'tahun' => $request->input('prestasi' . $i . 'tahun'),
                        'penyelenggara' => $request->input('prestasi' . $i . 'penyelenggara'),
                        'jenis_prestasi' => $request->input('prestasi' . $i . 'jenis_prestasi'),
                        'tingkat' => $request->input('prestasi' . $i . 'tingkat'),
                    ]);
                }
            }


            /**
             * Kesejahteraan
             */
            Kesejahteraan::where('data_pribadi_id', $siswa->data_pribadi_id)->update([
                'jenis_kesejahteraan' => $request->input('jenis_kesejahteraan'),
                'no_kartu' => $request->input('no_kartu'),
                'nama_sejahtera' => $request->input('nama_sejahtera'),
            ]);



            /**
             * File
             */
            $file_update = [];
            if ($request->hasFile('file_kk')) {
                $pdf_kk = $request->file('file_kk');
                $file_update['file_kk'] = $pdf_kk->store('file/kk', 'public');
            }
            if ($request->hasFile('file_akta_kelahiran')) {
                $pdf_akta = $request->file('file_akta_kelahiran');
                $file_update['file_akta_kelahiran'] = $pdf_akta->store('file/akta', 'public');
            }
            if ($request->hasFile('file_ktp_ortu')) {
                $pdf_ktp = $request->file('file_ktp_ortu');
                $file_update['file_ktp_ortu'] = $pdf_ktp->store('file/ktp', 'public');
            }
            if ($request->hasFile('file_ijazah_tk')) {
                $pdf_ijazah = $request->file('file_ijazah_tk');
                $file_update['file_ijazah_tk'] = $pdf_ijazah->store('file/ijazah', 'public');
            }

            File::where('data_pribadi_id', $siswa->data_pribadi_id)->update($file_update);



            /**
             * Update data siswa
             */
            DataPribadi::where('id', $siswa->data_pribadi_id)->update([
                'isAccepted' => null,
                'isVerificated' => 0
            ]);

            return back();
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $profile = array();
        $siswa = Siswa::where('id', $request->id)->first();

        // Check if the email has been updated
        if ($request->email === $siswa->email) {
            if ($request->no_tlp) {
                $profile['no_tlp'] = $request->no_tlp;
            }
            if ($request->no_hp) {
                $profile['no_hp'] = $request->no_hp;
            }
            if ($request->password) {
                $profile['password'] = Hash::make($request->password);
            }

            Siswa::where('id', $request->id)->update($profile);

            return view('student.pages.profile-siswa-ppdb', ['profile' => $profile, 'siswa' => $siswa]);
        } else {
            $count = Siswa::where('sekolah_id', $request->sekolah_id)->where('email', $request->email)->count();
            if ($count > 0) {
                return redirect()->back()->with('error', 'Terdapat email yang sama. Daftarkan dengan email lain');
            } else {
                if ($request->no_tlp) {
                    $profile['no_tlp'] = $request->no_tlp;
                }
                if ($request->no_hp) {
                    $profile['no_hp'] = $request->no_hp;
                }
                if ($request->email) {
                    $profile['email'] = $request->email;
                }
                if ($request->password) {
                    $profile['password'] = Hash::make($request->password);
                }

                Siswa::where('id', $request->id)->update($profile);

                $siswa = Siswa::find(auth()->guard('siswa')->id());
                return view('student.pages.profile-siswa-ppdb', ['profile' => $profile, 'siswa' => $siswa]);
            }
        }
    }

    public function updateVerificated(Request $request, DataPribadi $siswa)
    {
        if ($request->isVerificated == 'true') {
            $siswa->update([
                'isVerificated' => true
            ]);
            return back()
                ->with('status', 'success')
                ->with('message', 'Peserta Didik Telah Terverifikasi');
        } elseif ($request->isVerificated == 'false') {

            $request->validate([
                'saran_perbaikan' => 'required'
            ]);

            $siswa->update([
                'isVerificated' => false,
                'saran_perbaikan' => $request->saran_perbaikan
            ]);

            return back()
                ->with('status', 'success')
                ->with('message', 'Saran Perbaikan Telah Terkirim');
        } else {
            return back()
                ->with('status', 'error')
                ->with('message', 'Gagal memverifikasi');
        }
    }

    public function penerimaan()
    {
        $peserta_didiks = DataPribadi::where('sekolah_id', Auth::id())->where('isVerificated', 1)->where('isAccepted', null)->get();
        return view('peserta-didik.penerimaan', compact('peserta_didiks'));
    }

    public function updateAccepted(Request $request)
    {
        $checkedIds = $request->input('checked');

        if (is_array($checkedIds) && count($checkedIds) > 0) {
            DataPribadi::where('sekolah_id', Auth::id())->whereIn('id', $checkedIds)->update(['isAccepted' => true]);

            // Kirim email ke siswa yang diperbarui
            foreach ($checkedIds as $id) {
                $siswa = Siswa::find($id); // Ganti 'Siswa' dengan nama model Anda jika berbeda
                $sekolah = $siswa->sekolah->nama_sekolah;
                if ($siswa && $siswa->email) {
                    $details = [
                        'title' => 'Selamat, Anda Telah Diterima Menjadi Peserta Didik' . $sekolah,
                        'body' => 'Selamat kepada' . $siswa->dataPribadi->nama . 'telah diterima untuk menempuh pendidikan di' . $sekolah . '. Informasi lebih lanjut dapat dilihat pada'
                    ];
                    Mail::to($siswa->email)->send(new \App\Mail\SendEmail($details));
                }
            }
            return response()->json([
                'status' => 'success',
            ], 200);
        } else {
            return response()->json([
                'status' => 'failed',
            ], 200);
        }
    }


    public function destroy(Siswa $siswa)
    {
        //
    }

    public function calinPesertaDidik()
    {
    }
}
