<?php
		$db_host='localhost';
		$db_name='todolist';
		$db_user='root';
		$db_psswd='mantos';

		$mysqli=mysqli_connect($db_host, $db_user, $db_psswd, $db_name);

		if(mysqli_connect_errno()) {
			die ('koneksi database gagal:'.
				mysqli_connect_error().
				'('.mysqli_connect_errno() .')');
				}

	?>