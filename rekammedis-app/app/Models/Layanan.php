<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $fillable = ['nm_layanan', 'harga_layanan'];
    public $timestamps = false;

    public function hasil_periksa()
    {
        return $this->belongsToMany(HasilPeriksa::class);
    }

}
