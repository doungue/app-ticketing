
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-success bg-light">
        <h5 class="modal-title" id="staticBackdropLabel"><strong>Crée un user</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" id="myForm">
      <?php 
            if(isset($errorMsg)){ 
                echo  "<div class='alert alert-success' role='alert'>"
                .$errorMsg."</div>";
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>
          <div class="mb-3 d-flex">
            <label for="recipient-name" class="col-sm-5 col-form-label">Pseudo:</label>
            <input type="text" class="form-control" name = "pseudo" Required>
          </div>
          <div class="mb-3 d-flex">
            <label for="recipient-name" class="col-sm-5 col-form-label">Nom:</label>
            <input type="text" class="form-control" name = "firstname" Required>
          </div>
          <div class="mb-3 d-flex">
            <label for="recipient-name" class="col-sm-5 col-form-label">Prenom:</label>
            <input type="text" class="form-control" name = "lastname" Required>
          </div>
          <div class="mb-3 d-flex">
          <label for="priorite" class="col-sm-5 col-form-label">Rôle:</label>
        <select class="form-select" aria-label="Default select example" required id="type" name="type">
              <option selected>admin</option>
              <option value="admin">admin</option>
              <option value="agent">agent</option>
              <option value="client">client</option>
            </select>
          </div>
          <div class="mb-3 d-flex">
            <label for="recipient-name" class="col-sm-5 col-form-label"">Domaine:</label>
            <input type="text" class="form-control" name = "domaine" Required>
          </div>
          <div class="mb-3 d-flex">
            <label for="recipient-name" class="col-sm-5 col-form-label"">Password:</label>
            <input type="password" class="form-control" name = "password" Required>
          </div>
          
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="validate">Créer</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>