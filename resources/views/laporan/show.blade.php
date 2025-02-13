<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    @include('layout')

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/adminlte.min.css') }}">
</head>
<style>
    .sidebar-dark-primary {
        background-color: #03045E;

    }

    .sidebar-dark-primary .navbar-nav .nav-link {
        color: #ffffff;
    }

    .sidebar-dark-primary .navbar-nav .nav-link:hover {
        color: #f8f9fa;
    }
</style>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="color: #03045E;"><b>Show Detail</b> </a>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link d-flex justify-content-center align-items-center ">
                <span class="brand-text font-weight-light">Show Detail Data</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div> --}}

                <!-- SidebarSearch Form -->
                <div class="form-inline my-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar bg-light" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar bg-light">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/history" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Histori
                                </p>
                            </a>
                        </li>

                        <li class="nav-item fixed-bottom">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="nav-link bg-danger">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p class="text-light">Logout</p>
                                </button>
                            </form>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2 px-5">
                        <div class="col-sm-6">
                            <h1 style="color:#03045E;">Data Detail Laporan Pengaduan</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content px-5">
                <!-- Default box -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 shadow px-5 py-4">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <div class="col-md-6">
                                    <form method="post" action="{{ route('laporan.updateStatus', $laporan->id) }}">
                                        @csrf
                                        @method('patch')
                                        <label for="status">Status:</label>
                                        <select name="status" id="status" class="form-select">
                                            <option value="menunggu" @if ($laporan->status == 'menunggu') selected @endif>
                                                Menunggu
                                            </option>
                                            <option value="proses" @if ($laporan->status == 'proses') selected @endif>
                                                Proses
                                            </option>
                                            <option value="selesai" @if ($laporan->status == 'selesai') selected @endif>
                                                Selesai
                                            </option>
                                        </select>
                                        <br>
                                        <button type="submit" class="btn"
                                            style="background-color: #03045E; color:white;">Update Status</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <form method="post" action="{{ route('laporan.feedback', $laporan->id) }}">
                                        @csrf
                                        @method('patch')
                                        <label for="feedback" class="form-label">Masukkan Feedback:</label>
                                        <input type="text" name="feedback" id="feedback"
                                            placeholder="masukkan feedback" class="form-control">
                                        <br>
                                        <button type="submit" class="btn "
                                            style="background-color: #03045E; color:white;">Update feedback</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <div class="col-md-6">
                                    <h5 class="my-4">Gambar Kejadian : <br><img
                                            src="{{ url($laporan->gambar_kejadian) }}" alt="gambar" width="200"
                                            class="my-4"></h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="my-4">Nama Siswa: {{ $laporan->nama_siswa }}</h5>
                                    <h5 class="my-3">NIS : {{ $laporan->nis }}</h5>
                                    <h5 class="my-3">Kategori : {{ $laporan->kategori }}</h5>
                                    <h5 class="my-4">Lokasi : {{ $laporan->lokasi }}</h5>
                                    <h5 class="my-4">Keterangan : {{ $laporan->keterangan }}</h5>
                                </div>

                            </div>

                            <a href="/dashboard">
                                <button class="btn" style="float: right; background-color: #03045E; color:white;">
                                    Kembali<b>-></b>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong style="color: #03045E;">Copyright &copy; 2024. RAMADHAN RIZKI SAPUTRA</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>
{{-- ------------------------------------------------------------------------------------- --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</html>
