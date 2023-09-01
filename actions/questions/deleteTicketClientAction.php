<?php

//Vérifier si l'utilisateur est authentifié au niveau du site
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: ../../login.php');
}

require('../database.php');

//Vérifier si l'id est rentré en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //L'id du ticket en paramète
    $idOfTheQuestion = $_GET['id'];

    //Vérifier si le ticket existe
    $checkIfQuestionExists = $bdd->prepare('SELECT id_auteur FROM tickets WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        //Récupérer les infos du ticket
        $questionsInfos = $checkIfQuestionExists->fetch();
        if($questionsInfos['id_auteur'] == $_SESSION['id']){
           
            //Supprimer le ticket en fonction de son id rentré en paramètre
            $deleteThisQuestion = $bdd->prepare('DELETE FROM tickets WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            //Rediriger l'utilisateur vers ses tickets
            header('Location: ../../client/client.php');

        }else{
            echo "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas !";
        }

    }else{
        echo "Aucun ticket n'a été trouvée";
    }


}else{
    echo "Aucun ticket n'a été trouvée";
}