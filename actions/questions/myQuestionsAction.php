<?php

require('../actions/database.php');

$getAllMyQuestions = $bdd->prepare('SELECT id, demande, priorite, sujet, description, message, piece_jointe, date, statut FROM tickets WHERE id_auteur = ? ORDER BY id DESC');
$getAllMyQuestions->execute(array($_SESSION['id']));