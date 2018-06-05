<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<table style="border-collapse: collapse; color: green;" border="100" >
		<tbody>
			<tr style="background: orange;">
				<td>No Induk</td>
				<td>Nama</td>
				<td>Alamat</td>
				<td colspan="2">Eksekusi</td>
			</tr>
			<?php
			foreach ($data as $mahasiswa) {?>
				<tr bgcolor="white">
					<td><?php echo $mahasiswa['no_induk'];?></td>
					<td><?php echo $mahasiswa['nama'];?></td>
					<td><?php echo $mahasiswa['alamat'];?></td>
					<td><a href="<?php echo base_url()."index.php/helloworld/edit_data".$mahasiswa['no_induk'];?>">Edit</a></td>
					<td><a href="<?php echo base_url()."index.php/helloworld/delete_data".$mahasiswa['no_induk'];?>">Delete</a></td>
				</tr>
			<?php } ?>
			
		</tbody>
	</table>
	<a href="<?php echo base_url()."index.php/helloworld/add_data";?>">Insert</a>
</body>
</html>