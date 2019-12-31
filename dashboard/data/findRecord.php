<?php 
include('../config/db_config.php');

$id = $_GET['id'];

$findSql = "SELECT * FROM `candidates` WHERE `id`='".$id."'";

$exec = mysqli_query($connection,$findSql);

$data = mysqli_fetch_assoc($exec);

 ?>