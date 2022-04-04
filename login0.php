<?php
session_start();
/* include db connection file */
include("dbconn.php");
if(isset($_POST['Submit'])){
	/* capture values from HTML form */
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username == "admin" && $password == "admin"){
		$_SESSION['username'] = "Administrator";
		header("Location: menuAdmin.php");
	}
else{
	/* execute SQL command */
		$sql= "SELECT * FROM student WHERE sNAME= '$username' AND sPASS= '$password'";
		$query = mysqli_query($dbconn, $sql) or die("Error: " . 			mysqli_error($dbconn));
		$row = mysqli_num_rows($query);
		if($row == 0){
		echo "Invalid Username/Password. Click here to <a 				href='login.php'>login</a>.";
		}
else{
		$r = mysqli_fetch_assoc($query);
		$_SESSION['username'] = $r['sNAME'];
		header("Location: menu.php");
	}
	}
}
