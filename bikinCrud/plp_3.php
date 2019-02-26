<?php
	//error_reporting(0);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$nama = $_POST['Nama'];
		$umur = $_POST['Umur'];
		$kelas = $_POST['Kelas'];

	include 'config.php';

	$sql = "INSERT INTO plp_3 (Nama, Umur, kelas) VALUES ('".$nama."', '".$umur."', '".$kelas."')";

	if (mysqli_query($con, $sql)) {
		$result['success'] = "1";
		$result['message'] = "success";

		echo json_encode($result);
		mysqli_close($con);

	}else 
		$result['error'] = "0";
		$result['message'] = 'error';

		echo json_encode($result);

	}

?>