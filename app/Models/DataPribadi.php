<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPribadi extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'nama_lengkap',
        'gender',
        'nisn',
        'nik',
        'kk',
        'tempat_lahir',
        'tgl_lahir',
        'akta_kelahiran',
        'agama',
        'kewarganegaraan',
        'negara',
        'berkebutuhan_khusus',
        'alamat',
        'rt',
        'rw',
        'dusun',
        'kelurahan',
        'kecamatan',
        'kode_pos',
        'lintang',
        'bujur',
        'tempat_tinggal',
        'moda_tranportasi',
        'anak_ke',
        'kip',
        'menerima_kip',
        'pip',
    ];

    public function pesertaDidik()
    {
        return $this->belongsTo(PesertaDidik::class, 'data_pribadi');
    }
}
