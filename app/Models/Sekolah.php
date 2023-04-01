<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Sekolah extends Authenticatable
{
    use SoftDeletes;
    use HasFactory, Notifiable;

    protected $guard = 'sekolah';
    protected $table = 'sekolah';

    protected $fillable = [
        'nama_sekolah',
        'alamat_sekolah',
        'tlp_sekolah',
        'email',
        'password',
        'gambar',
        'file_persyaratan',
        'status'
    ];

    protected $hidden = [
        'password'
    ];

    public function dataPribadi()
    {
        return $this->hasMany(DataPribadi::class, 'sekolah_id', 'id');
    }

    public function siswa(){
        return $this->hasMany(Siswa::class, 'sekolah_id');
    }

    public function getTotalPesertaDidikAttribute(){
        return $this->dataPribadi->count();
    }

    public function getPesertaBelumTervalidasiAttribute(){
        return $this->dataPribadi->where('isVerificated', false)->count();
    }

    public function getPesertaTervalidasiAttribute(){
        return $this->dataPribadi->where('isVerificated', true)->count();
    }

    public function getStatusStringAttribute(){
        if($this->status == true){
            return 'Aktif';
        } else {
            return 'Tidak Aktif';
        }
    }

    public function getStatusBadgeAttribute(){
        if($this->status == true){
            return 'badge-success';
        } else {
            return 'badge-danger';
        }
    }
}
