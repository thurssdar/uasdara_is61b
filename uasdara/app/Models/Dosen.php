<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dosen extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dosens';
    protected $primaryKey = 'id';

    public function penjadwalans(){
        return $this->belongTo(Penjadwalan::class);
    }
}
