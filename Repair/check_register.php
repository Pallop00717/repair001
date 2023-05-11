<?php
echo '<meta charset="utf-8">';
include('condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();

$username = mysqli_real_escape_string($con, $_POST["username"]);
$password = mysqli_real_escape_string($con, $_POST["password"]);
$u_name = mysqli_real_escape_string($con, $_POST["u_name"]);
$u_lastname = mysqli_real_escape_string($con, $_POST["u_lastname"]);
$building = mysqli_real_escape_string($con, $_POST["building"]);
$floor = mysqli_real_escape_string($con, $_POST["floor"]);
$room = mysqli_real_escape_string($con, $_POST["room"]);
$u_tel = mysqli_real_escape_string($con, $_POST["u_tel"]);
$u_email = mysqli_real_escape_string($con, $_POST["u_email"]);
$user_level = mysqli_real_escape_string($con, $_POST["user_level"]);

$query = "SELECT username FROM tbl_login WHERE username ='$username'";
$result = mysqli_query($con, $query) or die("Error in sql : $query" . mysqli_error());
// echo 'พบ' . mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0) {
	echo "<script type='text/javascript'>";
		echo "alert ('ชื่อผู้ใช้นี้มีคนใช้แล้ว');";
		echo "window.location = 'register.php';";
	echo "</script>";
}else {
	$sql = "INSERT INTO tbl_login (username,
									password,
									u_name,
									u_lastname,
									building,
									floor,
									room,
									u_tel,
									u_email,
									user_level
									)
							VALUES
									('$username',
									'$password',
									'$u_name',
									'$u_lastname',
									'$building',
									'$floor',
									'$room',
									'$u_tel',
									'$u_email',
									'$user_level')";


	$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if ($result) {
		echo "<script type='text/javascript'>";
		echo "alert ('สมัครสมาชิกสำเร็จ');";
		echo "window.location = 'index.php';";
	echo "</script>";
	} else {
		echo "<script type='text/javascript'>";
		echo "alert ('สมัครสมาชิกไม่สำเร็จ !!!');";
		echo "window.location = 'register.php';";
	echo "</script>";
	}
}
