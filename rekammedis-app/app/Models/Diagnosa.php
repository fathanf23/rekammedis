<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $table = 'diagnosa';
    protected $fillable = ['kd_diagnosa', 'diagnosa'];
    public $timestamps = false;
    public function hasil_periksa()
    {
        return $this->hasOne(HasilPeriksa::class);
    }
}
