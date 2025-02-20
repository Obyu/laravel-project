@extends('layouts.app')

@section('title', 'Data Laporan Masyarakat Desa - Mazer Admin Dashboard')

@section('content')
    @include('layouts.sidebar') <!-- Pastikan sidebar dimasukkan dengan cara yang benar -->

    </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Table Laporan Pengaduan</h3>
                <p class="text-subtitle text-muted">ini adalah table pengaduan</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row" id="table-contexual">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table mb-0 table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">NAME</th>
                                        <th class="text-nowrap">NIK</th>
                                        <th class="text-nowrap">PHONE</th>
                                        <th class="text-nowrap">TANGGAL LAPORAN</th>
                                        <th class="text-nowrap">STATUS</th>
                                        <th class="text-nowrap">DETAIL INFO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengaduan as $ngadu)
                                    <tr class="table-active">
                                        <td class="text-bold-500 text-nowrap">{{$ngadu->masyarakat->nama}}</td>
                                        <td class="text-nowrap">{{$ngadu->nik}}</td>
                                        <td class="text-bold-500 text-nowrap">{{$ngadu->masyarakat->telp}}</td>
                                        <td class="text-nowrap">{{$ngadu->tgl_pengaduan}}</td>
                                        <td class="text-nowrap text-center">
                                            {{$ngadu->status}} 
                                            @if($ngadu->status == "0")
                                            <form action="{{route('verif',$ngadu->id_pengaduan)}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary" name="status" value="proses">Proses</button>
                                            </form>
                                            @elseif($ngadu->status == "proses")
                                            <form action="{{route('verif',$ngadu->id_pengaduan)}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success" name="status" value="selesai">Selesai</button>
                                            </form>
                                            @elseif($ngadu->status == "selesai")
                                                <button type="submit" class="btn btn-secondary" disabled>Selesai</button>
                                            @endif
                                        </td>
                                        <td class="text-nowrap text-center">
                                            <!-- Sesuaikan data-bs-target dengan ID unik -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalDetail{{$ngadu->id_pengaduan}}" class="text-white">
                                                <img src="{{asset('img/icons8-info.gif')}}">
                                            </a>
                                        </td>
                                        <td>
                                        <td class="text-center">
                                            <a href="{{ route('laporan.generate', $ngadu->id_pengaduan) }}" class="btn btn-success">Generate Laporan</a>
                                        </td>
                                        </td>
                                    </tr>

                                    <!-- Modal dengan ID unik -->
                                    <div class="modal fade" id="modalDetail{{$ngadu->id_pengaduan}}" tabindex="-1" aria-labelledby="modalDetailLabel{{$ngadu->id_pengaduan}}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalDetailLabel{{$ngadu->id_pengaduan}}">Detail Pengaduan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <img src="{{ asset('storage/'.$ngadu->foto) }}" class="card-img-top" alt="Gambar Pengaduan">
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Isi Pengaduan</h4>
                                                                <p class="card-text">{{$ngadu->isi_laporan}}</p>
                                                                <form action="{{route('tanggapan.store',$ngadu->id_pengaduan)}}" method="post">
                                                                    @csrf
                                                                    <div class="form-body">
                                                                        <div class="form-group">
                                                                            <label for="feedback{{$ngadu->id_pengaduan}}" class="sr-only">Berikan Tanggapan</label>
                                                                            <input type="text" id="feedback{{$ngadu->id_pengaduan}}" class="form-control" placeholder="Tanggapan" name="tanggapan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-actions d-flex justify-content-end">
                                                                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                                        <button type="reset" class="btn btn-light-primary">Cancel</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>

                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
