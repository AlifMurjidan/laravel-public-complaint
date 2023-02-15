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
    <a href="/masyarakat/pengaduan" style="color: #000000;">Kembali</a>
          <hr class="heigth: 10px;">
    <form action="/petugas/{{$pengaduan->id}}" method="POST">
        @csrf
        @method('PUT')
            <label for="tgl_pengaduan">Tanggal :</label><br>
            <input type="date" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan" value="{{$pengaduan->tgl_pengaduan}}"><br>
            <label for="nik">NIK :</label><br>
            <input type="text" class="form-control" name="nik" id="nik" value="{{$pengaduan->nik}}"><br>
            <label for="laporan">Laporan :</label><br>
            <input type="text" class="form-control" name="isi_laporan" id="isi_laporan" value="{{$pengaduan->isi_laporan}}"><br>
            <label for="foto">Foto :</label><br>
            <img src="{{ Storage::url('public/images/').$pengaduan->foto }}" class="rounded" style="width: 500px"></td><br>
            <label for="">Status :</label>
                  <select class="form-control" name="status">
                    <?php if ($pengaduan['status'] == "0") { ?>
                        <option selected value="0">Belum Dibaca</option>
                        <option value="proses">Sedang diproses</option>
                        <option value="selesai">Selesai diproses</option>
                    <?php }else if($pengaduan['status'] == "proses") { ?>
                        <option value="0">Belum Dibaca</option>
                        <option selected value="proses">Sedang diproses</option>
                        <option value="selesai">Selesai diproses</option>
                    <?php }else { ?>
                        <option value="0">Belum Dibaca</option>
                        <option value="proses">Sedang diproses</option>
                        <option selected value="selesai">Selesai diproses</option>
                    <?php } ?>
                  </select>
            <br><hr>
            <button type="submit">Update</button>
        </form>
</body>
</html>