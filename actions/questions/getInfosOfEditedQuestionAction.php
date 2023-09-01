<?php

require('../actions/database.php');

//Vérifier si l'id du ticket est bien passé en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfQuestion = $_GET['id'];

    //Vérifier si le ticket existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM tickets WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        //Récupérer les données du ticket
        $questionInfos = $checkIfQuestionExists->fetch();
        if($questionInfos['id_auteur'] == $_SESSION['id']){
            
            $question_demande = $questionInfos['demande'];
            $question_priorite = $questionInfos['priorite'];
            $question_sujet = $questionInfos['sujet'];
            $question_description = $questionInfos['description'];
            $question_message = $questionInfos['message'];
            $question_piece_jointe = $questionInfos['piece_jointe'];

            $question_description = str_replace('<br />', '', $question_description);
            $question_message = str_replace('<br />', '', $question_message);

        }else{
            $errorMsg = "Vous n'êtes pas l'auteur de cette question";
        }

    }else{
        $errorMsg = "Aucune question n'a été trouvée";
    }

}else{
    $errorMsg = "Aucune question n'a été trouvée";
}