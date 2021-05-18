<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Ajouter un centre d'intéret</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un centre d'intéret </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-lieu">
          <div class="mb-3">
            <label for="nom" class="col-form-label">Nom du lieu:</label>
            <input type="text" name="nom" class="form-control" id="nom">
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
                          <p><input type='time' class='form-control' name='heure". $i ."' id='heure". $i ."' placeholder='hh:mm'></p>
                        </div>
                        <div class='col-1 d-flex justify-content-center'>
                          <p>à</p>
                        </div>
                        <div class='col-5'>
                          <p><input type='text' class='form-control' name='heure". $i1 ."' id='heure". $i1 ."' placeholder='hh:mm'></p>
                        </div>
                      </div>
                    </div>
                    <div class='col-6'>
                      <div class='row align-items-center'>
                        <div class='col-1 d-flex justify-content-center'>
                          <p>De</p>
                        </div>
                        <div class='col-5'>
                          <p><input type='text' class='form-control' name='heure". $i2 ."' id='heure". $i2 ."' placeholder='hh:mm'></p>
                        </div>
                        <div class='col-1 d-flex justify-content-center'>
                          <p>à</p>
                        </div>
                        <div class='col-5'>
                          <p><input type='text' class='form-control' name='heure". $i3 ."' id='heure". $i3 ."' placeholder='hh:mm'></p>
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
            <input type="number" step="0.001" name="latitude" class="form-control" id="lat">
          </div>
          <div class="mb-3">
            <label for="lng" class="col-form-label">Longitude</label>
            <input type="number" name="longitude" step="0.001" class="form-control" id="lng">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="envoyerFormulaireAjoutLieu()">Valider formulaire</button>
      </div>
    </div>
  </div>
</div>