<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratSembilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_sembilans', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('provinsi_asal');
            $table->string('kabupaten_asal');
            $table->string('kecamatan_asal');
            $table->string('kelurahan_asal');
            $table->string('dusun_asal');
            $table->string('rw_asal');
            $table->string('rt_asal');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('dusun_domisili');
            $table->string('rw_domisili');
            $table->string('rt_domisili');
            $table->text('keterangan');
            $table->text('keterangan_lain')->nullable();
            $table->string('no_hp');
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
        Schema::dropIfExists('surat_sembilans');
    }
}
