<?php
$user="dapi_201";
$pass="201";
$database="LOCALHOST/XE";

$con = oci_connect($user, $pass, $database);
if($con){
	echo "";

}
else{ 
	$err = oci_error();
echo "Gagal". $err['text'];
}
?>