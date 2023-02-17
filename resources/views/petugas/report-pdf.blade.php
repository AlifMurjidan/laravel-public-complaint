<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No.</th>
                <th>Tanggal</th>
                <th>NIK</th>
                <th>Laporan</th>
                <th>Foto</th>
                <th>Status</th>
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
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>