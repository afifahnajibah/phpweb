<?php
/* include db connection file*/
include("dbconn.php");
/* capture student number */
$number = $_POST['snumber'];
/* execute SQL statement */
$sql= "SELECT * FROM student 
WHERE sNUM= $number";
$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error());
$row = mysqli_num_rows($query);

if($row == 0){
echo "No record found";
}
else{
$r = mysqli_fetch_assoc($query);
$sID= $r['sID'];
$sNUM= $r['sNUM'];
$sNAME= $r['sNAME'];
$sPASS= $r['sPASS'];
?>

<html>
<body>
	<form name="form" method="post" action="process0.php">
	D:<input type="text" name="id" value="<?php echo $sID; ?>"><br>
	Student number:<input type="text" name="num" value="<?php echo $sNUM; ?>"><br>
	Name:<input type="text" name= "name" value="<?php echo $sNAME; ?>"><br>
	Password:<input type="password" name= "password" value="<?php echo $sPASS; ?>"><br>
	<input type="submit" name="Update" value="Update">
	<input type="submit" name="Delete" value="Delete">
	</form>

</body>
</html>
<?php
}
mysqli_close($dbconn);
?>
