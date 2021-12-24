<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_transaksi = $_POST['id_transaksi'];
  $nama_sup = $_POST['nama_sup'];
  $nama_barang = $_POST['nama_barang'];
  $total_transaksi = $_POST['total_transaksi'];
  
$query = "INSERT INTO transaksi_1001 (ID_TRANSAKSI,NAMA_SUP,NAMA_BARANG,TOTAL_TRANSAKSI) VALUES ('".$id_transaksi."','".$nama_sup."','".$nama_barang."','".$total_transaksi."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='transaksi.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='transaksi.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: transaksi.php'); 
}