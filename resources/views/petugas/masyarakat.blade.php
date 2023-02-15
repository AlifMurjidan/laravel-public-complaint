<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report!</title>
</head>
    <div class="col p-4">
        <h4 class="display-5 mb-4"><i class="fa fa-inbox "></i> MASYARAKAT</h4>
          <hr class="heigth: 10px;">
          <?php
            
          ?>
          <div class="row">
          <div class="col-md-12 ">
            <div class="card shadow-lg mb-5" >    
            <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <tbody>
                <h2 class="text-center">DAFTAR MASYARAKAT</h2>
        <table class="table">
            <thead>
                <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Username</th>
                <th>No. Telepon</th>
                <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                    {{-- <?php
                            $sql="SELECT * FROM masyarakat";
                            $aksi=mysqli_query($koneksi,$sql);
                            $nomor=1;
                            while ($konten = mysqli_fetch_array($aksi)) {
                            echo "<tr>";
                            echo "<td>".$nomor."</td>";
                            echo "<td>".$konten['nik']."</td>";
                            echo "<td>".$konten['nama']."</td>";
                            echo "<td>".$konten['username']."</td>";
                            echo "<td>".$konten['telp']."</td>";
                            echo "<td>";
                            echo "<a href='hapus-user.php?nik=".$konten['nik']."'><button class='btn btn-danger mr-3 style='width: 80px;'>Delete</button></a>";
                            echo "</td>";
                            echo "</tr>";
                            $nomor++;
                            }
                    ?>   --}}
                    <a href="">Kembali</a> 
                </tbody>
                </table>
                <tfoot>
                    <!-- <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>No. Telepon</th>
                        <th>Opsi</th>
                    </tr> -->
                </tfoot>
            </table>
            </div>
            </div>
            </div>
            </div>

        </div>
    </div>
</div>
</div>
</body>
</html>