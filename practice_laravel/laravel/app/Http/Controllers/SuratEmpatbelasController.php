<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratEmpatbelas;
use Illuminate\Http\Request;

class SuratEmpatbelasController extends Controller
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
        'nik_ortu' => 'required|size:16',
        'nama_ortu' => 'required',
        'keterangan' => 'required',
        'no_hp' => 'required',
    ]);

    $surat_empatbelas = new SuratEmpatbelas();
    $surat_empatbelas->nik = $validateData['nik'];
    $surat_empatbelas->nama = $validateData['nama'];
    $surat_empatbelas->tempat_lahir = $validateData['tempat_lahir'];
    $surat_empatbelas->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_empatbelas->alamat = $validateData['alamat'];
    $surat_empatbelas->pendidikan = $validateData['pendidikan'];
    $surat_empatbelas->warga_negara = $validateData['warga_negara'];
    $surat_empatbelas->agama = $validateData['agama'];
    $surat_empatbelas->nik_ortu = $validateData['nik_ortu'];
    $surat_empatbelas->nama_ortu = $validateData['nama_ortu'];
    $surat_empatbelas->keterangan = $validateData['keterangan'];
    $surat_empatbelas->no_hp = $validateData['no_hp'];
    $surat_empatbelas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_empatbelas = SuratEmpatbelas::all();
    return view('SuratEmpatbelas.index',['surat_empatbelas' => $surat_empatbelas]);
    }

    public function show($SuratEmpatbelas_id)
    {
    $result = SuratEmpatbelas::findOrFail($SuratEmpatbelas_id);
    return view('SuratEmpatbelas.show',['SuratEmpatbelas' => $result]);
    }

    public function destroy(Request $request, SuratEmpatbelas $SuratEmpatbelas)
    {
    $SuratEmpatbelas->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratEmpatbelas.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_empatbelas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_empatbelas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_empatbelas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketeranganijinorangtuawali/admin');
    }
}
