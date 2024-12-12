<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran', 50);
            $table->string('keluhan', 45)->nullable();
            $table->string('riwayat_rm', 45)->nullable();
            $table->string('pembayaran', 45)->nullable();
            $table->foreignId('pasien_id')->constrained('pasien')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}

