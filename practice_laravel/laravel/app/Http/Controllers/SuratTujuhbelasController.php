<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratTujuhbelas;
use Illuminate\Http\Request;

class SuratTujuhbelasController extends Controller
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
        'nama_ortu' => 'required',
        'nik_ortu' => 'required|size:16',
        'pernyataan' => '',
        'no_hp' => 'required',
    ]);

    $surat_tujuhbelas = new SuratTujuhbelas();
    $surat_tujuhbelas->nik = $validateData['nik'];
    $surat_tujuhbelas->nama = $validateData['nama'];
    $surat_tujuhbelas->tempat_lahir = $validateData['tempat_lahir'];
    $surat_tujuhbelas->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_tujuhbelas->alamat = $validateData['alamat'];
    $surat_tujuhbelas->pendidikan = $validateData['pendidikan'];
    $surat_tujuhbelas->warga_negara = $validateData['warga_negara'];
    $surat_tujuhbelas->agama = $validateData['agama'];
    $surat_tujuhbelas->nama_ortu = $validateData['nama_ortu'];
    $surat_tujuhbelas->nik_ortu = $validateData['nik_ortu'];
    $surat_tujuhbelas->pernyataan = $validateData['pernyataan'];
    $surat_tujuhbelas->no_hp = $validateData['no_hp'];
    $surat_tujuhbelas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_tujuhbelas = SuratTujuhbelas::all();
    return view('SuratTujuhbelas.index',['surat_tujuhbelas' => $surat_tujuhbelas]);
    }

    public function show($SuratTujuhbelas_id)
    {
    $result = SuratTujuhbelas::findOrFail($SuratTujuhbelas_id);
    return view('SuratTujuhbelas.show',['SuratTujuhbelas' => $result]);
    }

    public function destroy(Request $request, SuratTujuhbelas $SuratTujuhbelas)
    {
    $SuratTujuhbelas->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratTujuhbelas.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }


    public function status($id){
        $data = \DB::table('surat_tujuhbelas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_tujuhbelas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_tujuhbelas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratpernyataanbelumbekerja/admin');
    }
}
