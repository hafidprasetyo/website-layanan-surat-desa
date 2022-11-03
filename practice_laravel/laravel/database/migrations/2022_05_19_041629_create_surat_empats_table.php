<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratEmpatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_empats', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->text('alamat');
            $table->string('pendidikan');
            $table->string('warga_negara');
            $table->string('agama');
            $table->string('no_dokumen')->nullable();
            $table->string('nama_bayi');
            $table->string('jenis_kelamin');
            $table->string('tempat_dilahirkan');
            $table->string('tempat_kelahiran');
            $table->string('tanggal');
            $table->string('waktu');
            $table->string('jenis_kelahiran');
            $table->string('kelahiran_ke');
            $table->string('penolong_kelahiran');
            $table->string('berat_bayi');
            $table->string('panjang_bayi');
            $table->string('status_ayah');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('tempat_lahir_ayah')->nullable();
            $table->string('tanggal_lahir_ayah')->nullable();
            $table->string('kewarganegaraan_ayah')->nullable();
            $table->string('status_ibu');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('tempat_lahir_ibu')->nullable();
            $table->string('tanggal_lahir_ibu')->nullable();
            $table->string('kewarganegaraan_ibu')->nullable();
            $table->string('saksi_satu');
            $table->string('saksi_dua');
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
        Schema::dropIfExists('surat_empats');
    }
}
