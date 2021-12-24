<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $no_gudang = $_POST['no_gudang'];
  $id_toko = $_POST['id_toko'];
  $nama_gudang = $_POST['nama_gudang'];
  $kapasitas = $_POST['kapasitas'];
  

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  gudang_1001  SET NAMA_GUDANG ='".$nama_gudang."', KAPASITAS ='".$kapasitas."' WHERE NO_GUDANG ='".$no_gudang."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Gudang berhasil diubah'); window.location.href='gudang.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Gudang gagal diubah'); window.location.href='gudang.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: gudang.php'); 
}