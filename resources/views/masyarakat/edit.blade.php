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
    <form action="/masyarakat/{{$pengaduan->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <label for="tgl_pengaduan">Tanggal :</label><br>
            <input type="date" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan" value="{{$pengaduan->tgl_pengaduan}}"><br>
            <label for="nik">NIK :</label><br>
            <input type="text" class="form-control" name="nik" id="nik" value="{{$pengaduan->nik}}"><br>
            <label for="laporan">Laporan :</label><br>
            <input type="text" class="form-control" name="isi_laporan" id="isi_laporan" value="{{$pengaduan->isi_laporan}}"><br>
            <label for="foto">Foto :</label><br>
            {{-- <img src="../../img/<?=$pengaduan->foto; ?>" width="1000"/><br> --}}
            @if ($pengaduan->foto)
            <img src="{{ Storage::url('public/images/').$pengaduan->foto }}" class="rounded" style="width: 1200px"></td><br>
            @else
            <span>Tidak ada foto</span>
            @endif
            <input type="file" @error('foto') 
            @enderror name="foto" id="foto" value="{{$pengaduan->foto}}" width="100"><br>
            @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <br>
            <button type="submit">Update</button>
        </form>
</body>
</html>