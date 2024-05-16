<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'email',
    ];
    protected $uniqueConstraints = ['
    no_hp', 
    'email',
];
}
