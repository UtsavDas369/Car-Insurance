<?php
session_start();
$error=''; //Variable to Store error message;
if(isset($_REQUEST['submit'])){
 if(empty($_REQUEST['user']) || empty($_REQUEST['pass'] || empty($_REQUEST))){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_REQUEST['user'];
 $pass=$_REQUEST['pass'];
 $cont=$_REQUEST['Contact_Number'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "carinsurance");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM login WHERE pass='$pass' AND user='$user' AND Contact_Number='$cont'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 	$_SESSION["user"]=$user;
$_SESSION["Contact_Number"]=$cont;
 header("Location: welcome.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>