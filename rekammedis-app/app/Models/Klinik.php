<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Klinik as Authenticatable;
use Laravel\Sanctum\HasApiTokens;


class Klinik extends Authenticatable
{
    use HasFactory, HasApiTokens;
    protected $table = "klinik";
    protected $fillable = ['username', 'password', 'alamat', 'no_admin_klinik'];
    public $timestamps = false;

}
