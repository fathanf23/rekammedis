<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';
    protected $fillable = ['no_pendaftaran', 'keluhan', 'riwayat_rm', 'pembayaran'];
    public function pasien()
{
    return $this->belongsTo(Pasien::class);
}
public function pemeriksaan()
{
    return $this->belongsTo(Pemeriksaan::class);
}
}
