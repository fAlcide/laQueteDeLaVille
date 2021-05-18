<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $repeat = $_POST['repeat'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    require_once('../config/db.php');
    require_once('../lib/pdo_db.php');
    require_once('../inc/functions.inc.php');

    $db = new Database;

    if (emptyInputSignup($email, $pwd, $repeat, $nom, $prenom) !== false) {
        header('location: ../inscription.php?error=emptyinput');
        exit();
    }

    if (pwdMAtch($pwd, $repeat) !== false) {
        header('location: ../inscription.php?error=pwddontmatch');
        exit();
    }

    if (emailExists($db, $email) !== false) {
        header('location: ../inscription.php?error=emailtoken');
        exit();
    }

    createUser($db, $email, $pwd, $nom, $prenom);



}else{
    header("location: ../inscription.php?error=none");
    exit();
}

?>