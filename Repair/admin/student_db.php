<?php 
		echo '<meta charset="utf-8">';
		include('condb.php');
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// exit();

	$username = mysqli_real_escape_string($con,$_POST["username"]);
	$password = mysqli_real_escape_string($con,$_POST["password"]);
	$u_name = mysqli_real_escape_string($con,$_POST["u_name"]);
	$u_lastname = mysqli_real_escape_string($con,$_POST["u_lastname"]);
	$building = mysqli_real_escape_string($con,$_POST["building"]);
	$floor = mysqli_real_escape_string($con,$_POST["floor"]);
	$room = mysqli_real_escape_string($con,$_POST["room"]);
	$u_tel = mysqli_real_escape_string($con,$_POST["u_tel"]);
	$u_email = mysqli_real_escape_string($con,$_POST["u_email"]);
	$user_level = mysqli_real_escape_string($con,$_POST["user_level"]);

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

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);

	if($result){
	echo '<script>';
    echo "window.location='student.php?do=success';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='student.php?do=f';";
    echo '</script>';
}
?>