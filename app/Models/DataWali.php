<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataWali extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'data_wali';

    protected $fillable = [
        'nama_wali',
        'nik_wali',
        'tahun_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'berkebutuhan_khusus_wali',
    ];

    public function pesertaDidik()
    {
        return $this->belongsTo(PesertaDidik::class, 'data_wali_id');
    }
}
