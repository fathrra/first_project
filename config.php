<?php 
$host= 'localhost';
$user = 'root';
$pass = '';
$dbname = 'kasir_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if (!$conn) {
    die("konaksi gagal :" . mysqli_cconnect_error());
}
?>