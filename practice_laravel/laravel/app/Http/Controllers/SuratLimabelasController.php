<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratLimabelas;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class SuratLimabelasController extends Controller
{
    public function store(Request $request)
    {
            $validateData = $request->validate([
                // calon pasangan pria warga desa
                'data_pria_wargadesa' => 'required',
                'nik_pria_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "WARGA_DESA")
                ],
                'nama_pria_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "WARGA_DESA")
                ],
                'status_pria_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "WARGA_DESA")
                ],
                'namaistri_pria_wargadesa' => [
                    Rule::requiredIf(fn () => $request->status_pria_wargadesa == "DUDA")
                ],
                'istri_ke_wargadesa' => [
                    Rule::requiredIf(fn () => $request->status_pria_wargadesa == "BERISTRI")
                ],
                // calon pasangan pria luar desa
                'nik_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "LUAR_DESA")
                ],
                'nama_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "LUAR_DESA")
                ],
                'tempat_lahir_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "LUAR_DESA")
                ],
                'tanggal_lahir_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "LUAR_DESA")
                ],
                'warga_negara_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "LUAR_DESA")
                ],
                'agama_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "LUAR_DESA")
                ],
                'pekerjaan_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "LUAR_DESA")
                ],
                'alamat_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "LUAR_DESA")
                ],
                'status_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_pria_wargadesa == "LUAR_DESA")
                ],
                'namaistri_pria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->status_pria_wargaluardesa == "DUDA")
                ],
                'istri_ke_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->status_pria_wargaluardesa == "BERISTRI")
                ],
                // data ayah pasangan calon pria warga desa
                'data_ayahpria_wargadesa' => 'required',
                'nik_ayahpria_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "WARGA_DESA")
                ],
                'nama_ayahpria_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "WARGA_DESA")
                ],
                // data ayah pasangan calon pria luar desa
                'nik_ayahpria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "LUAR_DESA")
                ],
                'bin_ayahpria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "LUAR_DESA")
                ],
                'nama_ayahpria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "LUAR_DESA")
                ],
                'tempat_lahir_ayahpria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "LUAR_DESA")
                ],
                'tanggal_lahir_ayahpria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "LUAR_DESA")
                ],
                'warga_negara_ayahpria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "LUAR_DESA")
                ],
                'agama_ayahpria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "LUAR_DESA")
                ],
                'pekerjaan_ayahpria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "LUAR_DESA")
                ],
                'alamat_ayahpria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahpria_wargadesa == "LUAR_DESA")
                ],
                // data ibu pasangan calon pria warga desa
                'data_ibupria_wargadesa' => 'required',
                'nik_ibupria_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "WARGA_DESA")
                ],
                'nama_ibupria_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "WARGA_DESA")
                ],
                // data ibu pasangan calon pria luar desa
                'nik_ibupria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "LUAR_DESA")
                ],
                'binti_ibupria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "LUAR_DESA")
                ],
                'nama_ibupria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "LUAR_DESA")
                ],
                'tempat_lahir_ibupria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "LUAR_DESA")
                ],
                'tanggal_lahir_ibupria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "LUAR_DESA")
                ],
                'warga_negara_ibupria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "LUAR_DESA")
                ],
                'agama_ibupria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "LUAR_DESA")
                ],
                'pekerjaan_ibupria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "LUAR_DESA")
                ],
                'alamat_ibupria_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibupria_wargadesa == "LUAR_DESA")
                ],
                // data calon pasangan wanita warga desa
                'data_wanita_wargadesa' => 'required',
                'nik_wanita_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "WARGA_DESA")
                ],
                'nama_wanita_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "WARGA_DESA")
                ],
                'status_wanita_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "WARGA_DESA")
                ],
                // data calon pasangan wanita luar desa
                'nik_wanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "LUAR_DESA")
                ],
                'nama_wanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "LUAR_DESA")
                ],
                'tempat_lahir_wanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "LUAR_DESA")
                ],
                'tanggal_lahir_wanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "LUAR_DESA")
                ],
                'warga_negara_wanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "LUAR_DESA")
                ],
                'agama_wanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "LUAR_DESA")
                ],
                'pekerjaan_wanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "LUAR_DESA")
                ],
                'alamat_wanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "LUAR_DESA")
                ],
                'status_wanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_wanita_wargadesa == "LUAR_DESA")
                ],
                // data ayah pasangan calon wanita warga desa
                'data_ayahwanita_wargadesa' => 'required',
                'nik_ayahwanita_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "WARGA_DESA")
                ],
                'nama_ayahwanita_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "WARGA_DESA")
                ],
                // data ayah pasangan calon wanita luar desa
                'nik_ayahwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "LUAR_DESA")
                ],
                'bin_ayahwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "LUAR_DESA")
                ],
                'nama_ayahwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "LUAR_DESA")
                ],
                'tempat_lahir_ayahwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "LUAR_DESA")
                ],
                'tanggal_lahir_ayahwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "LUAR_DESA")
                ],
                'warga_negara_ayahwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "LUAR_DESA")
                ],
                'agama_ayahwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "LUAR_DESA")
                ],
                'pekerjaan_ayahwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "LUAR_DESA")
                ],
                'alamat_ayahwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ayahwanita_wargadesa == "LUAR_DESA")
                ],
                'data_ibuwanita_wargadesa' => 'required',
                // data ibu pasangan calon wanita warga desa
                'nik_ibuwanita_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "WARGA_DESA")
                ],
                'nama_ibuwanita_wargadesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "WARGA_DESA")
                ],
                // data ibu pasangan calon wanita luar desa
                'nik_ibuwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "LUAR_DESA")
                ],
                'binti_ibuwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "LUAR_DESA")
                ],
                'nama_ibuwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "LUAR_DESA")
                ],
                'tempat_lahir_ibuwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "LUAR_DESA")
                ],
                'tanggal_lahir_ibuwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "LUAR_DESA")
                ],
                'warga_negara_ibuwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "LUAR_DESA")
                ],
                'agama_ibuwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "LUAR_DESA")
                ],
                'pekerjaan_ibuwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "LUAR_DESA")
                ],
                'alamat_ibuwanita_wargaluardesa' => [
                    Rule::requiredIf(fn () => $request->data_ibuwanita_wargadesa == "LUAR_DESA")
                ],
                // data wali nikah
                'nik_walinikah' => 'required',
                'bin_walinikah' =>'required',
                'nama_walinikah' => 'required',
                'tempat_lahir_walinikah' =>'required',
                'tanggal_lahir_walinikah' => 'required',
                'warga_negara_walinikah' =>'required',
                'agama_walinikah' => 'required',
                'pekerjaan_walinikah' =>'required',
                'alamat_walinikah' => 'required',
                'hubungan_walinikah' =>'required',
                // data pernikahan
                'hari_nikah' => 'required',
                'tanggal_nikah' =>'required',
                'jam_nikah' => 'required',
                'tempat_nikah' =>'required',
                //berkas tambahan 1
                'berkas_tambahan_1' =>'required',
                'nama_suami' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_1 == "ADA")
                ],
                'nik_suami' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_1 == "ADA")
                ],
                'tanggal_meninggal_suami' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_1 == "ADA")
                ],
                'tempat_meninggal_suami' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_1 == "ADA")
                ],
                //berkas tambahan 2
                'berkas_tambahan_2' =>'required',
                'nama_istri' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_2 == "ADA")
                ],
                'nik_istri' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_2 == "ADA")
                ],
                'tanggal_meninggal_istri' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_2 == "ADA")
                ],
                'tempat_meninggal_istri' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_2 == "ADA")
                ],
                // berkas tambahan 3
                'berkas_tambahan_3' =>'required',
                'tanggal_penetapan' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_3 == "ADA")
                ],
                'pengadilan_agama' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_3 == "ADA")
                ],
                //berkas tambahan 4
                'berkas_tambahan_4' =>'required',
                'jenis_pohon' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_4 == "ADA")
                ],
                'lokasi_pohon' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_4 == "ADA")
                ],
                'jumlah_pohon' => [
                    Rule::requiredIf(fn () => $request->berkas_tambahan_4 == "ADA")
                ],
                'no_hp' => 'required',
        ]);
       
        
    $surat_limabelas = new SuratLimabelas();
    $surat_limabelas->data_pria_wargadesa = $validateData['data_pria_wargadesa'];
    $surat_limabelas->nik_pria_wargadesa = $validateData['nik_pria_wargadesa']?? null;
    $surat_limabelas->nama_pria_wargadesa = $validateData['nama_pria_wargadesa']?? null;
    $surat_limabelas->status_pria_wargadesa = $validateData['status_pria_wargadesa']?? null;
    $surat_limabelas->namaistri_pria_wargadesa = $validateData['namaistri_pria_wargadesa']?? null;
    $surat_limabelas->istri_ke_wargadesa = $validateData['istri_ke_wargadesa']?? null;
    $surat_limabelas->nik_pria_wargaluardesa = $validateData['nik_pria_wargaluardesa']?? null;
    $surat_limabelas->nama_pria_wargaluardesa = $validateData['nama_pria_wargaluardesa']?? null;
    $surat_limabelas->tempat_lahir_pria_wargaluardesa = $validateData['tempat_lahir_pria_wargaluardesa']?? null;
    $surat_limabelas->tanggal_lahir_pria_wargaluardesa = $validateData['tanggal_lahir_pria_wargaluardesa']?? null;
    $surat_limabelas->warga_negara_pria_wargaluardesa = $validateData['warga_negara_pria_wargaluardesa']?? null;
    $surat_limabelas->agama_pria_wargaluardesa = $validateData['agama_pria_wargaluardesa']?? null;
    $surat_limabelas->pekerjaan_pria_wargaluardesa = $validateData['pekerjaan_pria_wargaluardesa']?? null;
    $surat_limabelas->alamat_pria_wargaluardesa = $validateData['alamat_pria_wargaluardesa']?? null;
    $surat_limabelas->status_pria_wargaluardesa = $validateData['status_pria_wargaluardesa']?? null;
    $surat_limabelas->namaistri_pria_wargaluardesa = $validateData['namaistri_pria_wargaluardesa']?? null;
    $surat_limabelas->istri_ke_wargaluardesa = $validateData['istri_ke_wargaluardesa']?? null;
    $surat_limabelas->data_ayahpria_wargadesa = $validateData['data_ayahpria_wargadesa'];
    $surat_limabelas->nik_ayahpria_wargadesa = $validateData['nik_ayahpria_wargadesa']?? null;
    $surat_limabelas->nama_ayahpria_wargadesa = $validateData['nama_ayahpria_wargadesa']?? null;
    $surat_limabelas->nik_ayahpria_wargaluardesa = $validateData['nik_ayahpria_wargaluardesa']?? null;
    $surat_limabelas->bin_ayahpria_wargaluardesa = $validateData['bin_ayahpria_wargaluardesa']?? null;
    $surat_limabelas->nama_ayahpria_wargaluardesa = $validateData['nama_ayahpria_wargaluardesa']?? null;
    $surat_limabelas->tempat_lahir_ayahpria_wargaluardesa = $validateData['tempat_lahir_ayahpria_wargaluardesa']?? null;
    $surat_limabelas->tanggal_lahir_ayahpria_wargaluardesa = $validateData['tanggal_lahir_ayahpria_wargaluardesa']?? null;
    $surat_limabelas->warga_negara_ayahpria_wargaluardesa = $validateData['warga_negara_ayahpria_wargaluardesa']?? null;
    $surat_limabelas->agama_ayahpria_wargaluardesa = $validateData['agama_ayahpria_wargaluardesa']?? null;
    $surat_limabelas->pekerjaan_ayahpria_wargaluardesa = $validateData['pekerjaan_ayahpria_wargaluardesa']?? null;
    $surat_limabelas->alamat_ayahpria_wargaluardesa = $validateData['alamat_ayahpria_wargaluardesa']?? null;
    $surat_limabelas->data_ibupria_wargadesa = $validateData['data_ibupria_wargadesa'];
    $surat_limabelas->nik_ibupria_wargadesa = $validateData['nik_ibupria_wargadesa']?? null;
    $surat_limabelas->nama_ibupria_wargadesa = $validateData['nama_ibupria_wargadesa']?? null;
    $surat_limabelas->nik_ibupria_wargaluardesa = $validateData['nik_ibupria_wargaluardesa']?? null;
    $surat_limabelas->binti_ibupria_wargaluardesa = $validateData['binti_ibupria_wargaluardesa']?? null;
    $surat_limabelas->nama_ibupria_wargaluardesa = $validateData['nama_ibupria_wargaluardesa']?? null;
    $surat_limabelas->tempat_lahir_ibupria_wargaluardesa = $validateData['tempat_lahir_ibupria_wargaluardesa']?? null;
    $surat_limabelas->tanggal_lahir_ibupria_wargaluardesa = $validateData['tanggal_lahir_ibupria_wargaluardesa']?? null;
    $surat_limabelas->warga_negara_ibupria_wargaluardesa = $validateData['warga_negara_ibupria_wargaluardesa']?? null;
    $surat_limabelas->agama_ibupria_wargaluardesa = $validateData['agama_ibupria_wargaluardesa']?? null;
    $surat_limabelas->pekerjaan_ibupria_wargaluardesa = $validateData['pekerjaan_ibupria_wargaluardesa']?? null;
    $surat_limabelas->alamat_ibupria_wargaluardesa = $validateData['alamat_ibupria_wargaluardesa']?? null;
    $surat_limabelas->data_wanita_wargadesa = $validateData['data_wanita_wargadesa'];
    $surat_limabelas->nik_wanita_wargadesa = $validateData['nik_wanita_wargadesa']?? null;
    $surat_limabelas->nama_wanita_wargadesa = $validateData['nama_wanita_wargadesa']?? null;
    $surat_limabelas->status_wanita_wargadesa = $validateData['status_wanita_wargadesa']?? null;
    $surat_limabelas->nik_wanita_wargaluardesa = $validateData['nik_wanita_wargaluardesa']?? null;
    $surat_limabelas->nama_wanita_wargaluardesa = $validateData['nama_wanita_wargaluardesa']?? null;
    $surat_limabelas->tempat_lahir_wanita_wargaluardesa = $validateData['tempat_lahir_wanita_wargaluardesa']?? null;
    $surat_limabelas->tanggal_lahir_wanita_wargaluardesa = $validateData['tanggal_lahir_wanita_wargaluardesa']?? null;
    $surat_limabelas->warga_negara_wanita_wargaluardesa = $validateData['warga_negara_wanita_wargaluardesa']?? null;
    $surat_limabelas->agama_wanita_wargaluardesa = $validateData['agama_wanita_wargaluardesa']?? null;
    $surat_limabelas->pekerjaan_wanita_wargaluardesa = $validateData['pekerjaan_wanita_wargaluardesa']?? null;
    $surat_limabelas->alamat_wanita_wargaluardesa = $validateData['alamat_wanita_wargaluardesa'?? null];
    $surat_limabelas->status_wanita_wargaluardesa = $validateData['status_wanita_wargaluardesa']?? null;
    $surat_limabelas->data_ayahwanita_wargadesa = $validateData['data_ayahwanita_wargadesa'];
    $surat_limabelas->nik_ayahwanita_wargadesa = $validateData['nik_ayahwanita_wargadesa']?? null;
    $surat_limabelas->nama_ayahwanita_wargadesa = $validateData['nama_ayahwanita_wargadesa']?? null;
    $surat_limabelas->nik_ayahwanita_wargaluardesa = $validateData['nik_ayahwanita_wargaluardesa']?? null;
    $surat_limabelas->bin_ayahwanita_wargaluardesa = $validateData['bin_ayahwanita_wargaluardesa']?? null;
    $surat_limabelas->nama_ayahwanita_wargaluardesa = $validateData['nama_ayahwanita_wargaluardesa']?? null;
    $surat_limabelas->tempat_lahir_ayahwanita_wargaluardesa = $validateData['tempat_lahir_ayahwanita_wargaluardesa']?? null;
    $surat_limabelas->tanggal_lahir_ayahwanita_wargaluardesa = $validateData['tanggal_lahir_ayahwanita_wargaluardesa']?? null;
    $surat_limabelas->warga_negara_ayahwanita_wargaluardesa = $validateData['warga_negara_ayahwanita_wargaluardesa']?? null;
    $surat_limabelas->agama_ayahwanita_wargaluardesa = $validateData['agama_ayahwanita_wargaluardesa']?? null;
    $surat_limabelas->pekerjaan_ayahwanita_wargaluardesa = $validateData['pekerjaan_ayahwanita_wargaluardesa']?? null;
    $surat_limabelas->alamat_ayahwanita_wargaluardesa = $validateData['alamat_ayahwanita_wargaluardesa']?? null;
    $surat_limabelas->data_ibuwanita_wargadesa = $validateData['data_ibuwanita_wargadesa'];
    $surat_limabelas->nik_ibuwanita_wargadesa = $validateData['nik_ibuwanita_wargadesa']?? null;
    $surat_limabelas->nama_ibuwanita_wargadesa = $validateData['nama_ibuwanita_wargadesa']?? null;
    $surat_limabelas->nik_ibuwanita_wargaluardesa = $validateData['nik_ibuwanita_wargaluardesa']?? null;
    $surat_limabelas->binti_ibuwanita_wargaluardesa = $validateData['binti_ibuwanita_wargaluardesa']?? null;
    $surat_limabelas->nama_ibuwanita_wargaluardesa = $validateData['nama_ibuwanita_wargaluardesa']?? null;
    $surat_limabelas->tempat_lahir_ibuwanita_wargaluardesa = $validateData['tempat_lahir_ibuwanita_wargaluardesa']?? null;
    $surat_limabelas->tanggal_lahir_ibuwanita_wargaluardesa = $validateData['tanggal_lahir_ibuwanita_wargaluardesa']?? null;
    $surat_limabelas->warga_negara_ibuwanita_wargaluardesa = $validateData['warga_negara_ibuwanita_wargaluardesa']?? null;
    $surat_limabelas->agama_ibuwanita_wargaluardesa = $validateData['agama_ibuwanita_wargaluardesa']?? null;
    $surat_limabelas->pekerjaan_ibuwanita_wargaluardesa = $validateData['pekerjaan_ibuwanita_wargaluardesa']?? null;
    $surat_limabelas->alamat_ibuwanita_wargaluardesa = $validateData['alamat_ibuwanita_wargaluardesa']?? null;
    $surat_limabelas->nik_walinikah = $validateData['nik_walinikah'];
    $surat_limabelas->bin_walinikah = $validateData['bin_walinikah'];
    $surat_limabelas->nama_walinikah = $validateData['nama_walinikah'];
    $surat_limabelas->tempat_lahir_walinikah = $validateData['tempat_lahir_walinikah'];
    $surat_limabelas->tanggal_lahir_walinikah = $validateData['tanggal_lahir_walinikah'];
    $surat_limabelas->warga_negara_walinikah = $validateData['warga_negara_walinikah'];
    $surat_limabelas->agama_walinikah = $validateData['agama_walinikah'];
    $surat_limabelas->pekerjaan_walinikah = $validateData['pekerjaan_walinikah'];
    $surat_limabelas->alamat_walinikah = $validateData['alamat_walinikah'];
    $surat_limabelas->hubungan_walinikah = $validateData['hubungan_walinikah'];
    $surat_limabelas->hari_nikah = $validateData['hari_nikah'];
    $surat_limabelas->tanggal_nikah = $validateData['tanggal_nikah'];
    $surat_limabelas->jam_nikah = $validateData['jam_nikah'];
    $surat_limabelas->tempat_nikah = $validateData['tempat_nikah'];
    $surat_limabelas->berkas_tambahan_1 = $validateData['berkas_tambahan_1'];
    $surat_limabelas->nama_suami = $validateData['nama_suami']?? null;
    $surat_limabelas->nik_suami = $validateData['nik_suami']?? null;
    $surat_limabelas->tanggal_meninggal_suami = $validateData['tanggal_meninggal_suami']?? null;
    $surat_limabelas->tempat_meninggal_suami = $validateData['tempat_meninggal_suami']?? null;
    $surat_limabelas->berkas_tambahan_2 = $validateData['berkas_tambahan_2'];
    $surat_limabelas->nama_istri = $validateData['nama_istri']?? null;
    $surat_limabelas->nik_istri = $validateData['nik_istri']?? null;
    $surat_limabelas->tanggal_meninggal_istri = $validateData['tanggal_meninggal_istri']?? null;
    $surat_limabelas->tempat_meninggal_istri = $validateData['tempat_meninggal_istri']?? null;
    $surat_limabelas->berkas_tambahan_3 = $validateData['berkas_tambahan_3'];
    $surat_limabelas->tanggal_penetapan = $validateData['tanggal_penetapan']?? null;
    $surat_limabelas->pengadilan_agama = $validateData['pengadilan_agama']?? null;
    $surat_limabelas->berkas_tambahan_4 = $validateData['berkas_tambahan_4'];
    $surat_limabelas->jenis_pohon = $validateData['jenis_pohon']?? null;
    $surat_limabelas->lokasi_pohon = $validateData['lokasi_pohon']?? null;
    $surat_limabelas->jumlah_pohon = $validateData['jumlah_pohon']?? null;    
    $surat_limabelas->no_hp = $validateData['no_hp'];
    $surat_limabelas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_limabelas = SuratLimabelas::all();
    return view('SuratLimabelas.index',['surat_limabelas' => $surat_limabelas]);
    }

    public function show($SuratSebelas_id)
    {
    $result = SuratLimabelas::findOrFail($SuratSebelas_id);
    return view('SuratLimabelas.show',['SuratLimabelas' => $result]);
    }

    public function destroy(Request $request, SuratLimabelas $SuratLimabelas)
    {
    $SuratLimabelas->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratLimabelas.index');
    }

    public function index1() 
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_limabelas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_limabelas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_limabelas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketeranganuntukmenikah/admin');
    }
}
