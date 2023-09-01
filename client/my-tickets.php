<?php 
    require('../actions/questions/myQuestionsAction.php'); 
?>
    <div class="container">

        <?php 

            while($question = $getAllMyQuestions->fetch()){
                ?>
                <div class="card">
                    <div class="card-header bg-primary">
                           <h5 class='text-light'> [#<?= $question['id']; ?>] Céer le <?= $question['date']; ?> </h5> 
                    </div>
                    <div class="card-body">
                    <p class="card-text">
                    <h6>Demande : <?= $question['demande']; ?></h6>   
                            </p>
                    <p class="card-text">
                             <h6> Priorité : <?= $question['priorite']; ?></h6>
                            </p>
                           <p class="card-text">
                            <h6>Sujet :  <?= $question['sujet']; ?> </h6>                           
                            </p>
                            <?php   
                             if($question['statut'] == 'close'){?>
                              <p class="card-text">
                               <h6 class="text-danger">Statut : Ticket <?= $question['statut']; ?> </h6> 
                             </p>
                                    <?php }elseif($question['statut'] == 'En cours'){?>
                                        <p class="card-text">
                                           <h6 class="text-info">Statut : Ticket <?= $question['statut']; ?> </h6> 
                                        </p>
                                        <?php    }else{?>
                                            <p class="card-text">
                                           <h6 class="text-success">Statut : Ticket <?= $question['statut']; ?> </h6> 
                                            </p>
                                            <?php   }?>
                     
                       <div class=' d-flex modal-footer'>
                        <a href="chat.php?id=<?= $question['id']; ?>" class="btn btn-primary"><i class="bx bxs-message-detail"></i></a>
                        <a href="../actions/questions/deleteTicketClientAction.php?id=<?= $question['id']; ?>" class="btn btn-danger ms-1"><i class="bx bx-trash"></i></a>
                       </div>
                    </div>
                </div>
                <?php
            }

        ?>

    </div>
