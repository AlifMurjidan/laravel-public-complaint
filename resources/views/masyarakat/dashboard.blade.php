<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Masyarakat</title>
</head>
<body>
    <h1>Dashboard Masyarakat</h1>
    <div class="header">
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top" style="height:70px;" id="navbar">
            <div class="collapse navbar-collapse ml-5 px-2" id="navbarNav" style="font-size:20px;">
            <ul class="navbar-nav ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="/masyarakat/dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/masyarakat/pengaduan">Pengaduan</a>
                </li>
            </ul>
            </div>
            <ul class="navbar-nav ml-5">
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Log out</a>
                    </li>
                </ul>
        </nav>
        <div class="inner-header" style="padding-top: 150px;">
            <div class="row justify-content-center">
            <div class="card shadow-lg mb-5" style="z-index:20;">
            <div class="card-body" style="color:black">
            <h4>Selamat datang {{Auth::user()->username}}, di Aplikasi Pengaduan Masyarakat</h4><br>
            <h1>Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
            <h3>Sampaikan laporan Anda langsung kepada <br>instansi pemerintah berwenang</h3>
            @csrf
        <br>
            </div>
            </div>
            </div>
            </div>
    </form>
</body>
</html>