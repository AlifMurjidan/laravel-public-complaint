{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
            @foreach ($errors->all() as $err)
            <p class=" alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="{{ route ('register.action')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>NIK :</label>
                    <input class="form-control" type="text" name="nik" id="nik" value="{{ old('nik')}}" />
                </div>
                <div class="mb-3">
                    <label>Nama :</label>
                    <input class="form-control" type="text" name="nama" id="nama" value="{{ old('nama')}}" />
                </div>
                <div class="mb-3">
                    <label>Username :</label>
                    <input class="form-control" type="text" name="username" id="username" value="{{ old('username')}}" />
                </div>
                <div class="mb-3">
                    <label>Telepon :</label>
                    <input class="form-control" type="text" name="telp" id="telp" value="{{ old('telp')}}" />
                </div>
                <div class="mb-3">
                    <label>Password :</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ old('password')}}" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Register</button>
                    {{-- <a href="{{ route('home')}}" class="btn btn-info">Kembali</a> --}}
                </div>
            </form>
        </div>
    </div>
</body>
</html> --}}