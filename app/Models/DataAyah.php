<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataAyah extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'data_ayah';

    protected $fillable = [
        'nama_ayah',
        'nik_ayah',
        'tahun_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'berkebutuhan_khusus_ayah',
        'data_pribadi_id'
    ];

    public function dataPribadi()
    {
        return $this->belongsTo(DataPribadi::class);
    }
}
