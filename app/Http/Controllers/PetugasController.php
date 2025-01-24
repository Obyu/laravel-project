<?php

namespace App\Http\Controllers;

use App\Models\masyarakat;
use App\Models\pengaduan;
use App\Models\petugas;
use App\Models\tanggapan;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $masyarakatCount = masyarakat::count();
        $petugasCount = petugas::count();
        $pengaduanCount = pengaduan::count();
        $tanggapanCount = tanggapan::count();
        $pengaduan = pengaduan::with('masyarakat')->get();
        $masyarakat = masyarakat::all();
        return view('petugas.dashboard', compact('pengaduan','tanggapanCount','masyarakatCount','petugasCount','pengaduanCount','masyarakat'));
    }

    public function table(){
        $pengaduan = pengaduan::with('masyarakat')->orderBy('created_at', 'desc')->get();
        return view('petugas.table',compact('pengaduan'));
    }

    public function detail($id_pengaduan){
        $detail = pengaduan::findOrFail($id_pengaduan);
        return view('admin.detail_laporan', compact('detail'));
    }


    public function verifikasi( Request $request, $id){
        $pengaduan = pengaduan::findOrFail($id);
        $pengaduan->status = $request->input('status');
        $pengaduan->save();

        return redirect()->route('petugas.table');
    }
}
