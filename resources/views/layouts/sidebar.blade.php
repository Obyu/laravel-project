<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo d-flex align-items-center">
                        <a href="index.html">
                            <img src="{{asset('images/logo.jpg')}}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                        </a>
                        <div class="ms-3">
                            <h4 class="m-0" style="line-height: 1;">PEMA</h4> <!-- Mengurangi line-height -->
                            <small style="font-size: 0.5rem; display: block; margin-top: -4px;">Pelaporan Masyarakat</small>
                        </div>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="{{route('admin.index')}}" class='sidebar-link'>
                                <i><img src="{{asset('img/icons8-combo-chart.gif')}}" alt=""></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{route('admin.table')}}" class='sidebar-link'>
                                <i><img src="{{asset('img/icons8-news.gif')}}" alt=""></i></i>
                                <span>Daftar Laporan</span>
                            </a>
                        </li>
                        @if (session('auth.type') === 'petugas' && session('auth.level') === 'admin')
                        <li class="sidebar-item  ">
                            <a href="{{route('admin.data')}}" class='sidebar-link'>
                                <i><img src="{{asset('img/icons8-auditorium.gif')}}" alt=""></i>
                                <span>Daftar Masyarakat</span>
                            </a>
                        </li>
                        @endif

                        @if (session('auth.type') === 'petugas' && session('auth.level') === 'admin')
                        <li class="sidebar-item  ">
                            <a href="{{route('admin.petugas')}}" class='sidebar-link'>
                                <i><img src="{{asset('img/icons8-auditorium.gif')}}" alt=""></i>
                                <span>Daftar Petugas</span>
                            </a>
                        </li>
                        @endif

                        <li class="sidebar-title">Authentication</li>

                        <li class="sidebar-item  ">
                            <a href="{{route('login')}}" class='sidebar-link'>
                                @csrf
                                <i><img src="{{asset('img/icons8-logout.gif')}}" alt=""></i>
                                <span>logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>