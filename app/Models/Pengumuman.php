<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pengumuman';

    protected $fillable = [
        'judul',
        'pengumuman'
    ];
}
