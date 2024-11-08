<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class LoginController extends Controller

{
    public function index(){
        return view('auth.login');
    }
    public function login_proses(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);
    $data = [
        'username' => $request->username,
        'password' => $request->password,
    ];

    if (Auth::attempt($data)) {
        return redirect('/selectrole');
    }

    return back()->with('failed', 'Username atau Password anda ada yang salah');
}
    public function selectrole(){
        return view('selectrole');
    }
public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}
public function create()
{
    return view('auth.registrasi');
}
public function store(Request $request)
{
    $request->validate([
        'username' => 'required |max:45',            
        'password' => 'required |max:45',            
        
    ],
    [
        'username.required' => 'Username Wajib Di Isi!',
        'username.max' => 'Username Maksimal 45 Karekter',
        'password.required' => 'Password Harus Di Isi!',
    ]
);
$hashedPassword = bcrypt($request->password);
    //tambah data menggunakan query builder
    DB::table('user')->insert([
        'username'=>$request->username,
        'password'=>$hashedPassword,
    ]);
    return redirect('/')->with('success', 'Berhasil Membuat Akun!');
}

}