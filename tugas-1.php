<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Jadwal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<!--<?php
		/*$db_host='localhost';
		$db_name='todolist';
		$db_user='root';
		$db_psswd='mantos';

		$mysqli=mysqli_connect($db_host, $db_user, $db_psswd, $db_name);

		if(mysqli_connect_errno()) {
			die ('koneksi database gagal:'.
				mysqli_connect_error().
				'('.mysqli_connect_errno() .')');
				}*/

	?>-->
</head>
<body>
<header>
	<div class="header">

		<img src="form.png" alt="form.png">
		<h1>my<br>schadule</h1>
	

	</div>
</header>
<form action="action.php" method="post">

<select>
	<?php
/*$date=['januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember'];

for($i=0; $i <12 ; $i++) {

	echo "<option value=$i>$date[$i]</option>";	
}*/
	for ($i=1; $i <= 12; $i++) { 
		$bln=sprintf("%02d", $i);
		$string = strtotime(date('Y-').$bln.'-01');
		$tgl = date('F',$string);
		echo "<option value=$i>$tgl</option>";
	}

	?>
</select>

<select>
	<?php 
		$years=[2016, 2017,2018,2019,2020];
		for($i=0; $i<5; $i++){
		echo "<option value=$i>$years[$i]</option>";
	}?>
</select>


	<input type="button" name="OK" value="Ok">
</form>
<br>
<form>
	<?php
	for($i=1;$i<=31;$i++){
	?>

	<div class="kotak">
	<form action="action.php" method="post">

		<h2><?php echo $i;?>&nbsp januari 2016</h2>
		<hr>
		<div class="isi">
			<input type="text" name="kegiatan pilihan">	
			<input type="button" name="ok" value="+">
		</div>
	</div>	

</form>

<div class="clearfix"></div>
<footer>
	<center>
	<p>&copy Rohmat Trimanto</p>
	</center>
</footer>
</body>
</html>