<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanksi extends Model
{
    protected $primaryKey = 'id_sanksi';

    protected $table = 'sanksi';
    protected $fillable = [
        'id_anggota',
        'id_peminjaman',
        'jumlah_denda',
        'status'
    ];

    public function anggota(){
        return $this->belongsTo(Sanksi::class, 'id_anggota');
    }
}
