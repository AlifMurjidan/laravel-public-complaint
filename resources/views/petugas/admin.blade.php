<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Admin</title>
</head>
<body>
    <h4 class="display-5 mb-4">ADMIN</h4>
    <hr class="heigth: 10px;">
        <tbody>
            <h2 class="text-center">DAFTAR PETUGAS</h2>
            <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Telp</th>
                    <th>Level</th>
                    <th>Opsi</th>
                    </tr>
            </thead>
        <tbody>
            @foreach ($listAdmin as $list)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$list->petugas['nama']}}</td>
                    <td>{{$list->petugas['username']}}</td>
                    <td>{{$list->petugas['telp']}}</td>
                    <td>{{$list->level}}</td>
                    {{-- <td>{{$list->petugas}}</td> --}}
                <td>
                    <form action="/petugas/deleteadmin/{{$list->id_petugas}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                    {{-- <a href="{{ route('petugas.edit', $list->id)}}" style="color :#000000">Ubah Status</a> --}}
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        <a href="/petugas/dashboard" style="color: #000000;">Kembali</a>
            </table>
</body>
</html>