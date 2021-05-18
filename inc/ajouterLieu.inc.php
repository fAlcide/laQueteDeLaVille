
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once('../config/db.php');
require_once('../lib/pdo_db.php');
require_once('../models/Lieu.php');

$lieu = new Lieu();

$nom = $_POST["nom"];
$description = $_POST["description"];
$type = $_POST["type"];
$longitude = $_POST["longitude"];
$latitude = $_POST["latitude"];

$data = array("nom"=>$nom, "description"=>$description, "type"=>$type, "lon"=>$longitude, "lat"=>$latitude, "horraire"=>"3");
// $data = array("nom"=>"alcide", "description"=>"des", "type"=>"1", "lon"=>"2", "lat"=>"2", "horraire"=>"3");
$lieu->addLieu($data);

// $heure1 = $_POST['heure1'];
// $heure2 = $_POST['heure2'];
// $heure3 = $_POST['heure3'];
// $heure4 = $_POST['heure4'];
// $heure5 = $_POST['heure5'];
// $heure6 = $_POST['heure6'];
// $heure7 = $_POST['heure7'];
// $heure8 = $_POST['heure8'];
// $heure9 = $_POST['heure9'];
// $heure10 = $_POST['heure10'];
// $heure11 = $_POST['heure11'];
// $heure12 = $_POST['heure12'];
// $heure13 = $_POST['heure13'];
// $heure14 = $_POST['heure14'];
// $heure15 = $_POST['heure15'];
// $heure16 = $_POST['heure16'];
// $heure17 = $_POST['heure17'];
// $heure18 = $_POST['heure18'];
// $heure19 = $_POST['heure19'];
// $heure20 = $_POST['heure20'];
// $heure21 = $_POST['heure21'];
// $heure22 = $_POST['heure22'];
// $heure23 = $_POST['heure23'];
// $heure24 = $_POST['heure24'];
// $heure25 = $_POST['heure25'];
// $heure26 = $_POST['heure26'];
// $heure27 = $_POST['heure27'];
// $heure28 = $_POST['heure28'];

?>