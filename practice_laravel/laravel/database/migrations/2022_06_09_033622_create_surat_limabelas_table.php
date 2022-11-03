<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratLimabelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_limabelas', function (Blueprint $table) {
            $table->id();
            $table->text('data_pria_wargadesa');
            //data pasangan pria warga desa
            $table->text('nik_pria_wargadesa')->nullable();
            $table->text('nama_pria_wargadesa')->nullable();
            $table->text('status_pria_wargadesa')->nullable();
            //jejaka
            //duda
            $table->text('namaistri_pria_wargadesa')->nullable();
            //beristri
            $table->string('istri_ke_wargadesa')->nullable();
            //data pasangan pria luar desa
            $table->string('nik_pria_wargaluardesa')->nullable();
            $table->string('nama_pria_wargaluardesa')->nullable();
            $table->string('tempat_lahir_pria_wargaluardesa')->nullable();
            $table->string('tanggal_lahir_pria_wargaluardesa')->nullable();
            $table->string('warga_negara_pria_wargaluardesa')->nullable();
            $table->string('agama_pria_wargaluardesa')->nullable();
            $table->text('pekerjaan_pria_wargaluardesa')->nullable();
            $table->text('alamat_pria_wargaluardesa')->nullable();
            $table->text('status_pria_wargaluardesa')->nullable();
            //jejaka
            //duda
            $table->text('namaistri_pria_wargaluardesa')->nullable();
            //beristri
            $table->text('istri_ke_wargaluardesa')->nullable();
            //data ayah pasangan pria warga desa
            $table->text('data_ayahpria_wargadesa');
            $table->text('nik_ayahpria_wargadesa')->nullable();
            $table->text('nama_ayahpria_wargadesa')->nullable();
            //data ayah pasangan pria warga luar desa
            $table->text('nik_ayahpria_wargaluardesa')->nullable();
            $table->text('bin_ayahpria_wargaluardesa')->nullable();
            $table->text('nama_ayahpria_wargaluardesa')->nullable();
            $table->text('tempat_lahir_ayahpria_wargaluardesa')->nullable();
            $table->text('tanggal_lahir_ayahpria_wargaluardesa')->nullable();
            $table->text('warga_negara_ayahpria_wargaluardesa')->nullable();
            $table->text('agama_ayahpria_wargaluardesa')->nullable();
            $table->text('pekerjaan_ayahpria_wargaluardesa')->nullable();
            $table->text('alamat_ayahpria_wargaluardesa')->nullable();
            //data ibu pasangan pria warga desa
            $table->text('data_ibupria_wargadesa');
            $table->text('nik_ibupria_wargadesa')->nullable();
            $table->text('nama_ibupria_wargadesa')->nullable();
            //data ibu pasangan pria warga luar desa
            $table->text('nik_ibupria_wargaluardesa')->nullable();
            $table->text('binti_ibupria_wargaluardesa')->nullable();
            $table->text('nama_ibupria_wargaluardesa')->nullable();
            $table->text('tempat_lahir_ibupria_wargaluardesa')->nullable();
            $table->text('tanggal_lahir_ibupria_wargaluardesa')->nullable();
            $table->text('warga_negara_ibupria_wargaluardesa')->nullable();
            $table->text('agama_ibupria_wargaluardesa')->nullable();
            $table->text('pekerjaan_ibupria_wargaluardesa')->nullable();
            $table->text('alamat_ibupria_wargaluardesa')->nullable();
            // data pasangan wanita warga desa
            $table->text('data_wanita_wargadesa');
            $table->text('nik_wanita_wargadesa')->nullable();
            $table->text('nama_wanita_wargadesa')->nullable();
            $table->text('status_wanita_wargadesa')->nullable();
            // data pasangan wanita warga luar desa
            $table->text('nik_wanita_wargaluardesa')->nullable();
            $table->text('nama_wanita_wargaluardesa')->nullable();
            $table->text('tempat_lahir_wanita_wargaluardesa')->nullable();
            $table->text('tanggal_lahir_wanita_wargaluardesa')->nullable();
            $table->text('warga_negara_wanita_wargaluardesa')->nullable();
            $table->text('agama_wanita_wargaluardesa')->nullable();
            $table->text('pekerjaan_wanita_wargaluardesa')->nullable();
            $table->text('alamat_wanita_wargaluardesa')->nullable();
            $table->text('status_wanita_wargaluardesa')->nullable();
            // data ayah pasangan wanita warga desa
            $table->text('data_ayahwanita_wargadesa');
            $table->text('nik_ayahwanita_wargadesa')->nullable();
            $table->text('nama_ayahwanita_wargadesa')->nullable();
            // data ayah pasangan wanita luar desa
            $table->text('nik_ayahwanita_wargaluardesa')->nullable();
            $table->text('bin_ayahwanita_wargaluardesa')->nullable();
            $table->text('nama_ayahwanita_wargaluardesa')->nullable();
            $table->text('tempat_lahir_ayahwanita_wargaluardesa')->nullable();
            $table->string('tanggal_lahir_ayahwanita_wargaluardesa')->nullable();
            $table->string('warga_negara_ayahwanita_wargaluardesa')->nullable();
            $table->string('agama_ayahwanita_wargaluardesa')->nullable();
            $table->string('pekerjaan_ayahwanita_wargaluardesa')->nullable();
            $table->text('alamat_ayahwanita_wargaluardesa')->nullable();
            // data ibu pasangan wanita warga desa
            $table->string('data_ibuwanita_wargadesa');
            $table->string('nik_ibuwanita_wargadesa')->nullable();
            $table->string('nama_ibuwanita_wargadesa')->nullable();
            // data ibu pasangan wanita luar desa
            $table->string('nik_ibuwanita_wargaluardesa')->nullable();
            $table->string('binti_ibuwanita_wargaluardesa')->nullable();
            $table->string('nama_ibuwanita_wargaluardesa')->nullable();
            $table->string('tempat_lahir_ibuwanita_wargaluardesa')->nullable();
            $table->string('tanggal_lahir_ibuwanita_wargaluardesa')->nullable();
            $table->string('warga_negara_ibuwanita_wargaluardesa')->nullable();
            $table->string('agama_ibuwanita_wargaluardesa')->nullable();
            $table->string('pekerjaan_ibuwanita_wargaluardesa')->nullable();
            $table->text('alamat_ibuwanita_wargaluardesa')->nullable();
            //data wali nikah
            $table->string('nik_walinikah');
            $table->string('bin_walinikah');
            $table->string('nama_walinikah');
            $table->string('tempat_lahir_walinikah');
            $table->string('tanggal_lahir_walinikah');
            $table->string('warga_negara_walinikah');
            $table->string('agama_walinikah');
            $table->string('pekerjaan_walinikah');
            $table->text('alamat_walinikah');
            $table->string('hubungan_walinikah');
            //data pernikahan
            $table->string('hari_nikah');
            $table->string('tanggal_nikah');
            $table->string('jam_nikah');
            $table->string('tempat_nikah');
            //berkas tambahan1
            $table->string('berkas_tambahan_1');
            //surat kematian suami
            $table->string('nama_suami')->nullable();
            $table->string('nik_suami')->nullable();
            $table->string('tanggal_meninggal_suami')->nullable();
            $table->string('tempat_meninggal_suami')->nullable();
            //berkas tambahan2
            $table->string('berkas_tambahan_2');
            //surat kematian istri
            $table->string('nama_istri')->nullable();
            $table->string('nik_istri')->nullable();
            $table->string('tanggal_meninggal_istri')->nullable();
            $table->string('tempat_meninggal_istri')->nullable();
            //berkas tambahan3
            $table->string('berkas_tambahan_3');
            //surat permohonan pencatatan isbat
            $table->string('tanggal_penetapan')->nullable();
            $table->string('pengadilan_agama')->nullable();
            //berkas tambahan4
            $table->string('berkas_tambahan_4');
            //surat keterangan penanaman pohon
            $table->string('jenis_pohon')->nullable();
            $table->string('lokasi_pohon')->nullable();
            $table->string('jumlah_pohon')->nullable();
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
        Schema::dropIfExists('surat_limabelas');
    }
}
