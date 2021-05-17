<?php 
require_once('../config/db.php');
require_once('../lib/pdo_db.php');
require_once('../models/Lieu.php');
$lieu = new Lieu();
$lieux = $lieu->getLieux();
echo json_encode($lieux);