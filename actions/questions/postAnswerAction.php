<?php

require('../actions/database.php');


if(isset($_POST['answer'])){


    $user_answer =$_POST['answer'];
  
    
    if (empty($user_answer)) {
    	echo 'answer';
    }else {
		    
		if(isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])){
          print_r($_FILES['pp']);
		  $img_name = $_FILES['pp']['name'];
		  $img_size = $_FILES['pp']['size'];
		  $tmp_name = $_FILES['pp']['tmp_name'];
		  $error = $_FILES['pp']['error'];
		  if($error===0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);
    
            $allowed_exs = array('jpg', 'jpeg', 'png');
    
            if(in_array($img_ex_to_lc, $allowed_exs)){
              $new_img_name = uniqid($user_answer, true).'.'.$img_ex_to_lc;
              $img_upload_path = 'upload/' .$new_img_name;
              move_uploaded_file($tmp_name, $img_upload_path);
                   
			  $sql = "INSERT INTO answers(id_auteur, pseudo_auteur, id_question, contenu, pp)VALUES(?, ?, ?, ?, ?)";
	  $stmt = $bdd->prepare($sql);
	  $stmt->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idOfTheQuestion, $user_answer, $new_img_name));

	  echo 'reussi';
            }else{
				echo 'echek';
            }
        }else{
			echo 'echekf';
        }
		}else{
    	$sql = "INSERT INTO answers(id_auteur, pseudo_auteur, id_question, contenu)VALUES(?, ?, ?, ?)";
    	$stmt = $bdd->prepare($sql);
    	$stmt->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idOfTheQuestion, $user_answer));

    }
}


}else {
	echo 'echekr';
}


