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

<form class="form-signin text-center">
      <img class="mb-1" src="img/cityQuest.svg" alt=""  height="72">
      <h1 class="h3 mb-3 display-6 text-secondary">Inscription</h1>
      <hr>
      
      <label for="inputEmail" class="sr-only " >Adresse email</label>
      <input type="email" id="inputEmail" class="form-control top" placeholder="Adresse email" required>
      <label for="inputPassword" class="sr-only middle">Mot de passe</label>
      <input type="password" id="inputPassword" class="form-control middle" placeholder="Mot de passe" required >
      <label for="inputPassword" class="sr-only middle">Confirmer le mot de passe</label>
      <input type="password" id="inputPassword" class="form-control middle" placeholder="Confirmer le mot de passe" required >
      <label for="inputEmail" class="sr-only ">Nom</label>
      <input type="text" id="inputEmail " class="form-control middle" placeholder="Nom" required>
      <label for="inputPassword" class="sr-only">Prénom</label>
      <input type="text" id="inputPassword" class="form-control bottom" placeholder="Prénom" required >
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
      </div>
      <button class="btn btn-lg btn-danger btn-block rounded-pill w-100" type="submit">S'inscrire</button>
      <p class="my-5 text-center text-secondary"><small>© City<b class="text-danger">Quest</b> 2020 - Tous Droits Réservés</small>
    </form>