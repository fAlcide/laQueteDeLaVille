<?php

$servername = "db5002513231.hosting-data.io";
$username = "dbu113413";
$password = "Alcidealcide08";

try {
  $conn = new PDO("mysql:host=$servername;dbname=dbs1998800", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connecté";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
