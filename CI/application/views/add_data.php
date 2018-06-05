<!DOCTYPE html>
<html>
<head>
	<title>Add data mahasiswa</title>
</head>
<body>
	<table>
		<form method="post" action="<?php echo base_url()."index.php/helloworld/insert"; ?>">
			<tr>
				<td>Nomor Induk</td>
				<td>:</td>
				<td><input type="text" name="ni" placeholder="Nomor Induk"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" placeholder="Alamat Anda"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Inputkan"></td>
			</tr>
		</form>
	</table>
</body>
</html>