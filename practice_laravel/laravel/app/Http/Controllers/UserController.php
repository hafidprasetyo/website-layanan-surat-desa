<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
    $data ['module']['name'] = 'Beranda';

    return view('userlte.index',
    ['data' => $data]);
    }

    public function create()
    {
        return view('SuratSatu.create');
    }

    public function create2()
    {
        return view('SuratDua.create');
    }

    public function create4()
    {
        return view('SuratEmpat.create');
    }

    public function create5()
    {
        return view('SuratLima.create');
    }

    public function create6()
    {
        return view('SuratEnam.create');
    }

    public function create7()
    {
        return view('SuratTujuh.create');
    }

    public function create8()
    {
        return view('SuratDelapan.create');
    }

    public function create9()
    {
        return view('SuratSembilan.create');
    }

    public function create10()
    {
        return view('SuratSepuluh.create');
    }

    public function create11()
    {
        return view('SuratSebelas.create');
    }

    public function create12()
    {
        return view('SuratDuabelas.create');
    }

    public function create13()
    {
        return view('SuratTigabelas.create');
    }

    public function create14()
    {
        return view('SuratEmpatbelas.create');
    }

    public function create15()
    {
        return view('SuratLimabelas.create');
    }

    public function create16()
    {
        return view('SuratEnambelas.create');
    }

    public function create17()
    {
        return view('SuratTujuhbelas.create');
    }

    public function create18()
    {
        return view('SuratDelapanbelas.create');
    }

    public function contact()
    {
        return view('userlte.contact');
    }
}
