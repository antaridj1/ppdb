<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Siswa;
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

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::getDefaultDriver() !== 'admin'){
            // Untuk Wali
            $id = auth()->guard('siswa')->id();
            $siswa = Siswa::find($id);
            if( $siswa->daftar == 0) {
                return view('student.pages.data-ppdb', ['id' => $siswa->sekolah_id, 'daftar' => 0]);
            } else {
                $pesertaDidik = PesertaDidik::where('siswa_id', $id)->first();
                $detailPesertaDidik = DetailPesertaDidik::where('siswa_id', $id)->first();
                $file = File::where('siswa_id', $id)->first();

                return view('student.pages.data-ppdb',
                    ['pesertaDidik' => $pesertaDidik, 'detailPesertaDidik' => $detailPesertaDidik, 'file' => $file, 'daftar' => '1']
                );
            }
        } else {
            $sekolahs = null;
            if(roleController('admin')){
                $sekolahs = Sekolah::all();
                 // Untuk admin
                if($request->sdn){
                    $siswas = PesertaDidik::whereHas('siswa', function($q) use($request){
                        $q->where('sekolah_id', $request->sdn);
                    })->get();

                } else {
                    $siswas = PesertaDidik::all();
                }

            } else {
                // Untuk Sekolah
                $siswas = PesertaDidik::whereHas('siswa', function($q){
                    $q->where('sekolah_id', Auth::id());
                })->get();
            }

            return view('peserta-didik.index', compact('siswas', 'sekolahs'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'moda_tranportasi' => 'required',
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
            ],[
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

        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }


        try {
            $dataPribadi = DataPribadi::create([
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
            $dataPeriodik = DataPeriodik::create([
                'tinggi_badan' => $request->input('tinggi_badan'),
                'berat_badan' => $request->input('berat_badan'),
                'lingkar_kepala' => $request->input('lingkar_kepala'),
                'jarak' => $request->input('jarak'),
                'km' => $request->input('km'),
                'waktu_tempuh' => $request->input('waktu_tempuh_jam') ." jam ". $request->input('waktu_tempuh_menit') . " menit",
                'jumlah_saudara' => $request->input('jumlah_saudara'),
            ]);

            $id_dataperiodik = $dataPeriodik->id;

            /**
             * Data Ayah
             */

             $dataAyah = DataAyah::create([
                'nama_ayah' => $request->input('nama_ayah'),
                'nik_ayah' => $request->input('nik_ayah'),
                'tahun_ayah' => $request->input('tahun_ayah'),
                'pendidikan_ayah' => $request->input('pendidikan_ayah'),
                'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                'penghasilan_ayah' => $request->input('penghasilan_ayah'),
                'berkebutuhan_khusus_ayah' => $request->input('berkebutuhan_khusus_ayah')
            ]);

            $id_dataayah = $dataAyah->id;

            /**
             * Data Ibu
             */

            $dataIbu= DataIbu::create([
                'nama_ibu' => $request->input('nama_ibu'),
                'nik_ibu' => $request->input('nik_ibu'),
                'tahun_ibu' => $request->input('tahun_ibu'),
                'pendidikan_ibu' => $request->input('pendidikan_ibu'),
                'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
                'penghasilan_ibu' => $request->input('penghasilan_ibu'),
                'berkebutuhan_khusus_ibu' => $request->input('berkebutuhan_khusus_ibu')
            ]);

            $id_dataibu = $dataIbu->id;

            /**
             * Data Wali
             */
            if($request->input('nama_wali')){
                $dataWali= DataWali::create([
                'nama_wali' => $request->input('nama_wali'),
                'nik_wali' => $request->input('nik_wali'),
                'tahun_wali' => $request->input('tahun_wali'),
                'pendidikan_wali' => $request->input('pendidikan_wali'),
                'pekerjaan_wali' => $request->input('pekerjaan_wali'),
                'penghasilan_wali' => $request->input('penghasilan_wali'),
            ]);
            }

            $id_datawali = $dataWali->id;

            /**
             * Beasiswa
             */
            $id_databeasiswa = null;
            if($request->input('beasiswa')){
                $id_databeasiswa = array();
                foreach($request->input('beasiswa') as $beasiswa){
                    $dataBeasiswa = Beasiswa::create([
                        'jenis_anak_berprestasi' => $beasiswa['jenis_anak_berprestasi'],
                        'keterangan' => $beasiswa['keterangan'],
                        'tahun_mulai' => $beasiswa['tahun_mulai'],
                        'tahun_selesai' => $beasiswa['tahun_selesai']
                    ]);
                $id_databeasiswa[] = $dataBeasiswa->id;
                }
            }

            /**
             * Prestasi
             */

             $id_dataprestasi = null;
             if($request->input('prestasi')){
                $id_dataprestasi = array();
                foreach($request->prestasi as $prestasi){
                    $dataPrestasi = Prestasi::create([
                        'nama_prestasi' => $prestasi['nama_prestasi'],
                        'tahun' => $prestasi['tahun'],
                        'penyelenggara' => $prestasi['penyelenggara'],
                        'jenis_prestasi' => $prestasi['jenis_prestasi'],
                        'tingkat' => $prestasi['tingkat'],
                    ]);
                    $id_dataprestasi[] = $dataPrestasi->id;
                }
            }

            /**
             * Kesejahteraan
             */

             $dataKesejahteraan = Kesejahteraan::create([
                'jenis_kesejahteraan' => $request->input('jenis_kesejahteraan'),
                'no_kartu' => $request->input('no_kartu'),
                'nama_sejahtera' => $request->input('nama_sejahtera'),
            ]);

            $id_datakesejahteraan = $dataKesejahteraan->id;


            /**
             * File
             */
            if($request->hasFile('file_kk')){
                $pdf_kk = $request->file('file_kk');
                $name_kk = uniqid() . '.' . $pdf_kk->getClientOriginalExtension();
            }
            if($request->hasFile('file_akta_kelahiran')){
                $pdf_akta = $request->file('file_akta_kelahiran');
                $name_akta = uniqid() . '.' . $pdf_akta->getClientOriginalExtension();
            }
            if($request->hasFile('file_ktp_ortu')){
                $pdf_ktp = $request->file('file_ktp_ortu');
                $name_ktp = uniqid() . '.' . $pdf_ktp->getClientOriginalExtension();
            }
            if($request->hasFile('file_ktp_ortu')){
                $pdf_ijazah = $request->file('file_ijazah_tk');
                $name_ijazah = uniqid() . '.' . $pdf_ijazah->getClientOriginalExtension();
            }

            $file = File::create([
                'file_kk' => $name_kk,
                'file_akta_kelahiran' => $name_akta,
                'file_ktp_ortu' => $name_ktp,
                'file_ijazah_tk' => $name_ijazah,
                'siswa_id' => auth()->guard('siswa')->id()
            ]);

            $pdf_kk->storeAs('public/file/kk', $name_kk);
            $pdf_akta->storeAs('public/file/akta', $name_akta);
            $pdf_ktp->storeAs('public/file/ktp', $name_ktp);
            $pdf_ijazah->storeAs('public/file/ijazah', $name_ijazah);

            $id_file = $file->id;

            /**
             * Peserta Didik
             */

             $dataPesertaDidik = PesertaDidik::create([
                'data_pribadi_id' => $id_datapribadi,
                'data_ayah_id' => $id_dataayah,
                'data_ibu_id' => $id_dataibu,
                'data_wali' => $id_datawali,
                'siswa_id' => auth()->guard('siswa')->id()
            ]);

            $id_pesertadidik = $dataPesertaDidik;

            /**
             * Detail Peserta Didik
             */

             $dataDetailPesertaDidik = DetailPesertaDidik::create([
                'data_periodik_id'=> $id_dataperiodik,
                'prestasi_id' => $id_dataprestasi,
                'beasiswa_id' => $id_databeasiswa,
                'kesejahteraan_id' => $id_datakesejahteraan,
                'siswa_id' => auth()->guard('siswa')->id()
            ]);

            $id_detailpesertadidik = $dataDetailPesertaDidik;

            /**
             * PPDB
             */
            PPDB::create([
                'sekolah_id' => $request->input('sekolah_id'),
                'peserta_didik_id' => $id_pesertadidik,
                'detail_peserta_didik_id' => $id_detailpesertadidik,
                'file_id' => $id_file,
            ]);

            Siswa::where('id', $siswa->id)->update(['daftar' => 1]);

        return view('student.pages.data-ppdb');
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
        if(Auth::getDefaultDriver() !== 'admin'){
            // untuk wali
            $id = auth()->guard('siswa')->id();

            $profile = Siswa::find($id);
            return view('student.pages.profile-siswa-ppdb', ['profile' => $profile]);
        }else {
            return view('peserta-didik.show', compact('siswa'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
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
            if($request->no_tlp){
                $profile['no_tlp'] = $request->no_tlp;
            }
            if($request->no_hp){
                $profile['no_hp'] = $request->no_hp;
            }
            if($request->password){
                $profile['password'] = Hash::make($request->password);
            }

            Siswa::where('id', $request->id)->update($profile);

            return view('student.pages.profile-siswa-ppdb', ['profile' => $profile]);

        } else {
            $count = Siswa::where('sekolah_id', $request->sekolah_id)->where('email', $request->email)->count();
            if($count > 0) {
                return redirect()->back()->with('error', 'Terdapat email yang sama. Daftarkan dengan emil lain');
            } else {
                if($request->no_tlp){
                    $profile['no_tlp'] = $request->no_tlp;
                }
                if($request->no_hp){
                    $profile['no_hp'] = $request->no_hp;
                }
                if($request->email){
                    $profile['email'] = $request->email;
                }
                if($request->password){
                    $profile['password'] = Hash::make($request->password);
                }

                Siswa::where('id', $request->id)->update($profile);

                return view('student.pages.profile-siswa-ppdb', ['profile' => $profile]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
