<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTigabelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tigabelas', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->text('alamat');
            $table->string('pendidikan');
            $table->string('warga_negara');
            $table->string('agama');
            $table->string('penghasilan');
            $table->string('status_pasangan');
            $table->string('nama_pasangan')->nullable();
            $table->string('penghasilan_pasangan')->nullable();
            $table->string('tanggungan');
            $table->string('anak_tanggungan');
            $table->string('anak_tanggungan_1')->nullable();
            $table->string('anak_tanggungan_2')->nullable();
            $table->string('anak_tanggungan_3')->nullable();
            $table->string('anak_tanggungan_4')->nullable();
            $table->string('anak_tanggungan_5')->nullable();
            $table->string('anak_tanggungan_6')->nullable();
            $table->string('anak_tanggungan_7')->nullable();
            $table->string('anak_tanggungan_8')->nullable();
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
        Schema::dropIfExists('surat_tigabelas');
    }
}
