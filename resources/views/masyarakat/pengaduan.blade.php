<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pengaduan</title>
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
            </div>
        </nav>
        <div class="inner-header" style="padding-top: 50px;">
            
            <h3>List Pengaduan Masyarakat</h3>
            <a href="/masyarakat/add" style="color: #000000;">Add Data</a>
            <hr>
            <tbody>
                @foreach ($pengaduanList as $data)
                <tr>
                    
                    <td>Tanggal : {{$data->tgl_pengaduan}}</td><br>
                    <td>NIK : {{$data->nik}}</td><br>
                    <td>Status :  <?php if ($data->status == 'Belum diproses') : ?>
                        Belum diproses
                    <?php elseif ($data->status == 'Sedang diproses') : ?>
                        Sedang diproses
                    <?php elseif ($data->status == 'Selesai diproses') : ?>
                        Selesai diproses
                    <?php endif ; ?>
                    </td><br>
                    <td>Tanggapan : {{$data->tanggapans['tanggapan']}}</td><br>
                    <br>
                    <a href="{{ route('masyarakat.detail', $data->id)}}" style="color :#000000">Detail</a><br>
                    <hr>
                </tr>
                @endforeach
            </tbody>
        
            </div>
    </form>
</body>
</html>