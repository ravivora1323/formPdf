<?php 
include('../../config/db_config.php');
if (isset($_POST['submit'])) {
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


	$storeDataSql = "INSERT INTO `candidates`(`name`, `olders_name`, `address`, `mobile_no`, `email`, `birth_date`, `birth_place`, `age`, `qualification`, `occupation`, `profession`, `income`, `land_lord`, `birth_lord`, `nate_varas`) VALUES ('".$name."','".$older_name."','".$address."','".$mobile."','".$email."','".$birth_date."','".$birth_place."','".$age."','".$qualification."','".$occupation."','".$profession."','".$income."','".$land_lord."','".$birth_lord."','".$nate_varas."')";
	$exec = mysqli_query($connection,$storeDataSql);
	header('location:../addData.php');
}





 ?>