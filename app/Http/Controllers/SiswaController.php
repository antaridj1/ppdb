<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->guard('siswa')->daftar() == 0) {
           return view('student.pages.data-ppdb', ['id' => auth()->guard('siswa')->sekolah_id()]);
        } else {
            $dataPribadi = DataPribadi::where('siswa_id', auth()->guard('siswa')->id())->
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
                'waktu_tempuh' => 'required',
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
                'nama_wali' => 'nullable',
                'nik_wali' => 'nullable',
                'tahun_wali' => 'nullable',
                'pendidikan_wali' => 'nullable',
                'pekerjaan_wali' => 'nullable',
                'penghasilan_wali' => 'nullable',
                'berkebutuhan_khusus_wali' => 'nullable',
            ], [
                //data beasiswa
                'jenis_anak_berprestasi*' => 'nullable',
                'keterangan*' => 'nullable',
                'tahun_mulai*' => 'nullable',
                'tahun_selesai*' => 'nullable',
            ],[
                //data prestasi
                'nama_prestasi_.*' => 'nullable',
                'tahun*' => 'nullable',
                'penyelenggara*' => 'nullable',
                'jenis_prestasi*' => 'nullable',
                'tingkat*' => 'nullable',
            ], [
                //data kesejahteraan
                'jenis_kesejahteraan' => 'nullable',
                'no_kartu' => 'nullable',
                'nama' => 'nullable',
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
                'nama_lengkap' => $request->nama_lengkap,
                'gender' => $request->gender,
                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'kk' => $request->kk,
                'tempat_lahir' => $request->tenpat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'akta_kelahiran' => $request->akta_kelahiran,
                'agama' => $request->agama,
                'kewarganegaraan' => $request->kewarganegaraan,
                'negara' => $request->negara,
                'berkebutuhan_khusus' => $request->berkebutuhan_khusus,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'dusun' => $request->dusun,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kode_pos' => $request->kode_pos,
                'lintang' => $request->lintang,
                'bujur' => $request->bujur,
                'tempat_tinggal' => $request->tempat_tinggal,
                'moda_tranportasi' => $request->moda_transport,
                'anak_ke' => $request->anak_ke,
                'kip' => $request->kip,
                'menerima_kip' => $request->menerima_kip,
                'pip' => $request->pip,
            ]);

            $id_datapribadi = $dataPribadi->id;
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        try{
            $dataPeriodik = DataPeriodik::create([
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
                'lingkar_kepala' => $request->lingkar_kepala,
                'jarak' => $request->jarak,
                'km' => $request->km,
                'waktu_tempuh' => $request->waktu_tempuh,
                'jumlah_saudara' => $request->jumlah_saudara,
            ]);

            $id_dataperiodik = $dataPeriodik->id;
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        try{
            $dataAyah = DataAyah::create([
                'nama_ayah' => $request->nama_ayah,
                'nik_ayah' => $request->nik_ayah,
                'tahun_ayah' => $request->tahun_ayah,
                'pendidikan_ayah' => $request->pendidikan_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'penghasilan_ayah' => $request->penghasilan_ayah,
                'berkebutuhan_khusus_ayah' => $request->berkebutuhan_khusus_ayah
            ]);

            $id_dataayah = $dataAyah->id;
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        try{
            $dataIbu= DataIbu::create([
                'nama_ibu' => $request->nama_ibu,
                'nik_ibu' => $request->nik_ibu,
                'tahun_ibu' => $request->tahun_ibu,
                'pendidikan_ibu' => $request->pendidikan_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'penghasilan_ibu' => $request->penghasilan_ibu,
                'berkebutuhan_khusus_ibu' => $request->berkebutuhan_khusus_ibu
            ]);

            $id_dataibu = $dataIbu->id;
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        //data wali
        try{
            $dataWali= DataWali::create([
                'nama_wali' => $request->nama_wali,
                'nik_wali' => $request->nik_wali,
                'tahun_wali' => $request->tahun_wali,
                'pendidikan_wali' => $request->pendidikan_wali,
                'pekerjaan_wali' => $request->pekerjaan_wali,
                'penghasilan_wali' => $request->penghasilan_wali,
                'berkebutuhan_khusus_wali' => $request->berkebutuhan_khusus_wali
            ]);

            $id_datawali = $dataWali->id;
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        //beasiswa
        try{
            if($request->beasiswa){
                $id_databeasiswa = array();
                foreach($request->beasiswa as $beasiswa){
                    $dataBeasiswa = Beasiswa::create([
                        'jenis_anak_berprestasi' => $request->jenis_anak_berprestasi,
                        'keterangan' => $request->keterangan,
                        'tahun_mulai' => $request->tahun_mulai,
                        'tahun_selesai' => $request->tahun_selesai
                    ]);
                $id_databeasiswa[] = $dataBeasiswa->id;
                }
            }

        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        //prestasi
        try{
            if($request->prestasi){
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
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        //kesejahteraan
        try{
            $dataKesejahteraan = Kesejahteraan::create([
                'jenis_kesejahteraan' => $request->jenis_kesejahteraan,
                'no_kartu' => $request->no_kartu,
                'nama' => $request->nama,
            ]);

            $id_datakesejahteraan = $dataKesejahteraan->id;
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        //peserta didik
        try{
            $dataPesertaDidik = PesertaDidik::create([
                'data_pribadi_id' => $id_datapribadi,
                'data_ayah_id' => $id_dataayah,
                'data_ibu_id' => $id_dataibu,
                'data_wali' => $id_datawali,
                'siswa_id' => auth()->guard('siswa')->id()
            ]);

            $id_pesertadidik = $dataPesertaDidik;
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        //detail peserta didik
        try{
            $dataDetailPesertaDidik = DetailPesertaDidik::create([
                'data_periodik_id'=> $id_dataperiodik,
                'prestasi_id' => $id_dataprestasi,
                'beasiswa_id' => $id_databeasiswa,
                'kesejahteraan_id' => $id_datakesejahteraan,
                'siswa_id' => auth()->guard('siswa')->id()
            ]);

            $id_detailpesertadidik = $dataDetailPesertaDidik;
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        try{
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
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        try{
            PPDB::create([
                'sekolah_id' => $request->sekolah_id,
                'peserta_didik_id' => $id_pesertadidik,
                'detail_peserta_didik_id' => $id_detailpesertadidik,
                'file_id' => $id_file,
            ]);
        } catch (\Exception $e) {
            Log::error('eror message: ' . $e->getMessage() . 'in line: ' . $e->getLine());
        }

        Siswa::where('id', auth()->guard('siswa')->id())->update(['daftar' => 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
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
        //
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
