<?php

require('../actions/database.php');

$statut = 1;

$getcountTickets = $bdd->prepare('SELECT COUNT(+) as new_ticket FROM tickets WHERE statut = $statut ');

if($getcountTickets->$rows > 0){
          while ($rows = $getcountTickets->fetch_assoc()) {
            $new_count = $rows['new_ticket'];
          }
}