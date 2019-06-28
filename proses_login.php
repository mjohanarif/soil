<?php

include("config/koneksi.php");

$username	= $_POST['username'];
$password	= $_POST['password'];

$sql_login = "SELECT * FROM user 
			WHERE username = '$username' AND 
			password = '$password'";

$result = mysqli_query($koneksi, $sql_login);

if (mysqli_num_rows($result) > 0){
	session_start();

	$data = mysqli_fetch_array($result);
	$_SESSION['username'] 	= $data['username'];
	header("location:index.php");
}else{
	header("location:login.php?status=login-gagal");
}