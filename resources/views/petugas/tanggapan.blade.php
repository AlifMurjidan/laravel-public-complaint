<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengaduan</title>
</head>
<body>
        <tbody>
            <h2 class="text-center">BERI TANGGAPAN</h2>
            <table class="table">
            <thead>
                <tr>
                    <a href="/petugas/dashboard" style="color: #000000;">Kembali</a><br>
                    </tr>
            </thead>
        <tbody>
            <form action="{{ route('petugas.tanggapans') }}" method="post">
                @csrf
            <div class="col p-4">
                <hr class="heigth: 10px;">
                <div class="form-group">
                     @foreach ($pengaduan as $data)
                     @endforeach
                    <label for="id_pengaduan" style="float:left; ">ID :</label>
                    <input type="text" class="form-control" name="id_pengaduan" id="id_pengaduan" value="{{$data->id}}"><br>
                    {{-- <select name="id" id="pengaduans">
                    <option value=""></option>
                    @foreach ($pengaduan as $data)
                        <option value="{{$data->id}}">{{$data->id}}</option>
                    @endforeach
                </select> --}}
                </div>
                      <div class="form-group">
                          <label for="" style="float:left; ">Tanggapan :</label><br>
                          <textarea class="form-control textarea mb-4" name="tanggapan" id="" rows="10" placeholder="Ketikkan Pengaduan Anda . . . ."></textarea><br>
                      </div>
                      @foreach ($petugas as $data)
                        {{-- <option value="{{$data->id_petugas}}">{{$data->id_petugas}}</option> --}}
                    @endforeach
                      <div class="form-group">
                    <label for="id_pengaduan" style="float:left; ">Petugas :</label>
                    <input type="text" class="form-control" name="id_petugas" id="id_petugas" value="{{$data->id_petugas}}"><br>
                    {{-- <select name="id" id="pengaduans">
                    <option value=""></option>
                    @foreach ($petugas as $data)
                        <option value="{{$data->id_petugas}}">{{$data->id_petugas}}</option>
                    @endforeach
                </select> --}}
                </div>
          </div>
          <button type="submit">Save</button>
        </form>
        </tbody>
            </table>
</body>
</html>