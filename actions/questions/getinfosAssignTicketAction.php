<?php

require('../actions/database.php');

//Vérifier si l'id de la question est bien passé en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfQuestion = $_GET['id'];

    //Vérifier si le ticket existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM tickets WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        //Récupérer les données du ticket
        $questionInfos = $checkIfQuestionExists->fetch();
        if(($questionInfos['id_auteur'] == $_SESSION['id']) || ($questionInfos['id_auteur'] != $_SESSION['id'])  ){
            
            $question_assigner = $questionInfos['assigner'];
           

           
            $question_assigner = str_replace('<br />', '', $question_assigner);

        }else{
            $errorMsg = "Vous n'êtes pas l'auteur de cette question";
        }

    }else{
        $errorMsg = "Aucune question n'a été trouvée";
    }

}else{
    $errorMsg = "Aucune question n'a été trouvée";
}