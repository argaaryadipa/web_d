<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

	<!-- Mahasiswa -->
	<div class="container">
		<div class="alert alert-info">Edit Data Mahasiswa</div>

        <?php
        require'../koneksi.php';

        // proses menampilkan data
        if(isset($_GET['url-nim'])) {
            $input_nim = $_GET['url-nim'];
            $query = "SELECT * FROM mahasiswa WHERE nim='$input_nim'";
            $result = mysqli_query($link, $query);
            $isi = mysqli_fetch_object($result);

        };

        // proses simpan data
        if (isset($_POST['simpan2'])) {
            $input_nim = $_POST['txtnim'];
            $input_nama_mahasiswa = $_POST['txtnama_mahasiswa'];
            $input_prodi = $_POST['txtprodi'];

            // query untuk update
            $query = "UPDATE mahasiswa SET nama_mahasiswa='$input_nama_mahasiswa', prodi='$input_prodi'
                    WHERE nim='$input_nim'";

            $result = mysqli_query($link, $query);
            if ($result){
                // location: no location :
                header('location: index2.php');
            }else{
                echo 'Gagal Disimpan : ', mysqli_error($link);
            }
        }
        
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="">NIM</label>
                <input type="text" class="form-control" name="txtnim"
                            value="<?= $isi->nim;?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="txtnama_mahasiswa"
                            value="<?= $isi->nama_mahasiswa;?>">
            </div>
            <div class="form-group">
                <label for="">Prodi</label>
                <input type="text" class="form-control" name="txtprodi" 
                            value="<?= $isi->prodi;?>">
            </div>
        
            <input type="submit" class="btn btn-primary" name="simpan2" 
                        value="Edit Data">
            <a href="index2.php" class="btn btn-warning">Batal</a>
            

        </form>
    </div>

</body>
</html>