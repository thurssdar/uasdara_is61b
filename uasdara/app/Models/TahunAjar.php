<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TahunAjar extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tahunajars';
    protected $primaryKey = 'id';

    public function mahasiswas(){
        return $this->hasOne(Mahasiswa::class,'id','mahasiswas_id');
    }

    public function penjadwalans(){
        return $this->hasOne(Penjadwalan::class,'id','penjadwalans_id');
    }
}
