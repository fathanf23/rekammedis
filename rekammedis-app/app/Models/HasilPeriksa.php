<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPeriksa extends Model
{
    use HasFactory;
    protected $table = "hasil_periksa";
    protected $fillable = ['layanan_id', 'diagnosa_id', 'pemeriksaan_id'];
    public $timestamps = false;

    public function diagnosa()
    {
        return $this->belongsTo(Diagnosa::class);
    }
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
    public function periksa()
    {
        return $this->belongsTo(Pemeriksaan::class);
    }
}
