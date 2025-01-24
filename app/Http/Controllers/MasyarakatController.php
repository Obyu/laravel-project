<?php

namespace App\Http\Controllers;

use App\Models\masyarakat;
use App\Models\pengaduan;
use App\Models\petugas;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { $pengaduan = pengaduan::with('masyarakat')->orderBy('created_at', 'desc')->get();
        $gawai = petugas::all();

        return view('masyarakat.dashboard', compact('pengaduan','gawai'));
    }

    public function ShowUpload(){
        return view('masyarakat.upload');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(masyarakat $masyarakat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(masyarakat $masyarakat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, masyarakat $masyarakat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(masyarakat $masyarakat)
    {
        //
    }
}
