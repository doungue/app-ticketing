<?php
include '../actions/database.php';
 
//Récupérer les questions par défaut sans recherche
$getAllQuestions = $bdd->prepare('SELECT id, id_auteur, demande, priorite, sujet, description, message, pseudo_auteur,  piece_jointe, assigner, statut, date FROM tickets WHERE id_auteur = ? ORDER BY id DESC');
$getAllQuestions->execute(array($_SESSION['id']));



?>


