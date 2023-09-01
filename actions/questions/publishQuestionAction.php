<?php
 include '../../actions/users/securityAction.php'; 
 include '../../actions/database.php';

$demande = $_POST['demande'];
$priorite = $_POST['priorite'];
$sujet = $_POST['sujet'];
$description = $_POST['description'];
$message = $_POST['message'];
$question_id_author = $_SESSION['id'];
$question_pseudo_author = $_SESSION['pseudo'];

if(isset($_FILES['piece_jointe']['name']) AND !empty($_FILES['piece_jointe']['name'])){
    print_r($_FILES['piece_jointe']);
    $img_name = $_FILES['piece_jointe']['name'];
    $img_size = $_FILES['piece_jointe']['size'];
    $tmp_name = $_FILES['piece_jointe']['tmp_name'];
    $error = $_FILES['piece_jointe']['error'];
    if($error===0){
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_to_lc = strtolower($img_ex);

      $allowed_exs = array('jpg', 'jpeg', 'png');

      if(in_array($img_ex_to_lc, $allowed_exs)){
        $new_img_name = uniqid($demande, true).'.'.$img_ex_to_lc;
        $img_upload_path = '../../upload/' .$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
             

$query_tickets = $bdd->prepare(" INSERT INTO tickets (id_auteur, pseudo_auteur, demande, priorite, sujet, description, message, piece_jointe) VALUES (:question_id_author, :question_pseudo_author, :demande, :priorite, :sujet, :description, :message, :piece_jointe)");

$query_tickets->bindParam(':question_id_author', $question_id_author, PDO::PARAM_STR);
$query_tickets->bindParam(':question_pseudo_author', $question_pseudo_author, PDO::PARAM_STR);
$query_tickets->bindParam(':demande', $demande, PDO::PARAM_STR);
$query_tickets->bindParam(':priorite', $priorite, PDO::PARAM_STR);
$query_tickets->bindParam(':sujet', $sujet, PDO::PARAM_STR);
$query_tickets->bindParam(':description', $description, PDO::PARAM_STR);
$query_tickets->bindParam(':message', $message, PDO::PARAM_STR);
$query_tickets->bindParam(':piece_jointe', $new_img_name, PDO::PARAM_STR);
$query_tickets->execute();
if($query_tickets->rowCount()){
    $return = ['erro'=> false,  'msg' =>"<div class='alert alert-success' role='alert'>erro: reussi</div>"];

}else{
    $return = ['erro'=> true, 'msg' =>"<div class='alert alert-danger' role='alert'>erro: erreur</div>" ];
}
      }else{
        $return = ['erro'=> true, 'msg' =>"<div class='alert alert-danger' role='alert'>erro: erreur</div>" ];

      }
  }else{
    $return = ['erro'=> true, 'msg' =>"<div class='alert alert-danger' role='alert'>erro: erreur</div>" ];

  }
  }else{
    $query_tickets = $bdd->prepare(" INSERT INTO tickets (id_auteur, pseudo_auteur, demande, priorite, sujet, description, message) VALUES (:question_id_author, :question_pseudo_author, :demande, :priorite, :sujet, :description, :message)");

    $query_tickets->bindParam(':question_id_author', $question_id_author, PDO::PARAM_STR);
    $query_tickets->bindParam(':question_pseudo_author', $question_pseudo_author, PDO::PARAM_STR);
    $query_tickets->bindParam(':demande', $demande, PDO::PARAM_STR);
    $query_tickets->bindParam(':priorite', $priorite, PDO::PARAM_STR);
    $query_tickets->bindParam(':sujet', $sujet, PDO::PARAM_STR);
    $query_tickets->bindParam(':description', $description, PDO::PARAM_STR);
    $query_tickets->bindParam(':message', $message, PDO::PARAM_STR);
    
    $query_tickets->execute();




if($query_tickets->rowCount()){
    $return = ['erro'=> false,  'msg' =>"<div class='alert alert-success' role='alert'>erro: reussi</div>"];

}else{
    $return = ['erro'=> true, 'msg' =>"<div class='alert alert-danger' role='alert'>erro: erreur</div>" ];
}
}


echo json_encode($return);

?>
