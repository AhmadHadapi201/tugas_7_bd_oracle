<?php
require_once 'koneksi.php';
// cek id
if (isset($_GET['id'])) {
  $ID = $_GET['id'];
  $sql = "delete from suplier_1001 where ID_SUP='$ID' ";
  $parsesql = oci_parse($con, $sql);
  $q = oci_execute($parsesql) or die(oci_error());
  
  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='suplier.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data gagal dihapus'); window.location.href='suplier.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:suplier.php');
}