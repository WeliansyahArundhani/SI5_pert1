<?php  
	include 'koneksilog.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$data = mysqli_query($koneksilog,"select * from login where username='$username' and password='$password'");
	$cek = mysqli_num_rows($data);

	if($cek > 0)
	{
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:admin.php");
	}
	else
	{
		echo "Login Gagal";
	}
?>