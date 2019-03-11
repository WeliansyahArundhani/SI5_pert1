<?php  
	include 'koneksilog.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$cek_username =mysqli_query($koneksilog,"select * from login where username='$username'");
	$cek = mysqli_num_rows($cek_username);

	if($cek > 0)
	{
		echo "Username Sudah ada";
	}
	else
	{

	$query = "INSERT INTO login (username,password) VALUES('$username','$password')";
	$sql = mysqli_query($koneksilog,$query);

	if($sql){
		echo "Tambah Data Berhasil";
		header("location:hallogin.php");
	}
	else{
		echo "Tambah Data Gagal";
	}

	}
?>