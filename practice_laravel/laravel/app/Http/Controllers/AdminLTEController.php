<?php

namespace App\Http\Controllers;

use App\AdminLTE;
use App\SuratSatu;
use App\SuratDua;
use App\SuratEmpat;
use App\SuratLima;
use App\SuratEnam;
use App\SuratTujuh;
use App\SuratDelapan;
use App\SuratSembilan;
use App\SuratSepuluh;
use App\SuratSebelas;
use App\SuratDuabelas;
use App\SuratTigabelas;
use App\SuratEmpatbelas;
use App\SuratLimabelas;
use App\SuratEnambelas;
use App\SuratTujuhbelas;
use App\SuratDelapanbelas;

use Illuminate\Http\Request;

class AdminLTEController extends Controller
{
    public function index()
    {

    $data['module']['name'] = "Beranda";
    return view('adminLTE.index',['data' => $data,
    'jumlah_suratsatu' => SuratSatu:: count(),
    'jumlah_suratdua' => SuratDua:: count(),
    'jumlah_suratempat' => SuratEmpat:: count(),
    'jumlah_suratlima' => SuratLima:: count(),
    'jumlah_suratenam' => SuratEnam:: count(),
    'jumlah_surattujuh' => SuratTujuh:: count(),
    'jumlah_suratdelapan' => SuratDelapan:: count(),
    'jumlah_suratsembilan' => SuratSembilan:: count(),
    'jumlah_suratsepuluh' => SuratSepuluh:: count(),
    'jumlah_suratsebelas' => SuratSebelas:: count(),
    'jumlah_suratduabelas' => SuratDuabelas:: count(),
    'jumlah_surattigabelas' => SuratTigabelas:: count(),
    'jumlah_suratempatbelas' => SuratEmpatbelas:: count(),
    'jumlah_suratlimabelas' => SuratLimabelas:: count(),
    'jumlah_suratenambelas' => SuratEnambelas:: count(),
    'jumlah_surattujuhbelas' => SuratTujuhbelas:: count(),
    'jumlah_suratdelapanbelas' => SuratDelapanbelas:: count(),]);
    }

    
}