<?php

require('../actions/database.php');

//Récupérer les questions par défaut sans recherche
$getAllQuestions = $bdd->query('SELECT id, id_auteur, demande, priorite, sujet, description, message, pseudo_auteur, assigner, statut, date FROM tickets WHERE statut = "Terminé"  ORDER BY id DESC ');

//Vérifier si une recherche a été rentrée par l'utlisateur
