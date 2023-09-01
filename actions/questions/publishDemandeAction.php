<?php
 include '../../actions/users/securityAction.php'; 
 include '../../actions/database.php';

$demande = $_POST['demande'];



$query_tickets = $bdd->prepare(" INSERT INTO demande ( demande) VALUES ( :demande)");


$query_tickets->bindParam(':demande', $demande, PDO::PARAM_STR);


$query_tickets->execute();

if($query_tickets->rowCount()){
    $return = ['erro'=> false,  'msg' =>"<div class='alert alert-success' role='alert'>erro: reussi</div>"];

}else{
    $return = ['erro'=> true, 'msg' =>"<div class='alert alert-danger' role='alert'>erro: erreur</div>" ];
}



echo json_encode($return);

?>
