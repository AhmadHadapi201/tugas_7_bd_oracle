<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_sup = $_POST['id_sup'];
  $nama_sup = $_POST['nama_sup'];

$query = "INSERT INTO suplier_1001 (ID_SUP,NAMA_SUP) VALUES ('".$id_sup."','".$nama_sup."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='suplier.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='suplier.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: suplier.php'); 
}