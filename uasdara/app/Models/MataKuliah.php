<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class MataKuliah extends Model
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'matakuliahs';
    protected $primaryKey = 'id';

    public function matakuliahs(){
        return $this->hasOne(MataKuliah::class,'id','matakuliahs_id');
    }

    public function dosens(){
        return $this->hasOne(Dosen::class,'id','dosens_id');
    }

    public function penjadwalans(){
        return $this->hasOne(Penjadwalan::class,'id','penjadwalans_id');
    }
}

