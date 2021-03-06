<?php require_once("inc/header.inc.php"); ?>

<style>

html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.top {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.bottom {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.middle {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  margin-bottom: -1px;
}

</style>

<form class="form-signin text-center" method="POST" action="inc/inscription.inc.php">
      <img class="mb-1" src="img/cityQuest.svg" alt=""  height="72">
      <h1 class="h3 mb-3 display-6 text-secondary">Inscription</h1>
      <hr>
      
      <label for="inputEmail" class="sr-only " >Adresse email</label>
      <input type="email" id="inputEmail" name="email" class="form-control top" placeholder="Adresse email" required>
      <label for="inputPassword" class="sr-only middle">Mot de passe</label>
      <input type="password" id="inputPassword" name="pwd" class="form-control middle" placeholder="Mot de passe" required >
      <label for="inputPassword" class="sr-only middle">Confirmer le mot de passe</label>
      <input type="password" id="inputPassword" name="repeat" class="form-control middle" placeholder="Confirmer le mot de passe" required >
      <label for="inputEmail" class="sr-only ">Nom</label>
      <input type="text" id="inputEmail " name="nom" class="form-control middle" placeholder="Nom" required>
      <label for="inputPassword" class="sr-only">Pr??nom</label>
      <input type="text" id="inputPassword" name="prenom" class="form-control bottom" placeholder="Pr??nom" required >
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
      </div>
      <button class="btn btn-lg btn-danger btn-block rounded-pill w-100" name="submit" type="submit">S'inscrire</button>
      <p class="my-5 text-center text-secondary"><small>?? City<b class="text-danger">Quest</b> 2020 - Tous Droits R??serv??s</small>
    </form>

    <?php

  if(isset($_GET['error'])){
    if($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all fields!</p>";
    }
    if($_GET["error"] == "none"){
      echo "<p>Tout va bien</p>";
    }
    else if($_GET["error"] == "invalidemail"){
      echo "<p>Choose a proper email!</p>";
    }
    else if($_GET["error"] == "pwddontmatch"){
      echo "<p>Password dosen't match</p>";
    }
    else if($_GET["error"] == "stmtfield"){
      echo "<p>Somethog went wrong, try egain.</p>";
    }
    else if($_GET["error"] == "username"){
      echo "<p>Choose a proper username!</p>";
    }
    else if($_GET["error"] == "emailtoken"){
      echo "<p>An account is already linked to this email!</p>";
    }
  }

?>