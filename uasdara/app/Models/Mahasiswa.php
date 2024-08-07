<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mahasiswa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $guard = 'mahasiswa';
    protected $table = 'mahasiswas';
    protected $primaryKey = 'id';

    public function penjadwalans(){
        return $this->belongTo(Penjadwalan::class,'id','penjadwalans_id');
    }
    public function tahunajars(){
        return $this->hasOne(TahunAjar::class,'id','tahunajars_id');
    }
    public function semesters(){
        return $this->hasOne(Semester::class,'id','semesters_id');
    }
}
