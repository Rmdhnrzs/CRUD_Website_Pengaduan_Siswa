<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/adminlte.min.css') }}">
    @include('layout')
</head>
<style>
    .sidebar-dark-primary {
  background-color: #03045E; /* Mengubah warna latar belakang menjadi hijau */
}

.sidebar-dark-primary .navbar-nav .nav-link {
  color: #ffffff; /* Mengubah warna teks menjadi putih */
}

.sidebar-dark-primary .navbar-nav .nav-link:hover {
  color: #f8f9fa; /* Mengubah warna teks menjadi putih ketika disorot */
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
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link " style="color:#03045E;"><b>History</b></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> --}}

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link d-flex justify-content-center align-items-center text-decoration-none">
                <span class="brand-text font-weight-light "><b>Dashboard Admin</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

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
                    <div class="row mb-2 d-flex justify-content-center align-items-center">
                        <div class="col-sm-12 mb-2" style="padding-left: 34px;">
                            <h1>History Data Aspirasi</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content px-5">
                <!-- Default box -->
                <div class="table-responsive">
                    <table class="table text-center" id="laporanTable">
                        <thead>
                            <tr>
                                <th class="px-3">NO</th>
                                <th class="px-2">Status</th>
                                <th class="px-2">NIS</th>
                                <th class="px-2">Nama Siswa</th>
                                <th class="px-2">Kategori</th>
                                <th class="px-2">Lokasi</th>
                                <th class="px-2">Keterangan</th>
                                <th class="px-2">Gambar</th>
                                <th class="px-2">Tanggal</th>
                                <th class="px-2" colspan="3">Action</th>
                            </tr>
                        </thead>

                        <tbody id="laporanTableBody" class="px-4">
                            @forelse ($laporan as $key => $data)
                                <tr data-category="{{ strtolower($data->kategori) }}">
                                    <td class="px-3">{{ $key + 1 }}</td>
                                    <td class="px-2">
                                        <b>
                                            <span
                                                class="badge rounded-pill
                                                @if ($data->status == 'menunggu') bg-danger
                                                @elseif($data->status == 'proses') bg-warning
                                                @elseif($data->status == 'selesai') bg-success @endif">
                                                {{ $data->status }}
                                            </span>
                                        </b>
                                    </td>
                                    <td class="px-2">{{ $data->nis }}</td>
                                    <td class="px-2">{{ $data->nama_siswa }}</td>
                                    <td class="px-2">{{ $data->kategori }}</td>
                                    <td class="px-2">{{ $data->lokasi }}</td>
                                    <td class="px-2">{{ $data->keterangan }}</td>
                                    <td class="px-2">
                                        <img src="{{ asset($data->gambar_kejadian) }}" alt=""
                                            width="50">
                                    </td>
                                    <td class="px-2">{{ $data->created_at->format('d F Y') }}</td>

                                    <td>
                                        <div class="btn-group" role="group">
                                            <form action="{{ route('laporan.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr id="table-none">
                                    <td class="px-2" colspan="10">
                                        <div class="container">
                                            <div class="row d-flex justify-content-center align-items-center text-align-center"
                                                style="height: 55vh;">
                                                <h3 class="text-secondary">Belum Ada History !</h3>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
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
        <aside class="control-sidebar control-sidebar-success ">
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
    {{-- <script src="../../dist/js/demo.js"></script> --}}
</body>
{{-- ------------------------------------------------------------------------------------- --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Isi pilihan tanggal
        var tanggalSelect = document.getElementById("tanggalFilter1");
        tanggalSelect.add(new Option("All Dates", "")); // Default option
        for (var i = 1; i <= 31; i++) {
            var option = document.createElement("option");
            option.value = i;
            option.text = i;
            tanggalSelect.add(option);
        }

        // Isi pilihan bulan
        var bulanSelect = document.getElementById("tanggalFilter2");
        bulanSelect.add(new Option("All Months", "")); // Default option
        var namaBulan = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        for (var j = 0; j < namaBulan.length; j++) {
            var optionBulan = document.createElement("option");
            optionBulan.value = j + 1;
            optionBulan.text = namaBulan[j];
            bulanSelect.add(optionBulan);
        }

        // Panggil fungsi applyFilter() untuk memfilter data saat halaman dimuat
        applyFilter();
    });

    function applyFilter() {
        var filterTanggal = document.getElementById("tanggalFilter1").value;
        var filterBulan = document.getElementById("tanggalFilter2").value;

        // Loop melalui setiap baris tabel
        var laporanRows = document.querySelectorAll("#laporanTableBody tr");
        laporanRows.forEach(function(row) {
            var rowDataTanggal = row.querySelector("td:nth-child(9)").textContent; // Kolom TANGGAL

            // Buat objek Date untuk membandingkan tanggal dan bulan secara akurat
            var rowDataDate = new Date(rowDataTanggal);

            // Cocokkan tanggal, bulan, dan tahun yang dipilih dengan tanggal, bulan, dan tahun pada setiap baris
            if ((filterTanggal === "" || rowDataDate.getDate() == filterTanggal) &&
                (filterBulan === "" || rowDataDate.getMonth() + 1 == filterBulan)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var selectElement = document.getElementById("kategoriFilter");

        selectElement.addEventListener("change", function() {
            var selectedCategory = selectElement.value;
            var tableRows = document.querySelectorAll("#laporanTableBody tr");

            tableRows.forEach(function(row) {
                var rowCategory = row.getAttribute("data-category");

                // Check if the selected category is "all" or matches the row's data-category attribute
                if (selectedCategory === "all" || selectedCategory === rowCategory) {
                    row.style.display = ""; // Display the row
                } else {
                    row.style.display = "none"; // Hide the row
                }
            });
        });
    });
</script>


</html>


{{-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Laporan</li>
                        </ol>
                    </div> --}}
