<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adkrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_mhs');
            $table->Integer('id_matkul');
            $table->string('nama_matkul');
            $table->Integer('id_dosen');
            $table->string('hari');
            $table->Integer('pukul');
            $table->Integer('id_ruang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adkrs');
    }
};
