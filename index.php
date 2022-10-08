<?php 
session_start();

if (!isset($_SESSION['uid'])) {
	header("location:homepage.php");
}elseif ($_SESSION['role'] == "user") {
	header("location:homepage.php");
}elseif ($_SESSION['role'] == "admin") {
	header("location:admin/admin.php");
}else{
	header("location:homepage.php");
}
 ?>
