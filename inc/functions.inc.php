<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function emailExists($conn, $email){
    $sql = "SELECT * FROM User WHERE mail = '$email'";
    $conn->query($sql);
    
    $result = $conn->resultArray();
    if(sizeof($result) == 0){
        return false;
    }
    return true;

}

function createUser($conn, $email, $pwd, $nom, $prenom){
    $sql = 'INSERT INTO `User`(`mail`, `motDePasse`, `nom`, `prenom`) VALUES (:email, :pwd, :nom, :prenom)';
    $conn->query($sql);
    

    $pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);
    
    $conn->bind(':email', $email);
    $conn->bind(':nom', $nom);
    $conn->bind(':prenom', $prenom);
    $conn->bind(':pwd', $pwdHashed);

    echo "INSERT INTO `User`(`mail`, `motDePasse`, `nom`, `prenom`) VALUES ($email, $pwd, $nom, $prenom)";


    if($conn->execute()){
        
    }else{
        header("location: ../inscription.php?error=stmtfailed");
        exit();
    }
    
    header('location: ../inscription.php?error=none');
    exit();
}

function emptyInputSignup($email, $pwd, $repeat, $nom, $prenom){
    $result = true;
    if(empty($email) || empty($pwd) || empty($repeat) || empty($nom) || empty($prenom)){
        $result = true;
    }
    else{
        $result = false;
    }
   return $result;
}

function emptyInputLogin($mail, $pwd){
    $result = true;
    if(empty($mail) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
   return $result;
}

function pwdMAtch($pwd, $repeat){
    $result = true;
    if($pwd != $repeat){
        $result = true;
    }
    else{
        $result = false;
    }
   return $result;
}

function loginUser($conn, $email, $pwd){
    $uidExists = emailExists($conn, $email);

    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["motDePasse"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("locatoin: ../connexion.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists['id'];
        $_SESSION["mail"] = $uidExists['mail'];
        header("location: ../dashboard.php");
        exit();
    }
}

?>