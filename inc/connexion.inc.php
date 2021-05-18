<?php

if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $inputPassword = $_POST["pwd"];



    require_once('../config/db.php');
    require_once('../lib/pdo_db.php');
    require_once('../inc/functions.inc.php');

    if (emptyInputLogin($email, $pwd) != false) {
        header('location: ../connexion.php?error=emptyinput');
        exit();
    }

    loginUser($conn, $email, $inputPassword);
} else {
    header('location: ../connexion.php');
    exit();
}
