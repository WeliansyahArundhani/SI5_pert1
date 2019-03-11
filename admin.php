<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
	<link rel="Stylesheet" type="text/css" href="tugas1.css">
</head>
<body><!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
	<link rel="Stylesheet" type="text/css" href="tugas1.css">
</head>
<body>
	<font color="Brown"><br>
	<h2 align="center">DATA MAHASISWA LAB SI 5</h2><br>
	<hr color="Brown" width="100%" size="4" align="center"><br>
	<h3><a href="home.php">Home</a></h3><br>
	
	<table class="data" style = "background-color:white; " border="1">
		<thead>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>KOM</th>
			<th colspan="2">Aksi</th>
		</thead>
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
							<td align='center'>$no</td>
							<td align='center'>$nim</td>
							<td>$nama</td>
							<td align='center'>$kom</td>
							<td>
								<a href='rubah-data.php?rubah_id=$id'>Edit</a>
								<a href='hapus-data.php?hapus_id=$id'>Delete</a>
							</td>
						  </tr>";
					$no++;
				}
			?>
 
		</tbody>
	</table>
	<br><a href="tambah-data.php">Tambah Data</a><br><br>
</body>
</html>