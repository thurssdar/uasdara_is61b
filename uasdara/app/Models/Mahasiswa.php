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
    protected $table = 'mahasiswas';
    protected $primaryKey = 'id';

    public function penjadwalans(){
        return $this->belongTo(Penjadwalan::class,'id','penjadwalans_id');
    }
}
