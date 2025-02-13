<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    @include('layout')
</head>
<style>
    body {
        background-image: url('https://storage.ko-fi.com/cdn/useruploads/post/330f80a5-28d4-4807-8d08-e54e2bdcb7b9_bluecityrevisitedclean.gif');
        height: 750px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }
</style>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6" style="color:white">
                <h1>Pelayanan Pengaduan Siswa</h1>
                <p><b>Username : Ramadhan</b> <br><b>password : 539211372</b> </p>
            </div>
            <div class="col-md-4 col-sm-12 shadow-lg rounded px-4 pt-5 border border-info"
                style="color:white; backdrop-filter: blur(200px);">
                <div class="d-flex justify-content-center align-items-center my-4">
                    <h3>Login Admin</h3>
                </div>
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                    @endif
                    <div class="input-control my-2">
                        <label for="username" class="mb-2"><b>Username : </b></label>
                        <input type="username" name="username" id="username" class="form-control" required>
                    </div>

                    <div class="input-control my-2">
                        <label for="password" class="mb-2"><b> Password :</b></label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div style="float: right;" class="mt-3">
                        <button type="submit" class="btn btn-outline-info my-4 px-4"><b>Login</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
