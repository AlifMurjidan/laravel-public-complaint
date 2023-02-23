<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
    {{-- {{$pengaduan}}; --}}
    <h4 class="display-5 mb-4">UBAH DATA</h4>
    <a href="/petugas/report" style="color: #000000;">Kembali</a>
          <hr class="heigth: 10px;">
    <form action="/petugas/{{$pengaduan->id}}" method="POST">
        @csrf
        @method('PUT')
            <label for="tgl_pengaduan">Tanggal :</label><br>
            <input type="date" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan" value="{{$pengaduan->tgl_pengaduan}}" disabled><br>
            <label for="nik">NIK :</label><br>
            <input type="text" class="form-control" name="nik" id="nik" value="{{$pengaduan->nik}}" disabled><br>
            <label for="laporan">Laporan :</label><br>
            <input type="text" class="form-control" name="isi_laporan" id="isi_laporan" value="{{$pengaduan->isi_laporan}}" disabled><br>
            <label for="foto">Foto :</label><br>
            <img src="{{ Storage::url('public/images/').$pengaduan->foto }}" class="rounded" style="width: 500px" disabled></td><br>
            <label for="">Status :</label>
                  <select class="form-control" name="status">
                    <?php if ($pengaduan['status'] == "Belum diproses") { ?>
                        <option selected value="Belum diproses">Belum Dibaca</option>
                        <option value="Sedang diproses">Sedang diproses</option>
                        <option value="Selesai diproses">Selesai diproses</option>
                    <?php }else if($pengaduan['status'] == "Sedang diproses") { ?>
                        <option value="Belum diproses">Belum Dibaca</option>
                        <option selected value="Sedang diproses">Sedang diproses</option>
                        <option value="Selesai diproses">Selesai diproses</option>
                    <?php }else { ?>
                        <option value="Belum diproses">Belum Dibaca</option>
                        <option value="Sedang diproses">Sedang diproses</option>
                        <option selected value="Selesai diproses">Selesai diproses</option>
                    <?php } ?>
                  </select>
            <br><hr>
            <button type="submit">Update</button>
        </form>
</body>
</html>