<!DOCTYPE html>
<html>
<head>
	<title> Form </title>
</head>
<body>
	<table>
			<form action="Loginproses.php" method="post" enctype="multipart/form-data"> 
				<tr>
					<td> Nama		: <input type="text" name="nama" value=""></td>
				</tr>

				<tr>
					<td> Hobi		: <input type="checkbox" name="hobi[]" value=""> Futsal
							  		  <input type="checkbox" name="hobi[]" value="">Voli
									  <input type="checkbox" name="hobi[]" value=""> Basket
									  <input type="checkbox" name="hobi[]" value=""> Tenis Meja
				</tr>
				
				<tr>
					<td> Upload : <input type="file" name="foto" value = ""></td>
					<td>	 <input type="submit" name="kirim" value = "Send"></td>
				</tr>
			</form>
	</table>
</body>
</html>
