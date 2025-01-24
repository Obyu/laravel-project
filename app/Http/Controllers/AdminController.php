<?php

namespace App\Http\Controllers;

use App\Models\masyarakat;
use App\Models\pengaduan;
use App\Models\petugas;
use App\Models\tanggapan;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $masyarakatCount = masyarakat::count();
        $petugasCount = petugas::count();
        $pengaduanCount = pengaduan::count();
        $tanggapanCount = tanggapan::count();
        $pengaduan = pengaduan::with('masyarakat')->get();
        $masyarakat = masyarakat::all();
        return view('admin.dashboard', compact('pengaduan','tanggapanCount','masyarakatCount','petugasCount','pengaduanCount','masyarakat'));
    }

    public function table(){
        $pengaduan = pengaduan::with('masyarakat')->orderBy('created_at', 'desc')->get();
        return view('admin.table',compact('pengaduan'));
    }

    public function detail($id_pengaduan){
        $detail = pengaduan::findOrFail($id_pengaduan);
        return view('admin.detail_laporan', compact('detail'));
    }


    public function verifikasi( Request $request, $id){
        $pengaduan = pengaduan::findOrFail($id);
        $pengaduan->status = $request->input('status');
        $pengaduan->save();

        return redirect()->route('admin.table');
    }

    public function datauser(){
        $masyarakat = masyarakat::all();
        return view('admin.datauser', compact('masyarakat'));
    }

    public function datapetugas(){
        $masyarakat = petugas::all();
        return view('admin.datapetugas', compact('masyarakat'));
    }
    public function generatePDF()
    {
        // Data untuk laporan
        $data = [
            'title' => 'Laporan Data Pegawai',
            'date' => date('d-m-Y'),
            'pegawai' => [
                ['nama' => 'John Doe', 'jabatan' => 'Manager', 'gaji' => '10.000.000'],
                ['nama' => 'Jane Smith', 'jabatan' => 'HR', 'gaji' => '8.000.000'],
                ['nama' => 'Alex Johnson', 'jabatan' => 'Developer', 'gaji' => '12.000.000'],
            ],
        ];

        // Generate PDF
        $pdf = Pdf::loadView('admin.generate', $data);

        // Langsung unduh file PDF
        return $pdf->download('laporan.pdf');
    }

}
