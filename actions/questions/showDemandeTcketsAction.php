<?php

include '../actions/database.php';

$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id, demande FROM demande');
$getAllAnswersOfThisQuestion->execute(); 