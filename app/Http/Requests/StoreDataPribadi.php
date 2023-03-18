<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataPribadi extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'nama_lengkap' => 'required',
            'gender' => 'required',
            'nisn' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'akta_kelahiran' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'negara' => 'required',
            'berkebutuhan_khusus' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
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
        ];

        return $rules;
    }
}
