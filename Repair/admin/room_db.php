<?php 
		echo '<meta charset="utf-8">';
		include('condb.php');
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// exit();

	$room = mysqli_real_escape_string($con,$_POST["room"]);
	$floor = mysqli_real_escape_string($con,$_POST["floor"]);
	$building = mysqli_real_escape_string($con,$_POST["building"]);
	
  
	$sql = "INSERT INTO tbl_room (room,
									floor,
									building
									)
							VALUES
									('$room',
									'$floor',
									'$building'
									)";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);

	if($result){
	echo '<script>';
    echo "window.location='room.php?do=success';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='room.php?do=f';";
    echo '</script>';
}
?>