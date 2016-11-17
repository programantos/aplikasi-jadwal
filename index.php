<?php include_once('config.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>todolist</title>
	<link rel="stylesheet" type="text/css" href="style-1.css">
</head>
<body>
	<header>
		<h1>JADWALKU</h1>
		<hr>
	</header>
<select>
	<?php
		for ($i=1; $i <= 12; $i++) {
		$bln=sprintf("%02d", $i);
		echo $bln."<br>";
		$string = strtotime(date('Y-').$bln.'-01');
		$tgl = date('F',$string);
		echo "<option value=$i>$tgl</option>";
		}
	?>
</select>
<select >
		<?php
			for ($i=2016; $i < 2050; $i++) {
			echo "<option value=$i>$i</option>";
			}
		?>
</select>
				<input type="submit" name="ok" value="OK  ">
				<br>
<?php
	$yrs=date('y');
	$month=date('F');
	$day= date('d');
	for ($i=1; $i <= $day; $i++) {
?>		
<form action="simpan.php" method="POST" >
	<div class="kotak">
		<div class="isi">
		<center><?php echo $i.' '.$month.' '.$yrs;?></center>
		<hr>
			<?php
				$result = mysqli_query($mysqli, "SELECT * FROM kegiatan_jenis ORDER BY id ASC");
				while ($res = mysqli_fetch_array($result)) {
				?>
				<?php $tgl=date('Y-m-').$i;?>
			<input type="hidden" name="tgl" value="<?php echo $tgl;?>">	
			<?php
				$id_keg=$res['id'];
				$c=' ';
				//echo $tgl;
				$check=mysqli_query($mysqli,"SELECT * FROM kegiatan_history WHERE id_kegiatan=$id_keg AND tgl='$tgl'");
				while ($red=mysqli_fetch_array($check)) {
					//echo $red['realisasi'];	
						if($red['realisasi']=='ya'){
						$c='checked';
					}else{
						$c='';
					}
				}
				
			 ?>

			<input type="checkbox" <?php echo $c; ?> name="id_k[<?php echo $res['id'];?>]"><?php echo $res['nama_kegiatan'];?><br>
			<?php }?>
			<input type="submit" name="add" value="add">
		</div>
	</div>  
</form>					
<?php } ?>
</body>
</html>