<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'admin';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admins';
    protected $primaryKey = 'id';

    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class,'id','pakets_id');
    }

    public function dosen(){
        return $this->hasOne(Dosen::class,'pendaftars_id','id');
    }

    public function matakuliah(){
        return $this->hasOne(MataKuliah::class,'pendaftars_id','id');
    }

    public function semester(){
        return $this->hasOne(Semester::class,'pendaftars_id','id');
    }

    public function tahunajar(){
        return $this->hasOne(TahunAjar::class,'pendaftars_id','id');
    }
    public function penjadwalan(){
        return $this->hasOne(Penjadwalan::class,'pendaftars_id','id');
    }

}

