<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDataPribadi as DataPribadi;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validateDataPribadi = $request->validate([
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
        ]);

        $validatePeriodik = $request->validate([
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'lingkar_kepala' => 'required',
            'jarak' => 'required',
            'km' => 'required',
            'waktu_tempuh' => 'required',
            'jumlah_saudara' => 'required',
        ]);

        $validateDataAyah = $request->validate([
            'nama_ayah' => 'required',
            'nik_ayah' => 'required',
            'tahun_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'berkebutuhan_khusus_ayah' => 'required',
        ]);

        $validateDataIbu = $request->validate([
            'nama_ibu' => 'required',
            'nik_ibu' => 'required',
            'tahun_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'berkebutuhan_khusus_ibu' => 'required',
        ]);

        $validateDataWali = $request->validate([
            'nama_wali' => 'nullable',
            'nik_wali' => 'nullable',
            'tahun_wali' => 'nullable',
            'pendidikan_wali' => 'nullable',
            'pekerjaan_wali' => 'nullable',
            'penghasilan_wali' => 'nullable',
            'berkebutuhan_khusus_wali' => 'nullable',
        ]);

        $validateBeasiswa = $request->validate([
            'jenis_anak_berprestasi' => 'nullable',
            'keterangan' => 'nullable',
            'tahun_mulai' => 'nullable',
            'tahun_selesai' => 'nullable',
        ]);

        $validateKesejahteraan = $request->validate([
            'jenis_kesejahteraan' => 'nullable',
            'no_kartu' => 'nullable',
            'nama' => 'nullable',
        ]);

        $validateKesejahteraan = $request->validate([
            'nama_prestasi' => 'nullable',
            'tahun' => 'nullable',
            'penyelenggara' => 'nullable',
            'jenis_prestasi' => 'nullable',
            'tingkat' => 'nullable',
        ]);

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
