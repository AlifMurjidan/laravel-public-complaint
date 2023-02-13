<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h4 class="display-5 mb-4">TAMBAH DATA</h4>
    <hr class="heigth: 10px;">
    <form action="/masyarakat" method="post">
    @csrf
        <label for="tgl_pengaduan">Tanggal</label><br>
        <input type="date" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan"><br>
        <label for="nik">NIK</label><br>
        <input type="text" class="form-control" name="nik" id="nik"><br>
        <label for="location">Laporan</label><br>
        <input type="text" class="form-control" name="isi_laporan" id="isi_laporan"><br>
        <label for="temperature">Foto</label><br>
        <input type="file" class="form-control" name="foto" id="foto"><br>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>