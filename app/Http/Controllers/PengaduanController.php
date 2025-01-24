<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'isi_laporan'=>'required|string',
            'foto'=>'nullable|image|mimes:jpeg,jpg,png,gif',

        ]);
        $nik = Session::get('auth.nik');

        if(!$nik){
            return redirect()->route('login')->withErrors('error', 'nik tidak ditemukan anda ilegal woy');
        }

        $tgl_pengaduan = Carbon::now();

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto_pengaduan');
        }


        pengaduan::create([
            'tgl_pengaduan'=>$tgl_pengaduan,
            'nik'=>$nik,
            'isi_laporan'=>$validate['isi_laporan'],
            'foto'=>$fotoPath,
            'status'=>'0',
        ]);

        return redirect()->route('admin.table')->with('succes', 'anda berhasil membuat laporan');
    }

    /**
     * Display the specified resource.
     */
    public function show(pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengaduan $pengaduan)
    {
        //
    }
}
