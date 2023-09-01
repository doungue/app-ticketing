<?php

require('../actions/database.php');

//Vérifier si l'id de la question est rentrée dans l'URL 
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //Récupérer l'identifiant de la question
    $idOfTheQuestion = $_GET['id'];

    //Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM tickets WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        //Récupérer toutes les datas de la questions
        $questionsInfos = $checkIfQuestionExists->fetch();

        //Stocker les datas de la question dans des variables propres.
        $question_id = $questionsInfos['id'];
        $question_demande = $questionsInfos['demande'];
        $question_priorite = $questionsInfos['priorite'];
        $question_sujet = $questionsInfos['sujet'];
        $question_message = $questionsInfos['message'];
        $question_description = $questionsInfos['description'];
        $question_id_author = $questionsInfos['id_auteur'];
        $question_pseudo_author = $questionsInfos['pseudo_auteur'];
        $question_assigner = $questionsInfos['assigner'];
        $question_publication_date = $questionsInfos['date'];
        $question_statut = $questionsInfos['statut'];
        $question_piece = $questionsInfos['piece_jointe'];
        
    }else{
        $errorMsg = "Aucune question n'a été trouvée";
    }

}else{
    
    $errorMsg = "Aucune question cccccccccccccccn'a été trouvée";
}