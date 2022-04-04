<?php
/* include db connection file */
include("dbconn.php");
/* update process */
if(isset($_POST['Update'])){
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$sql= "UPDATE student SET sNAME= '$name', sPASS= '$password' WHERE sID= $id";
$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysql_error());
echo "Update success";
} //continue next slide

/* delete process */
if(isset($_POST['Delete'])){
$id = $_POST['id'];
$sql= "DELETE FROM student WHERE studentid= $id";
$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error($dbconn));
echo "Delete success";
}
/* close connection */
mysqli_close($dbconn);
?>