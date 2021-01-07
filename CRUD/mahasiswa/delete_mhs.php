<?php

if(isset($_GET['nim'])) {
    require'../koneksi.php';
    $input_nim = $_GET['nim'];

    $query = "DELETE FROM mahasiswa WHERE nim='$input_nim'";
    $result = mysqli_query($link, $query);

    
    if ($result){
        // location: no location :
        header('location: index2.php');
    }else{
        echo 'Gagal Disimpan : ', mysqli_error($link);
    }
}


?>