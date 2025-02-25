<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\masyarakat;
use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function ShowLogin(){
        return view('Auth.Login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $masyarakat = masyarakat::where('username',$request->username)->first();

        if($masyarakat && Hash::check( $request->password, $masyarakat->password )) {
                Session::put('auth',[
                    'type'=> 'masyarakat',
                    'nik'=>$masyarakat->nik,
                    'nama'=>$masyarakat->nama,
                    'username'=>$masyarakat->username,
                    'telp'=>$masyarakat->telp
                ]);
            return redirect()->route('masyarakat.index')->with('success', 'anda berhasil login' . session::get('auth.username'));
        }
        $petugas = petugas::where('username',$request->username)->first();
        if($petugas && Hash::check( $request->password, $petugas->password )) {
                Session::put('auth',[
                    'type'=> 'petugas',
                    'id_petugas'=> $petugas->id_petugas,
                    'nama'=>$petugas->nama_petugas,
                    'username'=> $petugas->username,
                    'level'=> $petugas->level,
                    'telp'=>$petugas->telp
                ]);
               
                if($petugas->level === 'admin'){
                    return redirect()->route('admin.index');
                    
                }
            return redirect()->route('petugas.index');
        }
        return back()->withErrors(['login'=>'Login Gagal Mungkin username atau password anda salah']);
    }

    public function logout(){
        session::flush();
        return redirect()->route('login');
    }
}