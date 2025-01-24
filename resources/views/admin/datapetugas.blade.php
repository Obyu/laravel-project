@extends('layouts.app')

@section('title', 'Dashboard - Mazer Admin Dashboard')

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
                <h3>Data User</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>Data Petugas</div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahPegawaiModal">
                        Tambah Pegawai
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Telpon</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masyarakat as $data)
                        <tr>
                            <td>{{$data->nama_petugas}}</td>
                            <td>{{$data->username}}</td>
                            <td>{{$data->telp}}</td>
                            <td>{{$data->level}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="modal fade" id="tambahPegawaiModal" tabindex="-1" aria-labelledby="tambahPegawaiModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahPegawaiModalLabel">Tambah Pegawai</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{route('add.patugas')}}" method="POST" class="form form-horizontal">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="first-name-horizontal">First Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name-horizontal" class="form-control" name="nama_petugas" placeholder="Nama">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="email-horizontal">Username</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="email-horizontal" class="form-control" name="username" placeholder="Username">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="contact-info-horizontal">Telepon</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info-horizontal" class="form-control" name="telp" placeholder="Telepon">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="password-horizontal">Password</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="password" id="password-horizontal" class="form-control" name="password" placeholder="Password">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="level-horizontal">Level</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="level" id="admin" value="admin">
                                                            <label class="form-check-label" for="admin">Admin</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="level" id="petugas" value="petugas">
                                                            <label class="form-check-label" for="petugas">Petugas</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
</div>
@endsection
<link rel="stylesheet" href="{{asset('/vendors/simple-datatables/style.css')}}">

<script src="{{asset('/vendors/simple-datatables/simple-datatables.js')}}"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
