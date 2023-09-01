
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-success bg-light">
        <h5 class="modal-title" id="staticBackdropLabel"><strong>Crée une demande</strong></h5>
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
            <label for="recipient-name" class="col-sm-5 col-form-label">Demande:</label>
            <input type="text" class="form-control" id="recipient-name" name = "demande">
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