<?php
/* include db connection file */
include("dbconn.php");

if(isset($_POST['submit'])){
	/* capture values from HTML form */
	$name = $_POST['name'];
	$number = $_POST['number'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql0 = "SELECT sNUM FROM student WHERE sNUM= $number";
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: " . 		     mysqli_error($dbconn));
	$row0 = mysqli_num_rows($query0);
	if($row0 != 0){
	echo "Record is existed";
	}

	else{
	/* execute SQL INSERT command */
	$sql2 = "INSERT INTO student (sNAME, sNUM, sUSER, sPASS)
	VALUES ('" . $name . "', '" . $number . "', '" . $username . "', '" . 	$password . "')";
	mysqli_query($dbconn, $sql2) or die ("Error: " . 	mysqli_error($dbconn));
	/* display a message */
	echo "Data has been saved";
	}
	}// close if isset()

    /* close db connection */
	mysqli_close($dbconn);
?>
