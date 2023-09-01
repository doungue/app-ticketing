<?php
include '../../actions/database.php';

//Récupérer les questions par défaut sans recherche
$getAllQuestions = $bdd->query('SELECT id, id_auteur, demande, priorite, sujet, description, message, pseudo_auteur,  piece_jointe, assigner, statut, date FROM tickets ORDER BY id DESC');

//Vérifier si une recherche a été rentrée par l'utlisateur
$datos = "";
while($question = $getAllQuestions->fetch(PDO::FETCH_ASSOC)){
    extract($question);
    $datos .= "<tr>
    <td># $id</td>
    <td>$demande</td>
    <td>$sujet</td>
    <td>$message</td>
    <td>$priorite</td>
    <td>$date</td>
    <td>$assigner</td>
    <td>$statut</td>
   
    
   <td>  
    <div class='btn-group dropstart'>
  <button type='button' class='btn btn-light dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
  <img src='../assets/settings-sharp.svg' width='25px' alt=''>
  </button>
  <ul class='dropdown-menu'>
  
    <div>
    <button type ='button' class='dropdown-item  btn btn-danger btn-sm' ><a href='../actions/questions/deleteTicketClientAction.php?id=$id'>Delete</a></button>
    </div>
    </li>
    <li>
    <div>
    <button type ='button' class='dropdown-item btn btn-success btn-sm' ><a href='chat.php?id= $id'>Visualiser</a></button>
    </div>
    <div>
    <button type ='button' class='dropdown-item btn btn-success btn-sm' ><a href='assigner.php?id= $id'>Assigner</a></button>
    </div>
    </li>
    </ul>
    </td>
    </tr>";
}
echo $datos;


?>


