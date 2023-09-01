<form id="myForm" class="container" >

<div class="mb-3 d-flex">
        <label for="type_demande" class="col-sm-5 col-form-label">Demande:</label>
        <select class="form-select" aria-label="Default select example" id="demande" name="demande" required>
              <option selected>-------------------------Type de demande-----------------------</option>
              <?php 
                while($demande = $getAllAnswersOfThisQuestion->fetch()){
                    ?>
                                
              <option value="<?= $demande['demande']; ?>"><?= $demande['demande']; ?></option>
              <?php 
              }
              ?>
            </select> 
         </div>
    <div class="mb-3 d-flex">
        <label for="priorite" class="col-sm-5 col-form-label">Priorite:</label>
        <select class="form-select" aria-label="Default select example" required id="priorite" name="priorite">
              <option selected>------------------------------------priorité------------------------------</option>
              <option value="Base">Base</option>
              <option value="Moyenne">Moyenne</option>
              <option value="Elevée">Elevée</option>
              <option value="Critique">Critique</option>
            </select>

    </div>
    <div class="mb-3 d-flex">
        <label for="sujet" class="col-sm-5 col-form-label">Sujet:</label>
        <input type="text"  class=" form-control" id="sujet" name="sujet">
    </div>
    <div class="mb-3 d-flex">
        <label for="description" class="col-sm-5 col-form-label">Description:</label>
        <textarea type="text"  class=" form-control" id="description" name="description"></textarea>
    </div>
    <div class="mb-3 d-flex">
        <label for="message" class="col-sm-5 col-form-label">Message:</label>
        <textarea type="text"  class=" form-control " id="message" name="message"></textarea>
    </div>
    <div class="mb-3 d-flex">
        <label for="piece_jointe" class="col-sm-5 col-form-label">Piece_jointe:</label>
        <input type="file"   class=" form-control" id="piece_jointe" name="piece_jointe">
    </div>
       
  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success"  >Créer</button>
      </div>
 </form>