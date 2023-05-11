<?php 
include("condb.php");
session_start();
// print_r($_POST);
// echo"<pre>";
// exit();

     if(isset($_POST['username'])){
                  $username = mysqli_real_escape_string($con,$_POST['username']); 
                  $password = mysqli_real_escape_string($con,$_POST['password']); 

      $sql_login = " SELECT * FROM tbl_login 
      WHERE username = '".$username."' AND password = '".$password."'
      ";
      $result = mysqli_query($con, $sql_login );
      // echo $sql_login;
      // exit();
      if ( mysqli_num_rows($result)==1 ){
            $row = mysqli_fetch_array($result);
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["user_level"] = $row["user_level"];
            $_SESSION["u_name"] = $row["u_name"];
            $_SESSION["u_lastname"] = $row["u_lastname"];

            if ($row["user_level"]=="admin"){
                  Header("location: admin");
            }elseif($row["user_level"]=="student"){
                  Header("location: student");
            }elseif($row["user_level"]=="worker"){
                  Header("location: worker");
            }else{
                  
                  echo '<script>';
                  echo "window.location='index.php';";
                  echo '</script>';
                  
            }
      }
   }
?>
