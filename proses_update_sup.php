<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_sup = $_POST['id_sup'];
  $nama_sup = $_POST['nama_sup'];
  

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  suplier_1001  SET NAMA_SUP ='".$nama_sup."' WHERE ID_SUP ='".$id_sup."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Suplier berhasil diubah'); window.location.href='suplier.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Suplier gagal diubah'); window.location.href='suplier.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: suplier.php'); 
}