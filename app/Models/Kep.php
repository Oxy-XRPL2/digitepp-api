<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kep extends Model
{
    protected $table = 'mst_kep';

    protected $fillable = [
        'nama',
        'email',
        'telp',
        'nama_lembaga',
        'jenis_lembaga',
        'pemilik_lembaga',
        'alamat'
    ];

    public function lembaga(){
        return $this->belongsTo(Lembaga::class, 'nama_lembaga');
    }

    public function anggota(){
        return $this->hasMany(AnggotaKep::class, 'kep_id');
    }
}
