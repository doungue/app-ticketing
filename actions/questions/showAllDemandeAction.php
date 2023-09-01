<?php

include '../../actions/database.php';

//Récupérer les questions par défaut sans recherche
$getAllQuestions = $bdd->query('SELECT id, demande, date FROM demande ORDER BY id DESC');

//Vérifier si une recherche a été rentrée par l'utlisateur
$datos = "";
while($question = $getAllQuestions->fetch(PDO::FETCH_ASSOC)){
    extract($question);
    $datos .= "<tr>
    <td># $id</td>
    <td>$demande</td>
    <td>$date</td>
    
    <td>  

  
    <div class='btn-group dropstart'>
  <button type='button' class='btn btn-light dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
  <img src='../assets/settings-sharp.svg' width='25px' alt=''>
  </button>
  <ul class='dropdown-menu'>
  
    <div>
    <button type ='button' class='dropdown-item  btn btn-danger btn-sm'  ><a href='../actions/questions/deleteDemandeAction.php?id=$id'>Delete</a></button>
    </div>
    </li>
    </ul>
    </td>
    </tr>";
}
echo $datos;

?>


