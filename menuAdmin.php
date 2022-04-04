<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator"){
?>
<html>
<body>
Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>] <br>
<a href="search.php">Search</a>
</body>
</html>
<?php
} else {
header("Location: login.php");
}
?>
