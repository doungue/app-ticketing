<?php

require('../actions/database.php');

$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id, pseudo FROM users');
$getAllAnswersOfThisQuestion->execute(); 