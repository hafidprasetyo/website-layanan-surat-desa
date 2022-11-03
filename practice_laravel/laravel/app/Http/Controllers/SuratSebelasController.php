<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratSebelas;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class SuratSebelasController extends Controller
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
        'agama_ayah' => [
            Rule::requiredIf(fn () => $request->status_ayah == "MENINGGAL/LUAR_DESA")
        ],
        'alamat_ayah' => [
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
        'agama_ibu' => [
            Rule::requiredIf(fn () => $request->status_ibu == "MENINGGAL/LUAR_DESA")
        ],
        'alamat_ibu' => [
            Rule::requiredIf(fn () => $request->status_ibu == "MENINGGAL/LUAR_DESA")
        ],
        'keterangan' => '',
        'no_hp' => 'required',
    ]);

    $surat_sebelas = new SuratSebelas();
    $surat_sebelas->nik = $validateData['nik'];
    $surat_sebelas->nama = $validateData['nama'];
    $surat_sebelas->tempat_lahir = $validateData['tempat_lahir'];
    $surat_sebelas->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_sebelas->alamat = $validateData['alamat'];
    $surat_sebelas->pendidikan = $validateData['pendidikan'];
    $surat_sebelas->warga_negara = $validateData['warga_negara'];
    $surat_sebelas->agama = $validateData['agama'];
    $surat_sebelas->status_ayah = $validateData['status_ayah'];
    $surat_sebelas->nama_ayah = $validateData['nama_ayah'];
    $surat_sebelas->nik_ayah = $validateData['nik_ayah'];
    // $surat_sebelas->tempat_lahir_ayah = $validateData['tempat_lahir_ayah'] ?? null;
    $surat_sebelas->tempat_lahir_ayah = $validateData['tempat_lahir_ayah']?? null;
    $surat_sebelas->tanggal_lahir_ayah = $validateData['tanggal_lahir_ayah']?? null;
    $surat_sebelas->agama_ayah = $validateData['agama_ayah']?? null;
    $surat_sebelas->alamat_ayah = $validateData['alamat_ayah']?? null;
    $surat_sebelas->status_ibu = $validateData['status_ibu'];
    $surat_sebelas->nama_ibu = $validateData['nama_ibu'];
    $surat_sebelas->nik_ibu = $validateData['nik_ibu'];
    // $surat_sebelas->tempat_lahir_ayah = $validateData['tempat_lahir_ayah'] ;
    $surat_sebelas->tempat_lahir_ibu = $validateData['tempat_lahir_ibu']?? null;
    $surat_sebelas->tanggal_lahir_ibu = $validateData['tanggal_lahir_ibu']?? null;
    $surat_sebelas->agama_ibu = $validateData['agama_ibu']?? null;
    $surat_sebelas->alamat_ibu = $validateData['alamat_ibu']?? null;
    $surat_sebelas->keterangan = $validateData['keterangan'];
    $surat_sebelas->no_hp = $validateData['no_hp'];
    $surat_sebelas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_sebelas = SuratSebelas::all();
    return view('SuratSebelas.index',['surat_sebelas' => $surat_sebelas]);
    }

    public function show($SuratSebelas_id)
    {
    $result = SuratSebelas::findOrFail($SuratSebelas_id);
    return view('SuratSebelas.show',['SuratSebelas' => $result]);
    }

    public function destroy(Request $request, SuratSebelas $SuratSebelas)
    {
    $SuratSebelas->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratSebelas.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_sebelas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_sebelas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_sebelas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketeranganbersihdiri/admin');
    }
}
