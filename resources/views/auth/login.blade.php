<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Halaman Login</title>
</head>
<body>
    <div class="inner-header" style="padding-top: 180px;">
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-4 " style="padding-top:10px; ">
    <div class="card shadow-lg mb-5" style="z-index:20; min-height: 300px;">  
    <div class="container">
        <h1 class="text-center my-2">FORM LOGIN</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3">
            <label for="username">Username</label><br>
            <input type="text" name="username"  class="form-control" id="username">
            </div>
            <div class="mb-3">
            <label for="password">Password</label><br>
            <input type="password" name="password"  class="form-control" id="password">
            </div>
            <div class="mb-3">
            <label for="password_confirm">Konfirmasi Password</label><br>
            <input type="password" name="password_confirm"  class="form-control" id="password_confirm">
            </div>
            <p style=" float: left;">Belum punya akun ? <a href="" style="color: black;">Daftar</a></p>
              <button class="btn btn-success " name="button" type="submit" style="margin-bottom:12px; width:100px; float: right;" data-toggle="" data-target="">Masuk</button>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>