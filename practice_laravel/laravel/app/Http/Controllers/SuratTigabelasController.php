<?php

namespace App\Http\Controllers;

use App\User;
use App\SuratTigabelas;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class SuratTigabelasController extends Controller
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
                'penghasilan' => 'required',
                'status_pasangan' => 'required',
                //masihhidup
                'nama_pasangan' => [
                    Rule::requiredIf(fn () => $request->status_pasangan == "MASIH_HIDUP")
                ],
                'penghasilan_pasangan' => [
                    Rule::requiredIf(fn () => $request->status_pasangan == "MASIH_HIDUP")
                ],
                'tanggungan' => 'required',
                'anak_tanggungan' =>'required',
                'anak_tanggungan_1' => [
                    Rule::requiredIf(fn () => $request->anak_tanggungan == "MASIH_ADA")
                ],
                'anak_tanggungan_2' => [
                    Rule::requiredIf(fn () => $request->anak_tanggungan == "MASIH_ADA")
                ],
                'anak_tanggungan_3' => [
                    Rule::requiredIf(fn () => $request->anak_tanggungan == "MASIH_ADA")
                ],
                'anak_tanggungan_4' => [
                    Rule::requiredIf(fn () => $request->anak_tanggungan == "MASIH_ADA")
                ],
                'anak_tanggungan_5' => [
                    Rule::requiredIf(fn () => $request->anak_tanggungan == "MASIH_ADA")
                ],
                'anak_tanggungan_6' => [
                    Rule::requiredIf(fn () => $request->anak_tanggungan == "MASIH_ADA")
                ],
                'anak_tanggungan_7' => [
                    Rule::requiredIf(fn () => $request->anak_tanggungan == "MASIH_ADA")
                ],
                'anak_tanggungan_8' => [
                    Rule::requiredIf(fn () => $request->anak_tanggungan == "MASIH_ADA")
                ],
                'no_hp' => 'required',
        ]);


    $surat_tigabelas = new SuratTigabelas();
    $surat_tigabelas->nik = $validateData['nik'];
    $surat_tigabelas->nama = $validateData['nama'];
    $surat_tigabelas->tempat_lahir = $validateData['tempat_lahir'];
    $surat_tigabelas->tanggal_lahir = $validateData['tanggal_lahir'];
    $surat_tigabelas->alamat = $validateData['alamat'];
    $surat_tigabelas->pendidikan = $validateData['pendidikan'];
    $surat_tigabelas->warga_negara = $validateData['warga_negara'];
    $surat_tigabelas->agama = $validateData['agama'];
    $surat_tigabelas->penghasilan = $validateData['penghasilan'];
    $surat_tigabelas->status_pasangan = $validateData['status_pasangan'];
    $surat_tigabelas->nama_pasangan = $validateData['nama_pasangan'];
    $surat_tigabelas->penghasilan_pasangan = $validateData['penghasilan_pasangan'];
    $surat_tigabelas->tanggungan = $validateData['tanggungan'];
    $surat_tigabelas->anak_tanggungan = $validateData['anak_tanggungan'];
    $surat_tigabelas->anak_tanggungan_1 = $validateData['anak_tanggungan_1'];
    $surat_tigabelas->anak_tanggungan_2 = $validateData['anak_tanggungan_2'];
    $surat_tigabelas->anak_tanggungan_3 = $validateData['anak_tanggungan_3'];
    $surat_tigabelas->anak_tanggungan_4 = $validateData['anak_tanggungan_4'];
    $surat_tigabelas->anak_tanggungan_5 = $validateData['anak_tanggungan_5'];
    $surat_tigabelas->anak_tanggungan_6 = $validateData['anak_tanggungan_6'];
    $surat_tigabelas->anak_tanggungan_7 = $validateData['anak_tanggungan_7'];
    $surat_tigabelas->anak_tanggungan_8 = $validateData['anak_tanggungan_8'];
    $surat_tigabelas->no_hp = $validateData['no_hp'];
    $surat_tigabelas->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('SuratSatu.index1');
    }

    public function index()
    {
    $surat_tigabelas = SuratTigabelas::all();
    return view('SuratTigabelas.index',['surat_tigabelas' => $surat_tigabelas]);
    }

    public function show($SuratSebelas_id)
    {
    $result = SuratTigabelas::findOrFail($SuratSebelas_id);
    return view('SuratTigabelas.show',['SuratTigabelas' => $result]);
    }

    public function destroy(Request $request, SuratTigabelas $SuratTigabelas)
    {
    $SuratTigabelas->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('SuratTigabelas.index');
    }

    public function index1()
    {
        return view('SuratSatu.thank');
    }

    public function status($id){
        $data = \DB::table('surat_tigabelas')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('surat_tigabelas')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('surat_tigabelas')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('suratketeranganpenghasilandantanggungankeluarga/admin');
    }
}
