<!DOCTYPE html>
<html>
<head>
	<title>Belajar CI | MVC</title>
</head>
<body>
	<table style="border-collapse: collapse; color: green;" border="100" >
		<tbody>
			<tr style="background: orange;">
				<td>No Induk</td>
				<td>Nama</td>
				<td>Alamat</td>
			</tr>
			<?php
			foreach ($data as $mahasiswa) {?>
				<tr bgcolor="white">
					<td><?php echo $mahasiswa['no_induk'];?></td>
					<td><?php echo $mahasiswa['nama'];?></td>
					<td><?php echo $mahasiswa['alamat'];?></td>
				</tr>
			<?php } ?>
			
		</tbody>
	</table>
</body>
</html>