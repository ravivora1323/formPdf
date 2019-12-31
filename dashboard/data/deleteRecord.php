<?php 
include('../../config/db_config.php');
if(isset($_GET['id']))
{
	$deleteSql = "DELETE FROM `candidates` WHERE `id`='".$_GET['id']."'";
	$run = mysqli_query($connection,$deleteSql);
	// header('location:../policy.php');
	echo "Data has been Deleted !";
}





 ?>