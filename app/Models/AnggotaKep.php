<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaKep extends Model
{
    protected $table = 'mst_anggota_kep';
    protected $fillable = ['kep_id', 'role', 'nama'];

    public function kep(){
        return $this->belongsTo(Kep::class, 'kep_id');
    }

    public function role(){
        return $this->belongsTo(Role::class, 'role');
    }
}
