<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratLima;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class SuratLimaController extends Controller
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
        'nama_jenazah' => 'required',
        'tanggal' => 'required',
        'waktu' => 'required',
        'sebab_kematian' => 'required',
        'tempat_kematian' => 'required',
        'yang_menerangkan' => 'required',
        'status_ayah' => 'required',
         //masihhidup
         'nama_ayah' => 'required',
         'nik_ayah' => 'required',
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
        'nik_ibu' => 'required',
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

    $surat_limas = new SuratLima();
    $surat_limas->nik = $validateData['nik'];
    $surat_limas->nama = $validateData['nama'];
    $surat_limas->tempat_lahir = $validateData['tempat_lahir'];
    $surat_limas->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_limas->alamat = $validateData['alamat'];
    $surat_limas->pendidikan = $validateData['pendidikan'];
    $surat_limas->warga_negara = $validateData['warga_negara'];
    $surat_limas->agama = $validateData['agama'];
    $surat_limas->no_dokumen = $validateData['no_dokumen']?? null;
    $surat_limas->nama_jenazah = $validateData['nama_jenazah'];
    $surat_limas->tanggal = $validateData['tanggal'];
    $surat_limas->waktu = $validateData['waktu'];
    $surat_limas->sebab_kematian = $validateData['sebab_kematian'];
    $surat_limas->tempat_kematian = $validateData['tempat_kematian'];
    $surat_limas->yang_menerangkan = $validateData['yang_menerangkan'];
    $surat_limas->status_ayah = $validateData['status_ayah'];
    $surat_limas->nama_ayah = $validateData['nama_ayah'];
    $surat_limas->nik_ayah = $validateData['nik_ayah'];
    // $surat_limas->tempat_lahir_ayah = $validateData['tempat_lahir_ayah'] ?? null;
    $surat_limas->tempat_lahir_ayah = $validateData['tempat_lahir_ayah'];
    $surat_limas->tanggal_lahir_ayah = $validateData['tanggal_lahir_ayah'];
    $surat_limas->kewarganegaraan_ayah = $validateData['kewarganegaraan_ayah'];
    $surat_limas->status_ibu = $validateData['status_ibu'];
    $surat_limas->nama_ibu = $validateData['nama_ibu'];
    $surat_limas->nik_ibu = $validateData['nik_ibu'];
    $surat_limas->tempat_lahir_ibu = $validateData['tempat_lahir_ibu'];
    $surat_limas->tanggal_lahir_ibu = $validateData['tanggal_lahir_ibu'];
    $surat_limas->kewarganegaraan_ibu = $validateData['kewarganegaraan_ibu'];
    $surat_limas->saksi_satu = $validateData['saksi_satu'];
    $surat_limas->saksi_dua = $validateData['saksi_dua'];
    $surat_limas->no_hp = $validateData['no_hp'];
    $surat_limas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_limas = SuratLima::all();
    return view('SuratLima.index',['surat_limas' => $surat_limas]);
    }

    public function show($SuratLima_id)
    {
    $result = SuratLima::findOrFail($SuratLima_id);
    return view('SuratLima.show',['SuratLima' => $result]);
    }

    public function destroy(Request $request, SuratLima $SuratLima)
    {
    $SuratLima->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratLima.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_limas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_limas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_limas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratkematian/admin');
    }
}
