<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.svg" type="image/x-icon')}}">
</head>

<body>
 @include('layouts.sidebar')
 </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
        <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Jumlah Petugas</h6>
                                                <h6 class="font-extrabold mb-0">{{$petugasCount}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Masyarakat</h6>
                                                <h6 class="font-extrabold mb-0">{{$masyarakatCount}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Pengaduan</h6>
                                                <h6 class="font-extrabold mb-0">{{$pengaduanCount}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Tanggapan</h6>
                                                <h6 class="font-extrabold mb-0">{{$tanggapanCount}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{asset('img/icons8-online-support.gif')}}">
                                    </div>
                                    <div class="ms-3 name">
                                        @if (session('auth.type') === 'petugas')
                                            <h5 class="font-bold">{{ session('auth.nama') }}</h5>
                                            <h6 class="text-muted mb-0">{{ session('auth.level')}}</h6>
                                        @else
                                            <h5 class="font-bold">Petugas tidak ditemukan</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="row">
                    <div class="col-12">
                        @foreach ($pengaduan as $ngadu)
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <div class="avatar avatar-lg me-3">
                                    <img src="{{ $ngadu->masyarakat->foto_profile ? asset('storage/' . $ngadu->masyarakat->foto_profile) : asset('img/avatar-1.webp') }}" alt="User Avatar">

                                    </div>
                                    <div>
                                        <h5 class="mb-0">{{$ngadu->masyarakat->nama}}</h5>
                                        <small class="text-muted">{{ $ngadu->created_at->format('d M Y') }}</small>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{$ngadu->isi_laporan}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('js/pages/dashboard.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
