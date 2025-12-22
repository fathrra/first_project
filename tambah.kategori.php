<?
require '../config.php'; require_login();
if($_SERVER['REQUEST_METHOD']=='POST'){
  $nama = trim($_POST['nama']);
  if($nama===''){ $err='Nama kosong'; }
  else {
    $stmt = $conn->prepare("INSERT INTO kategori (nama) VALUES (?)");
    $stmt->bind_param('s',$nama); $stmt->execute();
    header('Location:index.php'); exit;
  }
}
?>