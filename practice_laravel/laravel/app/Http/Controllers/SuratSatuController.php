<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratSatu;
use Illuminate\Http\Request;

class SuratSatuController extends Controller
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
        'permohonan' => 'required',
        'syarat' => 'required',
        'no_hp' => 'required',
    ]);

    $suratsatus = new SuratSatu();
    $suratsatus->nik = $validateData['nik'];
    $suratsatus->nama = $validateData['nama'];
    $suratsatus->tempat_lahir = $validateData['tempat_lahir'];
    $suratsatus->tanggal_lahir = $validateData['tanggal_lahir'];
    $suratsatus->alamat = $validateData['alamat'];
    $suratsatus->pendidikan = $validateData['pendidikan'];
    $suratsatus->warga_negara = $validateData['warga_negara'];
    $suratsatus->agama = $validateData['agama'];
    $suratsatus->permohonan = $validateData['permohonan'];
    $suratsatus->syarat = $validateData['syarat'];
    $suratsatus->no_hp = $validateData['no_hp'];
    $suratsatus->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $suratsatus = SuratSatu::all();
    return view('SuratSatu.index',['suratsatus' => $suratsatus]);
    }

    public function show($SuratSatu_id)
    {
    $result = SuratSatu::findOrFail($SuratSatu_id);
    return view('SuratSatu.show',['SuratSatu' => $result]);
    }

    public function destroy(Request $request, SuratSatu $SuratSatu)
    {
    $SuratSatu->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratSatu.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function contact()
    {
        return view('userlte.contact');
    }

    public function status($id){
        $data = \DB::table('suratsatus')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('suratsatus')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('suratsatus')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratpendaftaranperistiwakependudukan/admin');
    }


}
