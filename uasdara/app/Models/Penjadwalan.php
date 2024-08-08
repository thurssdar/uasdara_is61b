<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Penjadwalan extends Model
{
    public function matakuliahs(){
        return $this->hasOne(MataKuliah::class,'id','matakuliahs_id');
    }

    public function dosens(){
        return $this->hasOne(Dosen::class,'id','dosens_id');
    }

    public function semesters(){
        return $this->hasOne(Semester::class,'id','semesters_id');
    }

    public function tahunajars(){
        return $this->hasOne(TahunAjar::class,'id','tahunajars_id');
    }

    public function mahasiswas(){
        return $this->hasOne(Mahasiswa::class,'id','mahasiswas_id');
    }

}
