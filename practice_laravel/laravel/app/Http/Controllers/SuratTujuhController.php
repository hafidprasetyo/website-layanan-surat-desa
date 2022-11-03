<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratTujuh;
use Illuminate\Http\Request;

class SuratTujuhController extends Controller
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
        'nik_pasangan' => 'required|size:16',
        'nama_pasangan' => 'required',
        'keterangan' => 'required',
        'no_hp' => 'required',
    ]);

    $surat_tujuhs = new SuratTujuh();
    $surat_tujuhs->nik = $validateData['nik'];
    $surat_tujuhs->nama = $validateData['nama'];
    $surat_tujuhs->tempat_lahir = $validateData['tempat_lahir'];
    $surat_tujuhs->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_tujuhs->alamat = $validateData['alamat'];
    $surat_tujuhs->pendidikan = $validateData['pendidikan'];
    $surat_tujuhs->warga_negara = $validateData['warga_negara'];
    $surat_tujuhs->agama = $validateData['agama'];
    $surat_tujuhs->nik_pasangan = $validateData['nik_pasangan'];
    $surat_tujuhs->nama_pasangan = $validateData['nama_pasangan'];
    $surat_tujuhs->keterangan = $validateData['keterangan'];
    $surat_tujuhs->no_hp = $validateData['no_hp'];
    $surat_tujuhs->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_tujuhs = SuratTujuh::all();
    return view('SuratTujuh.index',['surat_tujuhs' => $surat_tujuhs]);
    }

    public function show($SuratTujuh_id)
    {
    $result = SuratTujuh::findOrFail($SuratTujuh_id);
    return view('SuratTujuh.show',['SuratTujuh' => $result]);
    }

    public function destroy(Request $request, SuratTujuh $SuratTujuh)
    {
    $SuratTujuh->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratTujuh.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }


    public function status($id){
        $data = \DB::table('surat_tujuhs')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_tujuhs')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_tujuhs')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketeranganijinsuamiistri/admin');
    }
}
