<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- File ini berfungsi untuk membuat Navbar/Header dari sebuah website dengan simpel dan multifungsional --}}
    <title>Header</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg shadow fixed-top mx-3 px-5 mt-2 rounded-5" style="background-color: #03045E; border-bottom:5px solid #90E0EF;">
        <div class="container-fluid px-3 py-2" >
            <a class="navbar-brand text-light fw-semibold" href="#" style="font-family: 'Playfair Display', serif;">Pelayanan Pengaduan Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-2">
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold" href="/kegiatan-siswa">Kegiatan Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold" href="/#history">Histori Aspirasi</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a href="/login" class="text-light fw-bold text-decoration-none" target="_blank">Login</a>
                </span>
            </div>
        </div>
    </nav>

</body>

</html>
