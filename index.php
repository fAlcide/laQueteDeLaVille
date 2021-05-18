<?php require_once("inc/header.inc.php"); ?>

<div class="container">
    <div class="row align-items-center border-bottom">
        <div class="col-lg-6 text-lg-start text-center col-12 my-5">
            <h1 class="display-3">CityQuest, la solution pour comprendre la ville</h1>
            <p class="lead text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="row mt-5 justify-content-center justify-content-lg-start">
                    <button class="btn btn-danger btn-lg rounded-pill col-6">Commencer gratuitement</button>
            </div>
        </div>
        <div class="col-lg-6  d-lg-block d-none">
            <img src="img/gummy-city.svg" class="img-fluid" alt="">
        </div>
    </div>
    <div class="row border-bottom">
        <div class="col-md-4  col-12">
            <div class="card text-center my-5 border-0">
                <div class="col d-flex justify-content-center">
                <img src="img/no-racism.svg" class="w-50 p-4" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Service efficace</h5>
                    <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
<<<<<<< HEAD
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
      
=======
        <div class="col-md-4  col-12">
            <div class="card text-center my-5 border-0">
                <div class="col d-flex justify-content-center">
                <img src="img/protection.svg" class="w-50 p-4" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Service efficace</h5>
                    <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4  col-12">
            <div class="card text-center my-5 border-0">
                <div class="col d-flex justify-content-center">
                <img src="img/reliability.svg" class="w-50 p-4" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Service efficace</h5>
                    <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center my-5 border-bottom">
        <h1 class="display-6">CityQuest, la solution pour comprendre la ville</h1>
        <p class="lead mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem excepturi fuga nisi officia voluptates adipisci, doloribus, quis ducimus ipsum consequatur ab minus quidem sapiente numquam, porro aliquam. Eum, reprehenderit itaque.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem excepturi fuga nisi officia voluptates adipisci, doloribus, quis ducimus ipsum consequatur ab minus quidem sapiente numquam, porro aliquam. Eum, reprehenderit itaque.</p>
    </div>
    <div class="row my-5 border-bottom">
        <div class="col-6">
            <h1 class="">CityQuest, la solution pour comprendre la ville</h1>
            <p class=" mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem excepturi fuga nisi officia voluptates adipisci, doloribus, quis ducimus ipsum consequatur ab minus quidem sapiente numquam, porro aliquam. Eum, reprehenderit itaque.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem excepturi fuga nisi officia voluptates adipisci, doloribus, quis ducimus ipsum consequatur ab minus quidem sapiente numquam, porro aliquam. Eum, reprehenderit itaque.</p>
        </div>
        <div class="col-6">
            <h1 class="">CityQuest, la solution pour comprendre la ville</h1>
            <p class=" mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem excepturi fuga nisi officia voluptates adipisci, doloribus, quis ducimus ipsum consequatur ab minus quidem sapiente numquam, porro aliquam. Eum, reprehenderit itaque.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem excepturi fuga nisi officia voluptates adipisci, doloribus, quis ducimus ipsum consequatur ab minus quidem sapiente numquam, porro aliquam. Eum, reprehenderit itaque.</p>
        </div>
>>>>>>> 021ad08f46fcbbe22ca4d7d533e6186ce1a21e57
    </div>
</div>

<<<<<<< HEAD
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

=======
<?php require_once("inc/footer.inc.php"); ?>
>>>>>>> 021ad08f46fcbbe22ca4d7d533e6186ce1a21e57
