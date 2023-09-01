<?php 
    require('../actions/users/securityAction.php'); 
    require('../actions/questions/showAssignTicketAction.php');
    require('../actions/questions/getinfosAssignTicketAction.php');
    require('../actions/questions/assignTicketAction.php');
    
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
         include '../agent/include/navbar.php'
         ?>
 <!-- End Header -->

  <!-- ======= Sidebar ======= -->
        <?php
         include '../agent/include/sidebar.php'
         ?>
  <!-- End Sidebar-->
  <main>
          
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Assigner le ticket</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Assigner le ticket</li>
          <li class="breadcrumb-item active">Assigner</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Assigner le ticket  </h5> 
                      

             <!-- Table with stripped rows -->
 <?php 
 if(isset($question_assigner)){ 
                ?>
      <form action="" method="POST">
      <?php 
            if(isset($errorMsg)){ 
                echo  "<div class='alert alert-success' role='alert'>"
                .$errorMsg."</div>";
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>
          <div class="mb-3">
          <label for="type_demande" class="col-sm-5 col-form-label">Assigner a:</label>
        <select class="form-select" aria-label="Default select example" id="assigner" name="assigner" required>
        <option selected>--------------------------------------------------------Employer----------------------------------------------------------</option>
    <?php 
                while($assign = $getAllAnswersOfThisQuestion->fetch()){
                    ?>
                                
              <option value="<?= $assign['pseudo']; ?>"><?= $assign['pseudo']; ?></option>
              <?php 
              }
              ?>
            </select> 
          </div>
          
         
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="validate">Assigner</button>
      </div>
      </form>

      <?php
            }
        ?>
       
              <!-- End Table with stripped rows -->

            </div>
          </div>

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
    include '../agent/include/footer.php';
  ?>

</body>

</html>