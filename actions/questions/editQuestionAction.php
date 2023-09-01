<?php

require('../actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs sont remplis
    if(!empty($_POST['demande']) AND !empty($_POST['priorite']) AND !empty($_POST['sujet']) AND !empty($_POST['description']) AND !empty($_POST['message']) AND !empty($_POST['piece_jointe']) ){

        //Les données à faire passer dans la requête
        $new_question_demande = htmlspecialchars($_POST['demande']);
        $new_question_priorite = htmlspecialchars($_POST['priorite']);
        $new_question_sujet = htmlspecialchars($_POST['sujet']);
        $new_question_description = nl2br(htmlspecialchars($_POST['description']));
        $new_question_message = nl2br(htmlspecialchars($_POST['message']));
        $new_question_piece_jointe = nl2br(htmlspecialchars($_POST['piece_jointe']));
        
        //Modifier les informations du ticket qui possède l'id rentré en paramètre dans l'URL
        $editQuestionOnWebsite = $bdd->prepare('UPDATE tickets SET demande = ?, priorite = ?, sujet = ?, description = ?, message = ?, piece_jointe = ? WHERE id = ?');
        $editQuestionOnWebsite->execute(array($new_question_demande, $new_question_priorite,  $new_question_sujet, $new_question_description, $new_question_message, $new_question_piece_jointe, $idOfQuestion));

        //Redirection vers la page d'affichage des tickets de l'utilisateur
        header('Location: my-tickets.php');

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}