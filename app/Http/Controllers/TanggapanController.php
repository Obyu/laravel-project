<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use App\Models\tanggapan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TanggapanController extends Controller
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

    public function detail($id_pengaduan){
        $detail = pengaduan::findOrFail($id_pengaduan);
        return view('admin.detail_laporan', compact('detail'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id_pengaduan)
    {
        $nik = Session::get('auth.id_petugas');

        if(!$nik){
            return redirect()->route('login')->withErrors('error', 'nik tidak ditemukan anda ilegal woy');
        }

        $tgl_tanggapan = Carbon::now();
        $pengaduan = pengaduan::findOrFail($id_pengaduan);
        tanggapan::create([
            'id_pengaduan'=> $pengaduan->id_pengaduan,
            'tgl_tanggapan'=> $tgl_tanggapan,
            'tanggapan'=>$request->tanggapan,
            'id_petugas'=>$nik
        ]);

        return redirect()->route('admin.table')->with('succes', 'anda berhasil memberikan tanggapan');
    }

    /**
     * Display the specified resource.
     */
    public function show(tanggapan $tanggapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tanggapan $tanggapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tanggapan $tanggapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tanggapan $tanggapan)
    {
        //
    }
}
