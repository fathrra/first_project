<?php 
session_start();

$host= 'localhost';
$user = 'root';
$pass = '';
$dbname = 'kasir_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error)
    die("Koneksi gagal: " . $conn->connect_error);

$conn->set_charset('utf8mb4');

date_default_timezone_set('Asia/Jakarta');


function is_login(){
    return isset($_SESSION['user']);
}

function require_login(){
    if(!is_login()){
        header('Location: index.php');
        exit;
    }
}

function esc($s){
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
?>
