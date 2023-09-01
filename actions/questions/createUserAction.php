<?php
 include '../../actions/users/securityAction.php'; 
 include '../../actions/database.php';

$pseudo = $_POST['pseudo'];
$nom = $_POST['firstname'];
$prenom = $_POST['lastname'];
$domaine = $_POST['domaine'];
$mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['type'];



$query_tickets = $bdd->prepare(" INSERT INTO users(pseudo, nom, prenom, domaine, type, mdp)VALUES(:pseudo, :nom, :prenom, :domaine, :type, :mdp)");


$query_tickets->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
$query_tickets->bindParam(':nom', $nom, PDO::PARAM_STR);
$query_tickets->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$query_tickets->bindParam(':domaine', $domaine, PDO::PARAM_STR);
$query_tickets->bindParam(':type', $role, PDO::PARAM_STR);
$query_tickets->bindParam(':mdp', $mdp, PDO::PARAM_STR);
$query_tickets->execute();

if($query_tickets->rowCount()){
    $return = ['erro'=> false,  'msg' =>"<div class='alert alert-success' role='alert'>erro: reussi</div>"];

}else{
    $return = ['erro'=> true, 'msg' =>"<div class='alert alert-danger' role='alert'>erro: erreur</div>" ];
}



echo json_encode($return);

?>
