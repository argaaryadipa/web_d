<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

	<!-- Dosen -->
	<div class="container">
		<div class="alert alert-info">Data Dosen</div>
		<table class="table table-bordered" cellpadding="10" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama Dosen</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require '../koneksi.php';
					$query = "SELECT * FROM dosen";
					// Jalankan query di atas
					$result = mysqli_query($link, $query);
					$no =1;
					while ($isi = mysqli_fetch_object($result)) {
				?>

				<tr>
					<td><?= $no++; ?></td>
					<td><?= $isi->nip; ?></td>
					<td><?= $isi->nama_dosen; ?></td>
					<td><?= $isi->alamat; ?></td>
					<td>
						<a href="" class="btn btn-warning">Edit</a>
						<a href="" class="btn btn-danger">Delete</a>
					</td>
				</tr> 
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>