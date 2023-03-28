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

    // public function getTotalPesertaDidikAttribute(){
    //     return PesertaDidik::whereHas('dataPribadi', function($q){
    //         $q->where('sekolah_id', $this->id);
    //     })->count();
    // }

    // public function getPesertaDidikBelumTervalidasiAttribute(){
    //     return PesertaDidik::whereHas('siswa', function($q){
    //         $q->where('sekolah_id', $this->id);
    //     })
    //     ->where('status',false)
    //     ->count();
    // }

    // public function getPesertaDidikTervalidasiAttribute(){
    //     return PesertaDidik::whereHas('siswa', function($q){
    //         $q->where('sekolah_id', $this->id);
    //     })
    //     ->where('status',true)
    //     ->count();
    // }

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
