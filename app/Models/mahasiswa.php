<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable = [
        'nim',
        'nama',
        'alamat',
        'jenis_kelamin'
    ];

    public function nilai()
    {
        return $this->belongsTo(nilai::class, 'nilai_id');
    }
}
