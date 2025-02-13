<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    @include('layout')
</head>

<body>

    @include('header')
<<<<<<< HEAD
{{-- Lorem ipsum  --}}
=======

>>>>>>> d3aa9bc (hello world)

    {{-- HERO MASTER --}}
    <section id="master-hero">
        <div class="container d-flex justify-content-center align-items-center mt-5" style="height: 100vh;">
            <div class="row flex-md-row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-sm-1">
                <div class="col order-md-2">
                    <img src="https://assets-v2.lottiefiles.com/a/76c6bf1a-1179-11ee-ab67-cb5e71697cef/pSodLefOBR.gif"
                        alt="master-hero" class="img-fluid mb-3" width="900">
                </div>
                <div class="col d-flex justify-content-center align-items-center order-md-1 mt-3">
                    <div style="color:#03045E;">
                        <h5>Selamat Datang di,</h5>
                        <h1 class="display-6 typewriter" style="font-family: cambria; font-weight:800;">Pelayanan
                            Pengaduan
                            Siswa</h1>
                        <p style="font-family:cambria;">
                           Layanan Pengaduan dan aspirasi siswa untuk melaporkan ataupun memberikan aspirasi kepada sekolah agar menciptakan linkungan yang aman dan nyaman
                        </p>
                        <a href="#formulir-pengaduan">
                            <button class="btn btn-outline-primary px-5 py-2 border-2"><b> Isi Formulir !</b></button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <p id="formulir-pengaduan" class="my-5 mb-5" style="overflow: hidden;">.</p>
    </section>
    {{-- HERO MASTER --}}

    {{-- FORM --}}
    <section id="formulir-pengaduan">
        <div class="container px-4 rounded-3" style="height: 100vh;">
            <div class="row justify-content-center align-items-center shadow rounded"
                style="color: white; background-image:linear-gradient(#03045E,#00B4D8 );">
                <div class="col-md-6 col-sm-6">
                  <img src="https://i.gifer.com/5F5d.gif" alt="hero" height="500" style="mix-blend-mode: multiply; filter: brightness(0.9) contrast(1.5);">
                </div>
                <div class="col-md-5 col-sm-6 rounded py-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <h2 class="mt-4 mb-3">Formulir Data Pengaduan Siswa</h2>
                    </div>
                    <form id="formulir">
                        @csrf
                        <div class="input-control my-1">
                            <label for="nis" class="my-2">NIS : </label>
                            <input type="number" class="form-control" id="nis" name="nis">
                        </div>
                        <div class="input-control my-1">
                            <label for="nama_siswa" class="my-2">Nama Siswa : </label>
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
                        </div>
                        <input type="hidden" value="menunggu" class="hidden" id="status" name="status">
                        <div class="input-control my-1">
                            <label for="kategori" class="my-2">Kategori Aspirasi : </label>
                            <select name="kategori" id="kategori" class="form-select">
                                <option value="aspirasi">aspirasi</option>
                                <option value="kekerasan">kekerasan</option>
                                <option value="kenyamanan">Kenyamanan</option>
                                <option value="keamanan">Keamanan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="input-control my-1">
                            <label for="lokasi" class="my-2">Lokasi : </label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi">
                        </div>
                        <div class="input-control my-1">
                            <label for="keterangan" class="my-2">Keterangan : </label>
                            <textarea name="keterangan" id="keterangan" cols="20" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="input-control my-1">
                            <label for="gambar_kejadian" class="my-2">Photo : </label>
                            <input type="file" class="form-control" id="gambar_kejadian" name="gambar_kejadian">
                        </div>
                    </form>
                    <button class="btn btn-primary my-4 px-4 py-2" id="submitBtn"
                        style="float: right !important;">Submit !</button>
                </div>
            </div>
        </div>
    </section>
    {{-- FORM --}}

    {{-- Table History --}}
    <div class="container" id="history">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-12 col-sm-12">
                <h1 class="my-4" style="text-align: center;color:#03045E;">Histori Aspirasi Siswa</h1>
                <form id="searchForm">

                    <div class="col-md-5 offset-md-7"> <!-- Use offset-md-7 to move the search box to the right -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control search-input" style="border: 2px solid #00B4D8"
                                placeholder="Search By Id..." aria-label="Search" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn" style="border:2px solid #00B4D8;" type="button"
                                    id="searchByIdButton">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="laporanTable" class="table table-bordered border-success border-2">
                            <thead class="border border-light">
                                <tr style="text-align: center;">
                                    <th class=" text-light" style="background-color: #00B4D8;">No</th>
                                    <th class=" text-light" style="background-color: #00B4D8;">NIS</th>
                                    <th class=" text-light" style="background-color: #00B4D8;">Nama Siswa</th>
                                    <th class=" text-light" style="background-color: #00B4D8;">Kategori</th>
                                    <th class=" text-light" style="background-color: #00B4D8;">Lokasi</th>
                                    <th class=" text-light" style="background-color: #00B4D8;">Keterangan</th>
                                    <th class=" text-light" style="background-color: #00B4D8;">Gambar</th>
                                    <th class=" text-light" style="background-color: #00B4D8;">Status</th>
                                    <th class=" text-light" style="background-color: #00B4D8;">Feedback</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($laporan as $key=>$data)
                                    <tr style="text-align: center;" data-id="{{ $data->id }}" class="data-row">
                                        <td hidden>{{ $data->id }}</td>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $data->nis }}</td>
                                        <td>{{ $data->nama_siswa }}</td>
                                        <td>{{ $data->kategori }}</td>
                                        <td>{{ $data->lokasi }}</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td><img src="{{ asset($data->gambar_kejadian) }}" alt=""
                                                width="50">
                                        </td>
                                        <td>
                                            <b>
                                                <span
                                                    class="badge rounded-pill py-2 px-4
                                                            @if ($data->status == 'menunggu') bg-danger
                                                            @elseif($data->status == 'proses') bg-warning
                                                            @elseif($data->status == 'selesai') bg-success @endif">
                                                    {{ $data->status }}
                                                </span>
                                            </b>
                                        </td>
                                        <td>{{ $data->feedback }}</td>


                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    {{-- Table History --}}
</body>
<script>
    $(document).ready(function() {
        $("#searchByIdButton").click(function() {
            var searchId = $(".search-input").val().trim();

            // Loop melalui setiap baris tabel
            $(".data-row").each(function() {
                var rowId = $(this).data("id");

                // Cocokkan id yang diinputkan dengan id pada setiap baris
                if (searchId === "" || rowId.toString() === searchId) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Fungsi yang akan dipanggil ketika tombol "Submit" ditekan
        $("#submitBtn").click(function() {
            // Mendapatkan data formulir
            var formData = new FormData($("#formulir")[0]);
            // Mengirim data ke backend menggunakan Ajax
            $.ajax({
                type: "POST", // Metode HTTP
                url: "/submit-form", // Gantilah dengan URL backend Anda
                data: formData, // Data formulir
                processData: false,
                contentType: false,
                success: function(response) {
                    Swal.fire({
                        title: "Data Berhasil Terkirim !",
                        icon: "success",
                        timer: 1500,
                        didClose: () => {
                            setTimeout(function() {
                                    location.reload();
                                },
                                1000
                            ); // Ubah angka 1000 menjadi jumlah milidetik yang diinginkan
                        }
                    });
                },
                error: function(error) {
                    // Fungsi yang akan dijalankan jika permintaan gagal
                    console.log(error);
                    // Lakukan sesuatu dengan pesan kesalahan
                    alert("Terjadi kesalahan saat mengirim formulir.");
                }
            });
        });
    });
</script>

</html>
