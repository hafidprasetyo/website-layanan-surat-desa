<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratEmpat;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class SuratEmpatController extends Controller
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
        'no_dokumen' => '',
        'nama_bayi' => 'required',
        'jenis_kelamin' => 'required',
        'tempat_dilahirkan' => 'required',
        'tempat_kelahiran' => 'required',
        'tanggal' => 'required',
        'waktu' => 'required',
        'jenis_kelahiran' => 'required',
        'kelahiran_ke' => 'required',
        'penolong_kelahiran' => 'required',
        'berat_bayi' => 'required',
        'panjang_bayi' => 'required',
        'status_ayah' => 'required',
        //masihhidup
        'nama_ayah' => 'required',
        'nik_ayah' => 'required|size:16',
        //apabila luar desa
        'tempat_lahir_ayah' => [
            Rule::requiredIf(fn () => $request->status_ayah == "MENINGGAL/LUAR_DESA")
        ],
        'tanggal_lahir_ayah' => [
            Rule::requiredIf(fn () => $request->status_ayah == "MENINGGAL/LUAR_DESA")
        ],
        'kewarganegaraan_ayah' => [
            Rule::requiredIf(fn () => $request->status_ayah == "MENINGGAL/LUAR_DESA")
        ],
        'status_ibu' => 'required',
        //masihhidup
        'nama_ibu' => 'required',
        'nik_ibu' => 'required|size:16',
        //apabila luar desa
        'tempat_lahir_ibu' => [
            Rule::requiredIf(fn () => $request->status_ibu == "MENINGGAL/LUAR_DESA")
        ],
        'tanggal_lahir_ibu' => [
            Rule::requiredIf(fn () => $request->status_ibu == "MENINGGAL/LUAR_DESA")
        ],
        'kewarganegaraan_ibu' => [
            Rule::requiredIf(fn () => $request->status_ibu == "MENINGGAL/LUAR_DESA")
        ],
        'saksi_satu' => 'required',
        'saksi_dua' => 'required',
        'no_hp' => 'required',
    ]);

    $surat_empats = new SuratEmpat();
    $surat_empats->nik = $validateData['nik'];
    $surat_empats->nama = $validateData['nama'];
    $surat_empats->tempat_lahir = $validateData['tempat_lahir'];
    $surat_empats->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_empats->alamat = $validateData['alamat'];
    $surat_empats->pendidikan = $validateData['pendidikan'];
    $surat_empats->warga_negara = $validateData['warga_negara'];
    $surat_empats->agama = $validateData['agama'];
    $surat_empats->no_dokumen = $validateData['no_dokumen']?? null;
    $surat_empats->nama_bayi = $validateData['nama_bayi'];
    $surat_empats->jenis_kelamin = $validateData['jenis_kelamin'];
    $surat_empats->tempat_dilahirkan = $validateData['tempat_dilahirkan'];
    $surat_empats->tempat_kelahiran = $validateData['tempat_kelahiran'];
    $surat_empats->tanggal = $validateData['tanggal'];
    $surat_empats->waktu = $validateData['waktu'];
    $surat_empats->jenis_kelahiran = $validateData['jenis_kelahiran'];
    $surat_empats->kelahiran_ke = $validateData['kelahiran_ke'];
    $surat_empats->penolong_kelahiran = $validateData['penolong_kelahiran'];
    $surat_empats->berat_bayi = $validateData['berat_bayi'];
    $surat_empats->panjang_bayi = $validateData['panjang_bayi'];
    $surat_empats->status_ayah = $validateData['status_ayah'];
    $surat_empats->nama_ayah = $validateData['nama_ayah'];
    $surat_empats->nik_ayah = $validateData['nik_ayah'];
    // $surat_empats->tempat_lahir_ayah = $validateData['tempat_lahir_ayah'] ?? null;
    $surat_empats->tempat_lahir_ayah = $validateData['tempat_lahir_ayah'];
    $surat_empats->tanggal_lahir_ayah = $validateData['tanggal_lahir_ayah'];
    $surat_empats->kewarganegaraan_ayah = $validateData['kewarganegaraan_ayah'];
    $surat_empats->status_ibu = $validateData['status_ibu'];
    $surat_empats->nama_ibu = $validateData['nama_ibu'];
    $surat_empats->nik_ibu = $validateData['nik_ibu'];
    $surat_empats->tempat_lahir_ibu = $validateData['tempat_lahir_ibu'];
    $surat_empats->tanggal_lahir_ibu = $validateData['tanggal_lahir_ibu'];
    $surat_empats->kewarganegaraan_ibu = $validateData['kewarganegaraan_ibu'];
    $surat_empats->saksi_satu = $validateData['saksi_satu'];
    $surat_empats->saksi_dua = $validateData['saksi_dua'];
    $surat_empats->no_hp = $validateData['no_hp'];
    $surat_empats->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_empats = SuratEmpat::all();
    return view('SuratEmpat.index',['surat_empats' => $surat_empats]);
    }

    public function show($SuratEmpat_id)
    {
    $result = SuratEmpat::findOrFail($SuratEmpat_id);
    return view('SuratEmpat.show',['SuratEmpat' => $result]);
    }

    public function destroy(Request $request, SuratEmpat $SuratEmpat)
    {
    $SuratEmpat->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratEmpat.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_empats')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_empats')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_empats')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratkelahiran/admin');
    }
}
