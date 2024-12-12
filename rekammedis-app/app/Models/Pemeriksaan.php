<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'pemeriksaan';
    protected $fillable = ['status_periksa', 'keterangan_tambahan', 'harga_akhir', 'anamnesia', 'alergi', 'pendaftaran_id'];
    public function pendaftaran(){
        return $this->belongsTo(Pendaftaran::class);
    }
    public function hasilPeriksa()
{
    return $this->hasMany(HasilPeriksa::class);
}
}
