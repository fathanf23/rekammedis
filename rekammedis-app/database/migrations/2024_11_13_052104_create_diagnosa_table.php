<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosaTable extends Migration
{
    public function up()
    {
        Schema::create('diagnosa', function (Blueprint $table) {
            $table->id();
            $table->string('kd_diagnosa', 45);
            $table->string('diagnosa', 45);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diagnosa');
    }
}

