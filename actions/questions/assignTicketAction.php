<?php

require('../actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs sont remplis
    if(!empty($_POST['assigner'])){

        //Les données à faire passer dans la requête
        $new_question_assigner = htmlspecialchars($_POST['assigner']);
      
        
        //Modifier les informations du ticket qui possède l'id rentré en paramètre dans l'URL
        $editQuestionOnWebsite = $bdd->prepare('UPDATE tickets SET assigner = ? WHERE id = ?');
        $editQuestionOnWebsite->execute(array($new_question_assigner, $idOfQuestion));

        //Redirection vers la page d'affichage des tickets de l'utilisateur
        header('Location: Listingticket.php');

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}