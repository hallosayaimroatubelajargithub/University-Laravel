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
        Schema::create('adkhs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_mhs');
            $table->Integer('id_matkul');
            $table->string('nama_matkul');
            $table->Integer('sks');
            $table->string('grade_huruf');
            $table->float('ipk');
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
        Schema::dropIfExists('adkhs');
    }
};
