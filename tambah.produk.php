<?
require '../config.php'; require_login();
if($_SERVER['REQUEST_METHOD']=='POST'){
  $kode = $conn->real_escape_string($_POST['kode']);
  $nama = $_POST['nama'];
  $kat  = intval($_POST['kategori_id']);
  $harga = floatval($_POST['harga']);
  $stok = intval($_POST['stok']);
  $stmt = $conn->prepare("INSERT INTO produk (kode,nama,kategori_id,harga,stok) VALUES (?,?,?,?,?)");
  $stmt->bind_param('ssidd',$kode,$nama,$kat,$harga,$stok); $stmt->execute();
  header('Location:index.php'); exit;
}
?>