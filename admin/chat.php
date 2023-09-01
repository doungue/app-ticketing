<?php 
    require('../actions/users/securityAction.php'); 
    require('../actions/questions/showArticleContentAction.php'); 
    require('../actions/database.php');
    require('../actions/questions/test.php');  
    require('../actions/questions/showAllAnswersOfQuestionAction.php');
    require('../actions/questions/myQuestionsAction.php')
    
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   
  <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 

  <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/custum.css" rel="stylesheet"><title></title>
</head>
<body>
   <!-- ======= Header ======= -->
   <?php
         include '../admin/include/navbar.php'
         ?>
 <!-- End Header -->

  <!-- ======= Sidebar ======= -->
        <?php
         include '../admin/include/sidebar.php'
         ?>
  <!-- End Sidebar-->
  <main>
          
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cycle de vie du ticket</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Cycle de vie du ticket</li>
          <li class="breadcrumb-item active">Chat</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
      <?php 
    if(isset($errorMsg)){ echo $errorMsg; }


    if(isset($question_publication_date)){
        ?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tickets[#<?= $question_id; ?>] créer le <?= $question_publication_date; ?>
              <?php if($question_statut == "En cours"){?> <span class=" position-absolute end-0 me-3">
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="bi bi-plus-circle"></i><a href="../actions/questions/openTicketAction.php?id=<?= $question_id; ?>"> Close</a> 
            </button></span>
            <?php
         }else{?>
              <span class=" position-absolute end-0 me-3">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="bi bi-plus-circle"></i>
              <a href="../actions/questions/closeTicketAction.php?id=<?= $question_id; ?>">Open</a> 
              </button></span>
            <?php  
             } 
            ?> 
         </h5> 
             
            
            
            <!-- End Modal new ticket -->

              <p></p>

              <div class="container">



        <section class="show-content">

            <ul class="list-group list-group-flush">
    <li class="list-group-item">
            <dl class="row">  
               <dt class="col-sm-3">Sujet:</dt>
               <dd class="col-sm-9"  name="sujet"> <p><?= $question_sujet; ?></p></dd>
            </dl>
        </li>
      <li class="list-group-item">
            <dl class="row">  
               <dt class="col-sm-3">Demande:</dt>
               <dd class="col-sm-9" name="demande"> <p><?= $question_demande; ?></p></dd>
            </dl>
        </li> 
        <li class="list-group-item">
            <dl class="row">  
               <dt class="col-sm-3">Priorite:</dt>
               <dd class="col-sm-9"   name="priorite"> <p><?= $question_priorite; ?></p></dd>
            </dl>
        </li>

        <li class="list-group-item">
            <dl class="row">  
               <dt class="col-sm-3">Description:</dt>
               <dd class="col-sm-9" name="description"> <p><?= $question_description; ?></p></dd>
            </dl>
        </li>
        <li class="list-group-item">
            <dl class="row">  
               <dt class="col-sm-3">Message:</dt>
               <dd class="col-sm-9" name="message"> <p><?= $question_message; ?></p></p></dd>
            </dl>
        </li>
        <li class="list-group-item">
            <dl class="row">  
               <dt class="col-sm-3">Statut:</dt>
               <dd class="col-sm-9" name="description"> <p><?= $question_statut; ?></p></dd>
            </dl>
        </li>
        <?php 
        if($question_piece != "null"){ ?>
            <li class="list-group-item">
            <dl class="row">  
               <dt class="col-sm-3">piece:</dt>
               <dd class="col-sm-9" name="description"> <p><img src="../upload/<?= $question_piece; ?>" width="600px" alt=""></p></dd>
            </dl>
        </li>
<?php }else{?>

  <?php
}
        
        ?>
    </ul>

            <hr>
            <small><?= '<a href="users-profile.php?id='.$question_id_author.'">'.$question_pseudo_author . '</a> ' . $question_publication_date; ?></small>
        </section>
        <br>
        <section class="show-answers">
 <div class="overflow-auto p-3 bg-light container border-rounded"
  style="max-width: 100%; height: 400px;">
  <?php 
                while($answer = $getAllAnswersOfThisQuestion->fetch()){
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <a href="profile.php?id=<?= $answer['id_auteur']; ?>">
                                <?= $answer['pseudo_auteur']; ?>
                            </a>
                        </div>
                        <div class="card-body">
                            <?= $answer['contenu']; ?>
                        </div>
                        <p class="card-body">
                          <img src="../upload/<?= $answer['pp']; ?>"  width="500px"  alt=""></p>
                        <p class="card-body"><?= $answer['date']; ?></p>
                    </div>
                    
                    <?php
                }
            ?> </div>
<br>

<?php
   include 'test.php';
?>

           

        </section>
        
       

</div>
       
              <!-- End Table with stripped rows -->

            </div>
          </div>

          <?php
    }
?>

        </div>
      </div>
    </section>


  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 

  <!-- Template Main JS File -->
 
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
     <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
     <script>
$(document).ready(function(){
    $("#id_ticket").DataTable();
});

</script>
  
  <?php 
    include '../admin/include/footer.php';
  ?>

</body>

</html>