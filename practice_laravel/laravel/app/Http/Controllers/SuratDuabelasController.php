<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratDuabelas;
use Illuminate\Http\Request;

class SuratDuabelasController extends Controller
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
        'status_ortu' => 'required',
        'nama_ortu' => 'required',
        'nik_ortu' => 'required|size:16',
        'keperluan' => 'required',
        'no_hp' => 'required',
    ]);

    $surat_duabelas = new SuratDuabelas();
    $surat_duabelas->nik = $validateData['nik'];
    $surat_duabelas->nama = $validateData['nama'];
    $surat_duabelas->tempat_lahir = $validateData['tempat_lahir'];
    $surat_duabelas->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_duabelas->alamat = $validateData['alamat'];
    $surat_duabelas->pendidikan = $validateData['pendidikan'];
    $surat_duabelas->warga_negara = $validateData['warga_negara'];
    $surat_duabelas->agama = $validateData['agama'];
    $surat_duabelas->status_ortu = $validateData['status_ortu'];
    $surat_duabelas->nama_ortu = $validateData['nama_ortu'];
    $surat_duabelas->nik_ortu = $validateData['nik_ortu'];
    $surat_duabelas->keperluan = $validateData['keperluan'];
    $surat_duabelas->no_hp = $validateData['no_hp'];
    $surat_duabelas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_duabelas = SuratDuabelas::all();
    return view('SuratDuabelas.index',['surat_duabelas' => $surat_duabelas]);
    }

    public function show($SuratDuabelas_id)
    {
    $result = SuratDuabelas::findOrFail($SuratDuabelas_id);
    return view('SuratDuabelas.show',['SuratDuabelas' => $result]);
    }

    public function destroy(Request $request, SuratDuabelas $SuratDuabelas)
    {
    $SuratDuabelas->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratDuabelas.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_duabelas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_duabelas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_duabelas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketerangantidakmampu/admin');
    }

}
