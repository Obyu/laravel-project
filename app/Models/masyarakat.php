<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class masyarakat extends Model
{
    protected $table='masyarakat';

    protected $primaryKey = 'nik'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 
    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp',
        'foto_profile'
    ];

	/**
	 * @return mixed
	 */
	public function getFillable() {
		return $this->fillable;
	}

    public function pengaduan(){
        return $this->hasMany(pengaduan::class, 'nik','nik');
    }
}
