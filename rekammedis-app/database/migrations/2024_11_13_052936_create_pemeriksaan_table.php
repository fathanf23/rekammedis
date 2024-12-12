<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanTable extends Migration
{
    public function up()
    {
        Schema::create('pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->string('status_periksa', 45);
            $table->string('keterangan_tambahan', 255)->nullable();
            $table->double('harga_akhir')->nullable();
            $table->string('anemnesa', 45)->nullable();
            $table->string('alergi', 45)->nullable();
            $table->foreignId('pendaftaran_id')->constrained('pendaftaran')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemeriksaan');
    }
}

