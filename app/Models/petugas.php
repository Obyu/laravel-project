<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    protected $table='petugas';
    protected $fillable = [
        'nama_petugas',
        'username',
        'password',
        'level',
        'telp'
    ];

    public function tanggapan(){
        return $this->hasMany(tanggapan::class,'id_petugas','id_petugas');
    }
}
