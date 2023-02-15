<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data</title>
</head>
<body>
    <h4 class="display-5 mb-4">DETAIL DATA PENGADUAN</h4>
    <a href="/masyarakat/pengaduan" style="color: #000000;">Kembali</a>
        <hr class="heigth: 10px;">
                <br>
                <td>Tanggal : <?= $pengaduan->tgl_pengaduan ?></td><br>
                <td>NIK : <?= $pengaduan->nik ?></td><br>
                <td>Laporan : <?= $pengaduan->isi_laporan ?></td><br>
                <td>Foto : </td><br>
                <td><img src="{{ Storage::url('public/images/').$pengaduan->foto }}" class="rounded" style="width: 1200px"></td><br>
                <td>Status : <?php if ($pengaduan->status == 0) : ?>
                    Belum diproses
                <?php elseif ($pengaduan->status == 'proses') : ?>
                    Sedang diproses
                <?php elseif ($pengaduan->status == 'selesai') : ?>
                    Selesai diproses
                <?php endif ; ?></td><br>
                <br>
                <a href="{{ route('masyarakat.edit', $pengaduan->id)}}" style="color :#000000">Edit</a>
                    <hr>
            </tbody>
    </form>
</body>
</html>