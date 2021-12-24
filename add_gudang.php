<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $no_gudang = $_POST['no_gudang'];
  $id_toko = $_POST['id_toko'];
  $nama_gudang = $_POST['nama_gudang'];
  $kapasitas = $_POST['kapasitas'];


$query = "INSERT INTO gudang_1001 (NO_GUDANG,ID_TOKO,NAMA_GUDANG,KAPASITAS) VALUES ('".$no_gudang."','".$id_toko."','".$nama_gudang."','".$kapasitas."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='gudang.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='gudang.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: gudang.php'); 
}