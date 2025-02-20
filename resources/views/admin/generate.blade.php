@extends('layouts.app')

@section('title', 'Laporan - Pelaporan Masyarakat Desa')

@section('content')

<div class="card shadow-lg border-0">
    <div class="card-header bg-primary text-white text-center">
        <h2 class="m-0">Laporan Pengaduan</h2>
    </div>
    <div class="card-body">
    @if ($pengaduan->foto)
    <img src="{{ $imgSrc }}" style="width: 100%; height: auto;">
@endif
        <p><strong>Isi Laporan:</strong> {{ $pengaduan->isi_laporan }}</p>
        <p><strong>Tanggal Pengaduan:</strong> {{ \Carbon\Carbon::parse($pengaduan->tgl_pengaduan)->format('d M Y') }}</p>
        <p><strong>Status:</strong> 
            <span class="badge {{ $pengaduan->status == 'selesai' ? 'bg-success' : 'bg-warning' }}">
                {{ ucfirst($pengaduan->status) }}
            </span>
        </p>
    </div>
    <div class="card-footer">
        <h3 class="mb-3">Tanggapan Petugas</h3>
        <ul class="list-group">
            @foreach($tanggapan as $tanggapans)
                <li class="list-group-item">
                    <strong>{{ $tanggapans->petugas->nama_petugas }}:</strong> 
                    <span class="text-muted">{{ $tanggapans->tanggapan }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
