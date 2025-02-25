<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\masyarakat;
use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function registerMasyarakat(Request $request){
        $validate = $request->validate([
            'foto_profile'=>'required|image|mimes:jpeg,jpg,png,gif',

        ]);
        $fotoPath = null;
        if ($request->hasFile('foto_profile')) {
            $fotoPath = $request->file('foto_profile')->store('public/foto_profile');
        }
        masyarakat::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'telp'=>$request->telp,
            'foto_profile'=>$fotoPath ?? null
        ]);

        return redirect()->route('login')->with('succes', 'anda berhasil registrasi silahkan login');
    }

    public function registerPetugas(Request $request){
        if (petugas::where('username', $request->username)->exists()) {
            return redirect()->back()->with('error', 'petugas sudah ada');
        }
        petugas::create([
            'nama_petugas'=>$request->nama_petugas,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'telp'=>$request->telp,
            'level'=>$request->level
        ]);
        return redirect()->route('admin.petugas')->with('succes','anda berhasil register orang');
    }
}
