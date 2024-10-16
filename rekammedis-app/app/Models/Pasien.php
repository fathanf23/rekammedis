<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable = ['nm_pasien', 'no_hp', 'alamat', 'tgl_lahir'];
    public $timestamps = false;
    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
