<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'file';

    protected $fillable =[
        'file_kk',
        'file_akta_kelahiran',
        'file_ktp_ortu',
        'file_ijazah_tk',
        'data_pribadi_id'
    ];

    public function dataPribadi()
    {
        return $this->belongsTo(DataPribadi::class);
    }
}
