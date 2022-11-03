<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratEnam;
use Illuminate\Http\Request;

class SuratEnamController extends Controller
{
    public function getData()
    {
    $p = SuratEnam::All();
    return response()->json($p);
    }

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
        'keterangan' => 'required',
        'no_hp' => 'required',
    ]);

    $surat_enams = new SuratEnam();
    $surat_enams->nik = $validateData['nik'];
    $surat_enams->nama = $validateData['nama'];
    $surat_enams->tempat_lahir = $validateData['tempat_lahir'];
    $surat_enams->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_enams->alamat = $validateData['alamat'];
    $surat_enams->pendidikan = $validateData['pendidikan'];
    $surat_enams->warga_negara = $validateData['warga_negara'];
    $surat_enams->agama = $validateData['agama'];
    $surat_enams->keperluan = $validateData['keperluan'];
    $surat_enams->keterangan = $validateData['keterangan'];
    $surat_enams->no_hp = $validateData['no_hp'];
    $surat_enams->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_enams = SuratEnam::all();
    return view('SuratEnam.index',['surat_enams' => $surat_enams]);
    }

    public function show($SuratEnam_id)
    {
    $result = SuratEnam::findOrFail($SuratEnam_id);
    return view('SuratEnam.show',['SuratEnam' => $result]);
    }

    public function destroy(Request $request, SuratEnam $SuratEnam)
    {
    $SuratEnam->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratEnam.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_enams')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_enams')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_enams')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketeranganpengantar/admin');
    }

}
