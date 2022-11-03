<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratEnambelas;
use Illuminate\Http\Request;

class SuratEnambelasController extends Controller
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
        'nama_saksisatu' => 'required',
        'nik_saksisatu' => 'required|size:16',
        'nama_saksidua' => 'required',
        'nik_saksidua' => 'required|size:16',
        'pernyataan' => '',
        'no_hp' => 'required',
    ]);

    $surat_enambelas = new SuratEnambelas();
    $surat_enambelas->nik = $validateData['nik'];
    $surat_enambelas->nama = $validateData['nama'];
    $surat_enambelas->tempat_lahir = $validateData['tempat_lahir'];
    $surat_enambelas->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_enambelas->alamat = $validateData['alamat'];
    $surat_enambelas->pendidikan = $validateData['pendidikan'];
    $surat_enambelas->warga_negara = $validateData['warga_negara'];
    $surat_enambelas->agama = $validateData['agama'];
    $surat_enambelas->nama_ortu = $validateData['nama_ortu'];
    $surat_enambelas->nik_ortu = $validateData['nik_ortu'];
    $surat_enambelas->nama_saksisatu = $validateData['nama_saksisatu'];
    $surat_enambelas->nik_saksisatu = $validateData['nik_saksisatu'];
    $surat_enambelas->nama_saksidua = $validateData['nama_saksidua'];
    $surat_enambelas->nik_saksidua = $validateData['nik_saksidua'];
    $surat_enambelas->pernyataan = $validateData['pernyataan'];
    $surat_enambelas->no_hp = $validateData['no_hp'];
    $surat_enambelas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_enambelas = SuratEnambelas::all();
    return view('SuratEnambelas.index',['surat_enambelas' => $surat_enambelas]);
    }

    public function show($SuratEnambelas_id)
    {
    $result = SuratEnambelas::findOrFail($SuratEnambelas_id);
    return view('SuratEnambelas.show',['SuratEnambelas' => $result]);
    }

    public function destroy(Request $request, SuratEnambelas $SuratEnambelas)
    {
    $SuratEnambelas->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratEnambelas.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }


    public function status($id){
        $data = \DB::table('surat_enambelas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_enambelas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_enambelas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratpernyataanbelummenikah/admin');
    }

}
