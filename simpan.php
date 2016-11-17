<?php
include_once('config.php');

//echo "<pre>".print_r($_POST,1)."</pre>";
	$tgl=$_POST['tgl'];
	$sql="INSERT INTO kegiatan_history VALUES ";
foreach ($_POST['id_k'] as $id => $v) {
	//echo $id.":".$v;
	$sql=$sql."(null,'$id','$tgl','','ya'),";
}
$sql=substr($sql,0,-1);
echo $sql;

mysqli_query($mysqli,$sql);  
header('location:index.php');
?>
