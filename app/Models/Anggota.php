<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $primaryKey = 'id_anggota';
    protected $table = 'anggota';
    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'email'
    ];

    public function dataTambahanPeminjaman(){
        return $this->hasOne(Anggota::class,'id_anggota');
    }

    public function dataTambahanSanksi(){
        return $this->hasOne(Anggota::class,'id_anggota');
    }
}
