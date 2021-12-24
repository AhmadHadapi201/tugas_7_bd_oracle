<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_toko = $_POST['id_toko'];
  $nama_toko = $_POST['nama_toko'];
  $alamat = $_POST['alamat'];
  $npwp = $_POST['npwp'];

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  toko_1001  SET NAMA_TOKO ='".$nama_toko."', ALAMAT ='".$alamat."', NPWP ='".$npwp."' WHERE ID_TOKO ='".$id_toko."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Toko berhasil diubah'); window.location.href='toko.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Toko gagal diubah'); window.location.href='toko.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: toko.php'); 
}