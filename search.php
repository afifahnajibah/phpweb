<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator"){
?>
<html>
<body>
<b>Enter Student Number </b>
<form name="form" method="post" action="search0.php">
Student Number: <input type="text" name="snumber">
<input type="submit" name="Submit" value="Search">
</form> 
</body>
</html>
<?php
}
else{
header("Location: login.php");
}
?>
