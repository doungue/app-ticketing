<?php

require('../actions/database.php');

//Vérifier si l'id de la question est rentrée dans l'URL 
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //Récupérer l'identifiant de la question
    $idOfTheQuestion = $_GET['id'];

    //Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM demande WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        //Récupérer toutes les datas de la questions
        $questionsInfos = $checkIfQuestionExists->fetch();

        //Stocker les datas de la question dans des variables propres.
        $question_id = $questionsInfos['id'];
        $question_title = $questionsInfos['demande'];
        $question_publication_date = $questionsInfos['date'];
        
    }else{
        $errorMsg = "Aucune question n'a été trouvée";
    }

}else{
    $errorMsg = "Aucune question n'a été trouvée";
}