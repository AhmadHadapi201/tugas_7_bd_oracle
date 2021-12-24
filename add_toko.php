<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_toko = $_POST['id_toko'];
  $nama_toko = $_POST['nama_toko'];
  $alamat = $_POST['alamat'];
  $npwp = $_POST['npwp'];

	$query = "INSERT INTO toko_1001 (ID_TOKO,NAMA_TOKO,ALAMAT,NPWP) VALUES ('".$id_toko."','".$nama_toko."','".$alamat."','".$npwp."')";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
	window.location.href='toko.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
	window.location.href='toko.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: toko.php'); 
}