<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratDuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_duas', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->text('alamat');
            $table->string('pendidikan');
            $table->string('warga_negara');
            $table->string('agama');
            $table->string('jenis_permohonan');
            $table->string('negara_tujuan')->nullable();
            $table->string('kode_negara')->nullable();
            $table->string('alamat_tujuan')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->string('rencana_pindah')->nullable();
            $table->string('nama_sponsor')->nullable();
            $table->string('tipe_sponsor')->nullable();
            $table->string('alamat_sponsor')->nullable();
            $table->string('nomor')->nullable();
            $table->string('tanggal_masa')->nullable();
            $table->string('lokasi_pindah');
            $table->string('alamat_tujuan_1');
            $table->string('provinsi_tujuan');
            $table->string('kabupaten_tujuan');
            $table->string('kecamatan_tujuan');
            $table->string('kelurahan_tujuan');
            $table->string('dusun_tujuan');
            $table->string('rw_tujuan');
            $table->string('rt_tujuan');
            $table->string('kode_pos');
            $table->string('telepon');
            $table->string('alasan_pindah');
            $table->string('lainnya')->nullable();
            $table->string('jenis_kepindahan');
            $table->string('statuskk_tidakpindah');
            $table->string('statuskk_pindah');
            $table->string('keluarga_pindah');
            $table->string('keluarga_pindah_1')->nullable();
            $table->string('keluarga_pindah_2')->nullable();
            $table->string('keluarga_pindah_3')->nullable();
            $table->string('keluarga_pindah_4')->nullable();
            $table->string('keluarga_pindah_5')->nullable();
            $table->string('keluarga_pindah_6')->nullable();
            $table->string('keluarga_pindah_7')->nullable();
            $table->string('keluarga_pindah_8')->nullable();
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
        Schema::dropIfExists('surat_duas');
    }
}
