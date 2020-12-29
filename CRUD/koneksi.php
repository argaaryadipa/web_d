<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'web_d';

$link = mysqli_connect($host, $user, $password, $db);

if (!$link) {
	die(mysqli_connect_error());
}

// echo "Ah Mantap";

?>

