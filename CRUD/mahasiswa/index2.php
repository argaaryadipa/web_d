<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

	

</head>
<body>

	<!-- Mahasiswa -->
	<div class="container">
		<div class="alert alert-info">Data Mahasiswa</div>
		
		<a href="create_mhs.php" class="btn btn-info">Tambah Data</a>
		<br><br>

		<table class="table table-bordered" cellpadding="10" cellspacing="0">
            
			<thead>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Prodi</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require '../koneksi.php';
					$query = "SELECT * FROM mahasiswa";
					// Jalankan query di atas
					$result = mysqli_query($link, $query);
					$no =1;
					while ($isi = mysqli_fetch_object($result)) {
				?>

				<tr>
					<td><?= $no++; ?></td>
					<td><?= $isi->nim; ?></td>
					<td><?= $isi->nama_mahasiswa; ?></td>
					<td><?= $isi->prodi; ?></td>
					<td>
						<a href="update_mhs.php?url-nim=<?php echo $isi->nim;?>" 
								class="btn btn-warning">Edit</a>
								
						<a href="delete_mhs.php?nim=<?php echo $isi->nim;?>" 
								class="btn btn-danger" onclick="return confirm ('Yakin ingin menghapus?');">
									Delete</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>