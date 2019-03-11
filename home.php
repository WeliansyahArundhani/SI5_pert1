<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="Stylesheet" type="text/css" href="tugas1.css">
</head>
<body>

	<font color="Brown"><br>
	<h2 align="center">DATA MAHASISWA LAB SI 5</h2><br>
	<hr color="Brown" width="100%" size="4" align="center"><br>
	<h3><a href="hallogin.php">Admin</a></h3><br>
	
	<table class="data" style = "background-color:pink; " border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>KOM</th>
		</tr>
		
		<tbody>
			<?php
				include "koneksi.php";
 
				// query sql untuk mengambil data pada tabel
				$sql = "SELECT * FROM mahasiswa ORDER BY id_mhs ASC";
				$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
				$no = 1; // no. urut
 
				while($data = mysqli_fetch_array($query)){
					
					$id = $data["id_mhs"];
					$nim = $data["nim"];
					$nama = $data["nama"];
					$kom = $data["kom"];
 
					echo "<tr>
							<td>$no</td>
							<td>$nim</td>
							<td>$nama</td>
							<td>$kom</td>
						  </tr>";
					$no++;
				}
			?>
 
			
		</tbody>
	</table>
</body>
</html>