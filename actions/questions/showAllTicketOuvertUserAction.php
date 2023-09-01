<?php

require('../actions/database.php');

//Récupérer les questions par défaut sans recherche
$getAllQuestions = $bdd->prepare('SELECT id, demande, priorite, sujet, description, message, piece_jointe, date, assigner, statut  FROM tickets WHERE assigner = ? AND statut = "En cours" ORDER BY id DESC');
$getAllQuestions->execute(array($_SESSION['pseudo']));
//Vérifier si une recherche a été rentrée par l'utlisateur
