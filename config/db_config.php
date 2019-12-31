<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ravi_marathi';
$connection = mysqli_connect($hostname,$username,$password,$database);

if($connection == true):
	echo "";
else:
	echo "Database connection lose!";
	exit();
endif;




 ?>