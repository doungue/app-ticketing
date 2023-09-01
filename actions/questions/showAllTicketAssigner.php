<?php
include '../../actions/database.php';
require('../../actions/users/securityAction.php'); 
//Récupérer les questions par défaut sans recherche
$getAllQuestions = $bdd->prepare('SELECT id, demande, priorite, sujet, description, message, piece_jointe, date, assigner, statut  FROM tickets WHERE assigner = ? ORDER BY id DESC');
$getAllQuestions->execute(array($_SESSION['pseudo']));
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
    <button type ='button' id='$id' class='dropdown-item btn btn-success btn-sm' ><a href='validation.php?id= $id'>Validation</a></button>
    </div>
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


