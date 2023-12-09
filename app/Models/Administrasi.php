<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;
    protected $casts = ['tanggal' => 'date:d-m-y'];
    public $timestamps = false;

    public function pasien() 
    {
        return $this->belongsTo(Pasien:: class);
    }

    public function dokter()

    {
        return $this->belongsTo(Dokter::class);
    }
}
