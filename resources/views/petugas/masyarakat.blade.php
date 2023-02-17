<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Masyarakat</title>
</head>
<body>
    <h4 class="display-5 mb-4">MASYARAKAT</h4>
    <hr class="heigth: 10px;">
        <tbody>
            <h2 class="text-center">DAFTAR MASYARAKAT</h2>
            <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Telp</th>
                    <th>Opsi</th>
                    </tr>
            </thead>
        <tbody>
            @foreach ($listMasyarakat as $list)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$list->nik}}</td>
                    <td>{{$list->masyarakat['nama']}}</td>
                    <td>{{$list->masyarakat['username']}}</td>
                    <td>{{$list->masyarakat['telp']}}</td>
                <td>
                    <form action="/petugas/deletemasyarakat/{{$list->nik}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        <a href="/petugas/dashboard" style="color: #000000;">Kembali</a>
            </table>
</body>
</html>