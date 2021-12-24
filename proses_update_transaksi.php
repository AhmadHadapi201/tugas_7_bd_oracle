<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_transaksi = $_POST['id_transaksi'];
  $nama_sup = $_POST['nama_sup'];
  $nama_barang = $_POST['nama_barang'];
  $total_transaksi = $_POST['total_transaksi'];

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  transaksi_1001  SET NAMA_SUP ='".$nama_sup."',NAMA_BARANG ='".$nama_barang."',TOTAL_TRANSAKSI ='".$total_transaksi."' WHERE ID_TRANSAKSI ='".$id_transaksi."' " ;
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Transaksi berhasil diubah'); window.location.href='transaksi.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Transaksi gagal diubah'); window.location.href='transaksi.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: transaksi.php'); 
}