<?php 
require_once '../../vendor/autoload.php';
if (isset($_GET['id'])) {
	include '../../config/db_config/connection.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM `candidates` WHERE `id`='".$id."'";
	$exce = mysqli_query($connection,$sql);
}
$userData = mysqli_fetch_assoc($exce);
$mpdf = new \Mpdf\Mpdf();
$mpdf->charset_in='UTF-8';
$data = '';
$data .= '<p style="text-align:right;">Follo No. ______________</p><br>';
$data .= '<p>Full Name _____________________________________</p><br>';
$data .= '<p>Olders Name__________________________________________</p>';
$data .= '<p>Olders Name__________________________________________</p>';
$data .= '<p>Address__________________________________________</p>';
$data .= '<p>Mobile No__________________________________________</p>';
$data .= '<p>Email__________________________________________</p>';
$data .= '<p>Birth Date__________________________________________</p>';
$data .= '<p>Age__________________________________________</p>';
$data .= '<p>Qualification__________________________________________</p>';
$data .= '<p>Occupation__________________________________________</p>';
$data .= '<p>Profession__________________________________________</p>';
$data .= '<p>Income__________________________________________</p>';
$data .= '<p>Land Lord__________________________________________</p>';
$data .= '<p>Birth Lord__________________________________________</p>';
$data .= '<p>Family Child__________________________________________</p>';













$mpdf->WriteHTML($data);

$mpdf->Output('myfile.pdf','D');

 ?>