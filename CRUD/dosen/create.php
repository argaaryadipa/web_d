<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Dosen</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

	<!-- Dosen -->
	<div class="container">
		<div class="alert alert-info">Tambah Data Dosen</div>
		
		

        <?php
        require'../koneksi.php';

        if (isset($_POST['simpan'])) {
            $input_nip = $_POST['txtnip'];
            $input_nama = $_POST['txtnama'];
            $input_alamat = $_POST['txtalamat'];

            $query = "INSERT INTO dosen VALUES
            ('$input_nip', '$input_nama', '$input_alamat')";

            $result = mysqli_query($link, $query);
            if ($result){
                // location: no location :
                header('location: index.php');
            }else{
                echo 'Gagal Disimpan : ', mysqli_error($link);
            }
        }
        
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="">NIP</label>
                <input type="text" class="form-control" name="txtnip">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="txtnama">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="txtalamat">
            </div>
        
            <input type="submit" class="btn btn-primary" name="simpan" 
                        value="Simpan Data">
            <a href="index.php" class="btn btn-warning">Batal</a>
            

        </form>
    </div>

</body>
</html>