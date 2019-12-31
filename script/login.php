<?php 

include('../config/db_config.php');

session_start();
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$loginSql = "SELECT id,username FROM `admin` WHERE `username`='".$username."' AND `password`='".$password."'";
	$exc = mysqli_query($connection,$loginSql);
	if(mysqli_num_rows($exc)) {
		$loginUser = mysqli_fetch_assoc($exc);
		$_SESSION['login'] = $loginUser;
		header('location:../dashboard/index.php');	
	} else {
		echo "Incorrect Information";
	}
}

 ?>