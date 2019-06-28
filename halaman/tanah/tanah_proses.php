<?php
include "../../config/koneksi.php";
header("Content-type:application/json");

$ACTION = $_POST["action"];

switch ($ACTION) {
	case 'viewTanah':
		$query 	= "SELECT * FROM tbl_water order by id_data DESC";
		$hasil	= mysqli_query($koneksi, $query);

		$arr	= array();
		while ($row = mysqli_fetch_array($hasil)) {
			array_push($arr, $row);
		}
			echo json_encode($arr);
	break;
}

?>