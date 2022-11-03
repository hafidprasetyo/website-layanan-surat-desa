<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratDelapanbelas;
use Illuminate\Http\Request;

class SuratDelapanbelasController extends Controller
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
        'keterangan' => 'required',
        'no_hp' => 'required',
    ]);

    $surat_delapanbelas = new SuratDelapanbelas();
    $surat_delapanbelas->nik = $validateData['nik'];
    $surat_delapanbelas->nama = $validateData['nama'];
    $surat_delapanbelas->tempat_lahir = $validateData['tempat_lahir'];
    $surat_delapanbelas->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_delapanbelas->alamat = $validateData['alamat'];
    $surat_delapanbelas->pendidikan = $validateData['pendidikan'];
    $surat_delapanbelas->warga_negara = $validateData['warga_negara'];
    $surat_delapanbelas->agama = $validateData['agama'];
    $surat_delapanbelas->keterangan = $validateData['keterangan'];
    $surat_delapanbelas->no_hp = $validateData['no_hp'];
    $surat_delapanbelas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_delapanbelas = SuratDelapanbelas::all();
    return view('SuratDelapanbelas.index',['surat_delapanbelas' => $surat_delapanbelas]);
    }

    public function show($SuratDelapanbelas_id)
    {
    $result = SuratDelapanbelas::findOrFail($SuratDelapanbelas_id);
    return view('SuratDelapanbelas.show',['SuratDelapanbelas' => $result]);
    }

    public function destroy(Request $request, SuratDelapanbelas $SuratDelapanbelas)
    {
    $SuratDelapanbelas->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratDelapanbelas.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_delapanbelas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_delapanbelas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_delapanbelas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketeranganbedanama/admin');
    }
}
