
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-success bg-light">
        <h5 class="modal-title" id="staticBackdropLabel"><strong>Assigner le ticket a un employé</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
      <?php 
            if(isset($errorMsg)){ 
                echo  "<div class='alert alert-success' role='alert'>"
                .$errorMsg."</div>";
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>
          <div class="mb-3">
          <label for="type_demande" class="col-sm-5 col-form-label">Assigner a:</label>
        <select class="form-select" aria-label="Default select example" id="assigner" name="assigner" required>
        <option selected>--------------------------------------------------------Type de demande----------------------------------------------------------</option>
    <?php 
                while($assign = $getAllAnswersOfThisQuestion->fetch()){
                    ?>
                                
              <option value="<?= $assign['pseudo']; ?>"><?= $assign['pseudo']; ?></option>
              <?php 
              }
              ?>
            </select> 
          </div>
          
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="validate">Assigner</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>