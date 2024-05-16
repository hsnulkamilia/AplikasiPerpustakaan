<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'edisi',
        'no_rak',
        'tahun',
        'penerbit',
        'kd_penulis'
    ];

    public $timestamps = true;
}