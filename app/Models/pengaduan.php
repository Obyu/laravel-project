<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pengaduan'; 
    protected $table = 'pengaduan';
    protected $fillable = [
        'id_pengaduan',
        'tgl_pengaduan',
        'nik',
        'isi_laporan',
        'foto',
        'status'
    ];

    public function masyarakat(){
        return $this->belongsTo(masyarakat::class, 'nik','nik');
    }
    public function tanggapan(){
        return $this->hasOne(tanggapan::class, 'id_pengaduan','id_pengaduan');
    }
}
