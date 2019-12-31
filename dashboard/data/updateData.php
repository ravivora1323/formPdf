<?php 
include('../../config/db_config.php');

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$older_name = $_POST['older_name'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$birth_date = $_POST['birth_date'];
	$birth_place = $_POST['birth_place'];
	$age = $_POST['age'];
	$qualification = $_POST['qualification'];
	$occupation = $_POST['occupation'];
	$profession = $_POST['profession'];
	$income = $_POST['income'];
	$land_lord = $_POST['land_lord'];
	$birth_lord = $_POST['birth_lord'];
	$nate_varas = $_POST['nate_varas'];


	$storeDataSql = "UPDATE `candidates` SET `name`='".$name."',`olders_name`='".$older_name."',`address`='".$address."',`mobile_no`='".$mobile."',`email`='".$email."',`birth_date`='".$birth_date."',`birth_place`='".$birth_place."',`age`='".$age."',`qualification`='".$qualification."',`occupation`='".$occupation."',`profession`='".$profession."',`income`='".$income."',`land_lord`='".$land_lord."',`birth_lord`='".$birth_lord."',`nate_varas`='".$nate_varas."' WHERE `id`='".$id."'";
	$exec = mysqli_query($connection,$storeDataSql);
	header('location:../index.php');
}








 ?>