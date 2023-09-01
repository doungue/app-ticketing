<?php

require('../actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs sont remplis
    if(!empty($_POST['statut'])){

        //Les données à faire passer dans la requête
        $new_question_statut = htmlspecialchars($_POST['statut']);
      
        
        //Modifier les informations du ticket qui possède l'id rentré en paramètre dans l'URL
        $editQuestionOnWebsite = $bdd->prepare('UPDATE tickets SET statut = ? WHERE id = ?');
        $editQuestionOnWebsite->execute(array($new_question_statut, $idOfQuestion));

        //Redirection vers la page d'affichage des tickets de l'utilisateur
        header('Location: ticket_assigner.php');

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}