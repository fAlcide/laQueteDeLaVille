<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Lieu.php');

  // Instantiate Customer
  $lieu = new Lieu();

  // Get Customer
  $lieux = $lieu->getLieux();

  //print_r($lieux);
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="inc/jquery.min.js"></script>

    <title>CityQuest</title>

    <script>
    const points = [
      { lat: 50.276660426917786, lng:  3.9838389473130937},
      { lat: 50.27771091219929, lng: 3.973816296130853},
      { lat: 50.26887064904313, lng: 3.980021438332493},
      { lat: 50.276807514841735, lng: 3.977093806129458}
    ];
    
    </script>
    <script src=" js/app.js"></script>
    <script src="inc/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="img/map.png">
    <link rel="stylesheet" href="css/master.css">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-light border-bottom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <img src="img/map.png" alt="" width="30">
            </button>
            <div class="collapse navbar-collapse justify-content-center">
                <div class="navbar-nav">
                    <a class="nav-link px-4" href="#">Présentation</a>
                    <a class="nav-link px-4" href="#">Data Sheets</a>
                    <a class="nav-link px-4" href="#"><img src="img/map.png" alt="" width="30"></a>
                    <a class="nav-link px-4" href="#">Graphiques</a>
                    <a class="nav-link px-4" href="#">GitHub</a>
                    <a class="nav-link px-4" href="#"></a>
                </div>
            </div>
        </div>
    </nav>

    <div id="map"></div>

    <!-- Modal ajout point -->


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Ajouter un centre d'intéret</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un centre d'intéret </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-lieu" onsubmit="return false">
          <div class="mb-3">
            <label for="nom" class="col-form-label">Nom du lieu:</label>
            <input type="text" name="nom" class="form-control" id="nom" required onclick="validerNom(this)">
          </div>
          <div class="mb-3">
            <label for="description" class="col-form-label">Description du lieu:</label>
            <input type="text" name="description" class="form-control" id="description">
          </div>
          <div class="mb-3">
            <label for="description" class="col-form-label">Description du lieu:</label>
            <select name="type" id="type" class="form-select" aria-label="Default select example">
              <option value="1">Restaurant</option>
              <option value="2">bar</option>
              <option value="3">école</option>
            </select>
          </div>
          <?php 
          $Jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
          for($i = 1; $i <= 7; $i++){
            $i1 = $i + 1;
            $i2 = $i + 2;
            $i3 = $i + 3;
            echo "
                <div class='mb-3'>
                  <label for='description' class='col-form-label'>" . $Jours[$i-1] ."</label>
                  <div class='row'>
                    <div class='col-6'>
                      <div class='row align-items-center'>
                        <div class='col-1 d-flex justify-content-center'>
                          <p>De</p>
                        </div>
                        <div class='col-5'>
                          <p><input type='time' class='form-control' name='heure". $i ."' id='heure". $i ."' placeholder='hh:mm' onchange='validerHeureMatin(this)'></p>
                        </div>
                        <div class='col-1 d-flex justify-content-center'>
                          <p>à</p>
                        </div>
                        <div class='col-5'>
                          <p><input type='time' class='form-control' name='heure". $i1 ."' id='heure". $i1 ."' placeholder='hh:mm'></p>
                        </div>
                      </div>
                    </div>
                    <div class='col-6'>
                      <div class='row align-items-center'>
                        <div class='col-1 d-flex justify-content-center'>
                          <p>De</p>
                        </div>
                        <div class='col-5'>
                          <p><input type='time' class='form-control' name='heure". $i2 ."' id='heure". $i2 ."' placeholder='hh:mm'></p>
                        </div>
                        <div class='col-1 d-flex justify-content-center'>
                          <p>à</p>
                        </div>
                        <div class='col-5'>
                          <p><input type='time' class='form-control' name='heure". $i3 ."' id='heure". $i3 ."' placeholder='hh:mm'></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                ";
          }

        ?>
          <div class="mb-3">
            <label for="lat" class="col-form-label">Latitude</label>
            <input type="number" step="0.000000000000001" name="latitude" class="form-control" id="lat">
          </div>
          <div class="mb-3">
            <label for="lng" class="col-form-label">Longitude</label>
            <input type="number" name="longitude" step="0.000000000000001" class="form-control" id="lng">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="envoyerFormulaireAjoutLieu()">Valider formulaire</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

    <!-- Fin Modal ajout point -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3yGqmW1Zx7YOQxbtIPi8paSQKouzyhF8&callback=initMap&libraries=&v=weekly" async></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>

<script>

const formAjoutLieu = true;

function envoyerFormulaireAjoutLieu(){

  $data = $('#form-lieu').serialize()
  if (formAjoutLieu){
    $.ajax({
      type: "POST",
      url: "/laQueteDeLaVille/inc/ajouterLieu.inc.php",
      data: $data,
      dataType: 'html',
      // error: function(xhr, status, error){
      //      var errorMessage = xhr.status + ': ' + xhr.statusText
      //      alert('Error - ' + errorMessage);
      //  },
      success: function(data){
        console.log(data);
      }
    });
}
}

function validerNom(){
  if(this.val == ""){
    formAjoutLieu = false;
  }else{
    formAjoutLieu = true;
  }
}

function validerHeureMatin(element){
  var hour = '' + element.value[0] + element.value[1];
  var minute = '' + element.value[3] + element.value[4];
  console.log(hour + ' ' + minute);
}

</script>

