<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sekolah';

    protected $fillable = [
        'nama_sekolah',
        'alamat_sekolah',
        'tlp_sekolah',
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];

    public function dataPribadi()
    {
        return $this->hasMany(DataPriba::class, 'sekolah_id', 'id');
    }
}
