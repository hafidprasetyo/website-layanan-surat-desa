<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratSembilan;
use Illuminate\Http\Request;

class SuratSembilanController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
        'nik' => 'required|size:16',
        'nama' => 'required|min:3|max:50',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'provinsi_asal' => 'required',
        'kabupaten_asal' => 'required',
        'kecamatan_asal' => 'required',
        'kelurahan_asal' => 'required',
        'dusun_asal' => 'required',
        'rw_asal' => 'required',
        'rt_asal' => 'required',
        'jenis_kelamin' => 'required',
        'pekerjaan' => 'required',
        'agama' => 'required',
        'dusun_domisili' => 'required',
        'rw_domisili' => 'required',
        'rt_domisili' => 'required',
        'keterangan' => 'required',
        'keterangan_lain' => '',
        'no_hp' => 'required',
    ]);

    $surat_sembilans = new SuratSembilan();
    $surat_sembilans->nik = $validateData['nik'];
    $surat_sembilans->nama = $validateData['nama'];
    $surat_sembilans->tempat_lahir = $validateData['tempat_lahir'];
    $surat_sembilans->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_sembilans->provinsi_asal = $validateData['provinsi_asal'];
    $surat_sembilans->kabupaten_asal = $validateData['kabupaten_asal'];
    $surat_sembilans->kecamatan_asal = $validateData['kecamatan_asal'];
    $surat_sembilans->kelurahan_asal = $validateData['kelurahan_asal'];
    $surat_sembilans->dusun_asal = $validateData['dusun_asal'];
    $surat_sembilans->rt_asal = $validateData['rt_asal'];
    $surat_sembilans->rw_asal = $validateData['rw_asal'];
    $surat_sembilans->jenis_kelamin = $validateData['jenis_kelamin'];
    $surat_sembilans->pekerjaan = $validateData['pekerjaan'];
    $surat_sembilans->agama = $validateData['agama'];
    $surat_sembilans->dusun_domisili = $validateData['dusun_domisili'];
    $surat_sembilans->rw_domisili = $validateData['rw_domisili'];
    $surat_sembilans->rt_domisili = $validateData['rt_domisili'];
    $surat_sembilans->keterangan = $validateData['keterangan'];
    $surat_sembilans->keterangan_lain = $validateData['keterangan_lain'];
    $surat_sembilans->no_hp = $validateData['no_hp'];
    $surat_sembilans->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_sembilans = SuratSembilan::all();
    return view('SuratSembilan.index',['surat_sembilans' => $surat_sembilans]);
    }

    public function show($SuratSembilan_id)
    {
    $result = SuratSembilan::findOrFail($SuratSembilan_id);
    return view('SuratSembilan.show',['SuratSembilan' => $result]);
    }

    public function destroy(Request $request, SuratSembilan $SuratSembilan)
    {
    $SuratSembilan->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratSembilan.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_sembilans')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_sembilans')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_sembilans')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketerangandomisili/admin');
    }
}
