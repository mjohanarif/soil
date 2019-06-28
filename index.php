<?php

session_start();
if (empty($_SESSION['username'])) {
	header("location:login.php");
	exit();
}

if(isset($_GET['page'])) {
	$page=$_GET['page'];
}else{
	$page="home";
}

switch($page) {

	case "home":
		$tittle="Dashboard Admin";
		include "header.php";
		include "menu.php";
		include "halaman/home/home.php";
		include "footer.php";
	break;

	case "tanah":
		$tittle="Tanah";
		include "header.php";
		include "menu.php";
		include "halaman/tanah/tanah.php";
		include "footer.php";
	break;

	case "user":
		$tittle="User";
		include "header.php";
		include "menu.php";
		include "halaman/user/user.php";
		include "footer.php";
	break;

}

?>