<?php 

include('../config/db_config.php');


$candidatesSql = "SELECT * FROM `candidates`";

$exec = mysqli_query($connection,$candidatesSql);


 ?>