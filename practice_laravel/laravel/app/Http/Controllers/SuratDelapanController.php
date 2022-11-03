<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratDelapan;
use Illuminate\Http\Request;

class SuratDelapanController extends Controller
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
        'jenis_usaha' => 'required',
        'keterangan' => 'required',
        'no_hp' => 'required',
    ]);

    $surat_delapans = new SuratDelapan();
    $surat_delapans->nik = $validateData['nik'];
    $surat_delapans->nama = $validateData['nama'];
    $surat_delapans->tempat_lahir = $validateData['tempat_lahir'];
    $surat_delapans->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_delapans->alamat = $validateData['alamat'];
    $surat_delapans->pendidikan = $validateData['pendidikan'];
    $surat_delapans->warga_negara = $validateData['warga_negara'];
    $surat_delapans->agama = $validateData['agama'];
    $surat_delapans->jenis_usaha = $validateData['jenis_usaha'];
    $surat_delapans->keterangan = $validateData['keterangan'];
    $surat_delapans->no_hp = $validateData['no_hp'];
    $surat_delapans->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_delapans = SuratDelapan::all();
    return view('SuratDelapan.index',['surat_delapans' => $surat_delapans]);
    }

    public function show($SuratDelapan_id)
    {
    $result = SuratDelapan::findOrFail($SuratDelapan_id);
    return view('SuratDelapan.show',['SuratDelapan' => $result]);
    }

    public function destroy(Request $request, SuratDelapan $SuratDelapan)
    {
    $SuratDelapan->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratDelapan.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_delapans')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_delapans')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_delapans')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketeranganusaha/admin');
    }
}
