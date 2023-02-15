<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report!</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="main.css">
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
      <h2 style="margin-left: 22%; color: white">Layanan Aspirasi dan Pengaduan Online Rakyat</h2>
  </nav>
<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MENU UTAMA</small>
            </li>
            <a href="/petugas/dashboard" data-toggle="collapse" aria-expanded="false" class="bg-white list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="menu-collapsed">Dashboard</span>
                </div>
            </a>
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li>
            {{-- <a href="/petugas/masyarakat" class="bg-white list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="menu-collapsed">Masyarakat</span>
                </div>
            </a> --}}

            <a href="/petugas/admin" class="bg-white list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="menu-collapsed">Petugas</span>
                </div>
            </a>
            
            <a href="/petugas/report" class="bg-white list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="menu-collapsed">Pengaduan</span>
                </div>
            </a>
            </ul>
    </div>
    <div class="col p-4">
        <h4 class="display-5 mb-4"><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h4>
          <hr class="heigth: 10px;">
          <div class="row text-black">
          {{-- <div class="shadow-lg p-3 mb-5 ml-4 bg-body rounded"  style="width: 18rem;">
              <div class="card-body overview-item--c1">
                <div class="card-body-icon">
                </div>
                <h5 class="card-title">MASYARAKAT</h5>
                <div class="display-4">
                  
                </div>
                <a href=""><p class="card-text text-black">Lihat Detail</p></a>
              </div>
            </div>  --}}
            
            <div class="shadow-lg p-3 mb-5 ml-4 bg-body rounded"  style="width: 18rem;">
              <div class="card-body overview-item--c2">
                <div class="card-body-icon">
                </div>
                <h5 class="card-title">PETUGAS</h5>
                <div class="display-4">
                </div>
                <a href="/petugas/admin"><p class="card-text text-black">Lihat Detail</p></a>
              </div>
            </div> 
            
            <div class="shadow-lg p-3 mb-5 ml-4 bg-body rounded"  style="width: 18rem;">
              <div class="card-body overview-item--c3">
                <div class="card-body-icon">
                </div>
                <h5 class="card-title">PENGADUAN</h5>
                <div class="display-4">
                
                </div>
                <a href="/petugas/report"><p class="card-text text-black">Lihat Detail</p></a>
              </div>
            </div> 
          </div>
          
        </div>
    </div><!-- Main Col END -->
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="Keluar">
    </form>
</div><!-- body-row END -->
</div>
</body>
</html>