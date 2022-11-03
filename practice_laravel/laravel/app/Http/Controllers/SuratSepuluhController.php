<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratSepuluh;
use Illuminate\Http\Request;

class SuratSepuluhController extends Controller
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
        'keperluan' => 'required',
        'keterangan' => '',
        'no_hp' => 'required',
    ]);

    $surat_sepuluhs = new SuratSepuluh();
    $surat_sepuluhs->nik = $validateData['nik'];
    $surat_sepuluhs->nama = $validateData['nama'];
    $surat_sepuluhs->tempat_lahir = $validateData['tempat_lahir'];
    $surat_sepuluhs->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_sepuluhs->alamat = $validateData['alamat'];
    $surat_sepuluhs->pendidikan = $validateData['pendidikan'];
    $surat_sepuluhs->warga_negara = $validateData['warga_negara'];
    $surat_sepuluhs->agama = $validateData['agama'];
    $surat_sepuluhs->keperluan = $validateData['keperluan'];
    $surat_sepuluhs->keterangan = $validateData['keterangan'];
    $surat_sepuluhs->no_hp = $validateData['no_hp'];
    $surat_sepuluhs->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_sepuluhs = SuratSepuluh::all();
    return view('SuratSepuluh.index',['surat_sepuluhs' => $surat_sepuluhs]);
    }

    public function show($SuratSepuluh_id)
    {
    $result = SuratSepuluh::findOrFail($SuratSepuluh_id);
    return view('SuratSepuluh.show',['SuratSepuluh' => $result]);
    }

    public function destroy(Request $request, SuratSepuluh $SuratSepuluh)
    {
    $SuratSepuluh->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratSepuluh.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_sepuluhs')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_sepuluhs')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_sepuluhs')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratkelakuanbaik/admin');
    }
}
