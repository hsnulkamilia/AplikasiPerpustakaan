<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $primaryKey = 'id_peminjaman';

    protected $table = 'peminjaman';
    protected $fillable = [
        'no_buku',
        'id_anggota',
        'tgl_peminjaman',
        'tgl_pengembalian',
        'status',
    ];

    public function anggota(){
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    public function dataTambahanSanksi(){
        return $this->hasOne(Peminjaman::class,'id_peminjaman');
    }
}
