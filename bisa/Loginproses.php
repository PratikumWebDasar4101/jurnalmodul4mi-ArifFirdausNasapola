<?php 
	
	session_start();

	if (isset($_POST["kirim"])) {

	$nama		= $_FILES['foto']['name'];
	$tmp		= $_FILES['foto']['tmp_name'];
	$dir		= "gambar/";

	$uppic 		= move_uploaded_file($tmp, $dir. $nama);

			if ($uppic) {
			$data = $_POST['hobi'];
			$_SESSION['hobi'] = $hobi;
			$_SESSION['foto'] = $dir.$name;
			header("Location: halamanakhir.php");
	}
}
?>