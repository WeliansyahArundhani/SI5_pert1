<?php
		include "koneksi.php";
		//menangkap data dari form
		$id = $_POST['id'];
		$kode = $_POST["nim"];
		$nm = $_POST["nama"];
		$km = $_POST["kom"];
		 
		// update data ke database
		mysqli_query($koneksi,"update mahasiswa set nim='$kode', nama='$nm', kom='$km', jurusan='$jur' where id_mhs='$id'");
 
		// mengalihkan halaman kembali ke index.php
		header("location:admin.php");
	?>
