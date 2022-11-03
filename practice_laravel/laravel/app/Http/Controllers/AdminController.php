<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index() {
    return view('Admin.login',[
        'title' => 'login',
        'active' => 'login'
    ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'username' => 'required|min:3|max:50',
            'password' => 'required',
        ]);

    $admins = new Admin();
    $admins->username = $validateData['username'];
    $admins->password = $validateData['password'];
    $admins->save();
    $request->session()->flash('pesan','Penambahan data berhasil');
    return redirect()->route('Admin.index');
    }

    public function authenticate(Request $request)
    {
    $validateData = $request -> validate([
        'username' => 'required',
        'password' => 'required'
    ]);
    $result = Admin::where('username', '=', $validateData['username'])->first();
        if ($result) {
            if (($request -> password == $result -> password)) {
                session(['username' => $request -> username]);
                return redirect('/datapermintaansurat/admin');
            } else {
                return back() -> withInput() -> with ('pesan', "Login Gagal") ;
                }
            } else {
            return back() -> withInput() -> with ('pesan', "Login Gagal") ;
            }

    }

    public function logout(request $request) {
        session() -> forget('username');
        return redirect('/login') -> with ('pesan', 'Logout berhasil') ;
    }

    public function create(){
        return view('Admin.create');
    }

    public function index1(){
    $admins = Admin::all();
    return view('Admin.index',['admins' => $admins]);
    }

    public function show($Admin_id)
    {
    $result = Admin::findOrFail($Admin_id);
    return view('Admin.show',['Admin' => $result]);
    }

    public function destroy(Request $request, Admin $Admin)
    {
    $Admin->delete();
    $request->session()->flash('pesan','Hapus data berhasil');
    return redirect()->route('Admin.index');
    }
}
