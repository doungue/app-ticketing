<?php
include '../../actions/database.php';

require('../../actions/users/securityAction.php'); 
//Récupérer les questions par défaut sans recherche
$getAllQuestions = $bdd->prepare('SELECT id, id_auteur, demande, priorite, sujet, description, message, pseudo_auteur,  piece_jointe, assigner, statut, date FROM tickets WHERE id_auteur = ? ORDER BY id DESC');
$getAllQuestions->execute(array($_SESSION['id']));
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
    <li>
    <div>
    <button type ='button' class='dropdown-item  btn btn-danger btn-sm'><a href='../actions/questions/deleteTicketClientAction.php?id=$id'>Delete</a></button>
    </div>
    </li>
    <li>
    <div>
    <button type ='button' class='dropdown-item btn btn-success btn-sm' ><a href='chat.php?id= $id'>Visualiser</a></button>
    </div>
    </li>
    </ul>
    </td>
    </tr>";
}
echo $datos;


?>


