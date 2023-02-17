<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengaduan</title>
</head>
<body>
    <h4 class="display-5 mb-4">PENGADUAN</h4>
    <hr class="heigth: 10px;">
    <a href="/cetak_pdf"><button class="btn btn-success mb-3" style="width: 120px;" name="button" type="submit"><i class="fas fa-plus mr-1"></i> PDF</button></a>
        <tbody>
            <h2 class="text-center">DAFTAR PENGADUAN</h2>
            <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>NIK</th>
                    <th>Laporan</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Opsi</th>
                    </tr>
            </thead>
        <tbody>
            @foreach ($listPengaduan as $list)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$list->tgl_pengaduan}}</td>
                    <td>{{$list->nik}}</td>
                    <td>{{$list->isi_laporan}}</td>
                    <td><img src="{{ Storage::url('public/images/').$list->foto }}" style="width: 200px"></td>
                <td><?php if ($list->status == 0) : ?>
                    Belum diproses
                <?php elseif ($list->status == 'proses') : ?>
                    Sedang diproses
                <?php elseif ($list->status == 'selesai') : ?>
                    Selesai diproses
                <?php endif ; ?>
                </td>
                <td>
                    <form action="/petugas/delete/{{$list->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                    <a href="{{ route('petugas.edit', $list->id)}}" style="color :#000000">Ubah Status</a>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        <a href="/petugas/dashboard" style="color: #000000;">Kembali</a>
            </table>
</body>
</html>