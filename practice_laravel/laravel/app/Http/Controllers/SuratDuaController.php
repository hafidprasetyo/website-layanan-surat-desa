<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratDua;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class SuratDuaController extends Controller
{
    public function store(Request $request)
    {
            $validateData = $request->validate([
                'nik' => 'required|size:16',
                'nama' => 'required|min:3|max:50',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'alamat' => 'required',
                'pendidikan' => 'required',
                'warga_negara' => 'required',
                'agama' => 'required',
                'jenis_permohonan' => 'required',
                'negara_tujuan' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_PINDAH_LUAR_NEGERI")
                ],
                'kode_negara' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_PINDAH_LUAR_NEGERI")
                ],
                'alamat_tujuan' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_PINDAH_LUAR_NEGERI")
                ],
                'penanggung_jawab' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_PINDAH_LUAR_NEGERI")
                ],
                'rencana_pindah' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_PINDAH_LUAR_NEGERI")
                ],
                'nama_sponsor' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_TEMPAT_TINGGAL_BAGI_ORANG_ASING_TINGGAL_TERBATAS")
                ],
                'tipe_sponsor' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_TEMPAT_TINGGAL_BAGI_ORANG_ASING_TINGGAL_TERBATAS")
                ],
                'alamat_sponsor' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_TEMPAT_TINGGAL_BAGI_ORANG_ASING_TINGGAL_TERBATAS")
                ],
                'nomor' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_TEMPAT_TINGGAL_BAGI_ORANG_ASING_TINGGAL_TERBATAS")
                ],
                'tanggal_masa' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "SURAT_KETERANGAN_TEMPAT_TINGGAL_BAGI_ORANG_ASING_TINGGAL_TERBATAS")
                ],

                'lokasi_pindah' => 'required',
                'alamat_tujuan_1' => 'required',
                'provinsi_tujuan' => 'required',
                'kabupaten_tujuan' => 'required',
                'kecamatan_tujuan' => 'required',
                'kelurahan_tujuan' => 'required',
                'dusun_tujuan' => 'required',
                'rw_tujuan' => 'required',
                'rt_tujuan' => 'required',
                'kode_pos' => 'required',
                'telepon' => 'required',
                'alasan_pindah' => 'required',
                'lainnya' => [
                    Rule::requiredIf(fn () => $request->alasan_pindah == "Lainnya")
                ],
                'jenis_kepindahan' => 'required',
                'statuskk_tidakpindah' => 'required',
                'statuskk_pindah' => 'required',
                'keluarga_pindah' => 'required',
                'keluarga_pindah_1' => [
                    Rule::requiredIf(fn () => $request->keluarga_pindah == "ADA")
                ],
                'keluarga_pindah_2' => [
                    Rule::requiredIf(fn () => $request->keluarga_pindah == "ADA")
                ],
                'keluarga_pindah_3' => [
                    Rule::requiredIf(fn () => $request->keluarga_pindah == "ADA")
                ],
                'keluarga_pindah_4' => [
                    Rule::requiredIf(fn () => $request->keluarga_pindah == "ADA")
                ],
                'keluarga_pindah_5' => [
                    Rule::requiredIf(fn () => $request->keluarga_pindah == "ADA")
                ],
                'keluarga_pindah_6' => [
                    Rule::requiredIf(fn () => $request->keluarga_pindah == "ADA")
                ],
                'keluarga_pindah_7' => [
                    Rule::requiredIf(fn () => $request->keluarga_pindah == "ADA")
                ],
                'keluarga_pindah_8' => [
                    Rule::requiredIf(fn () => $request->keluarga_pindah == "ADA")
                ],
                'no_hp' => 'required',
        ]);


    $surat_duas = new SuratDua();
    $surat_duas->nik = $validateData['nik'];
    $surat_duas->nama = $validateData['nama'];
    $surat_duas->tempat_lahir = $validateData['tempat_lahir'];
    $surat_duas->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_duas->alamat = $validateData['alamat'];
    $surat_duas->pendidikan = $validateData['pendidikan'];
    $surat_duas->warga_negara = $validateData['warga_negara'];
    $surat_duas->agama = $validateData['agama'];
    $surat_duas->jenis_permohonan = $validateData['jenis_permohonan'];
    $surat_duas->negara_tujuan = $validateData['negara_tujuan']?? null;
    $surat_duas->kode_negara = $validateData['kode_negara']?? null;
    $surat_duas->alamat_tujuan = $validateData['alamat_tujuan']?? null;
    $surat_duas->penanggung_jawab = $validateData['penanggung_jawab']?? null;
    $surat_duas->rencana_pindah = $validateData['rencana_pindah']?? null;
    $surat_duas->nama_sponsor = $validateData['nama_sponsor']?? null;
    $surat_duas->tipe_sponsor= $validateData['tipe_sponsor']?? null;
    $surat_duas->alamat_sponsor = $validateData['alamat_sponsor']?? null;
    $surat_duas->nomor = $validateData['nomor']?? null;
    $surat_duas->tanggal_masa = $validateData['tanggal_masa']?? null;
    $surat_duas->lokasi_pindah = $validateData['lokasi_pindah'];
    $surat_duas->alamat_tujuan_1 = $validateData['alamat_tujuan_1'];
    $surat_duas->provinsi_tujuan = $validateData['provinsi_tujuan'];
    $surat_duas->kabupaten_tujuan = $validateData['kabupaten_tujuan'];
    $surat_duas->kecamatan_tujuan = $validateData['kecamatan_tujuan'];
    $surat_duas->kelurahan_tujuan = $validateData['kelurahan_tujuan'];
    $surat_duas->dusun_tujuan = $validateData['dusun_tujuan'];
    $surat_duas->rw_tujuan = $validateData['rw_tujuan'];
    $surat_duas->rt_tujuan = $validateData['rt_tujuan'];
    $surat_duas->kode_pos = $validateData['kode_pos'];
    $surat_duas->telepon = $validateData['telepon'];
    $surat_duas->alasan_pindah = $validateData['alasan_pindah'];
    $surat_duas->lainnya = $validateData['lainnya']?? null;
    $surat_duas->jenis_kepindahan = $validateData['jenis_kepindahan'];
    $surat_duas->statuskk_tidakpindah = $validateData['statuskk_tidakpindah'];
    $surat_duas->statuskk_pindah = $validateData['statuskk_pindah'];
    $surat_duas->keluarga_pindah = $validateData['keluarga_pindah'];
    $surat_duas->keluarga_pindah_1 = $validateData['keluarga_pindah_1']?? null;
    $surat_duas->keluarga_pindah_2 = $validateData['keluarga_pindah_2']?? null;
    $surat_duas->keluarga_pindah_3 = $validateData['keluarga_pindah_3']?? null;
    $surat_duas->keluarga_pindah_4 = $validateData['keluarga_pindah_4']?? null;
    $surat_duas->keluarga_pindah_5 = $validateData['keluarga_pindah_5']?? null;
    $surat_duas->keluarga_pindah_6 = $validateData['keluarga_pindah_6']?? null;
    $surat_duas->keluarga_pindah_7 = $validateData['keluarga_pindah_7']?? null;
    $surat_duas->keluarga_pindah_8 = $validateData['keluarga_pindah_8']?? null;
    $surat_duas->no_hp = $validateData['no_hp'];
    $surat_duas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_duas = SuratDua::all();
    return view('SuratDua.index',['surat_duas' => $surat_duas]);
    }

    public function show($SuratDua_id)
    {
    $result = SuratDua::findOrFail($SuratDua_id);
    return view('SuratDua.show',['SuratDua' => $result]);
    }

    public function destroy(Request $request, SuratDua $SuratDua)
    {
    $SuratDua->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratDua.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_duas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_duas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_duas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratpendaftaranperpindahankependudukan/admin');
    }
}
