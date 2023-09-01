<?php 
    session_start();
    require('../actions/database.php');
   
?>
<!DOCTYPE php>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col">
          <div class="row">

            <!-- Sales Card -->
            <div class="col">
              <div class="card info-card sales-card">

              

                <div class="card-body">
                  <h5 class="card-title">Tickets Assignés </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle bg-warning d-flex align-items-center justify-content-center">
                    <i class="bx bxs-coupon"></i>
                    </div>
                    <div class="ps-3">
                    <?php
                     $req = $bdd->prepare("SELECT  COUNT(*)  as NbNews FROM tickets WHERE assigner = ? " );
                     $req->execute(array($_SESSION['pseudo']));
                     $donnees = $req->fetch();
                     $req->closeCursor();
                     if( $req->rowCount() > 0){
                      echo '<h6>'.$donnees['NbNews'].'</h6>';
                     }else{
                      echo '<h6>Pas de données</h6>';
                     }              
                         ?>       
                          <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

             <!-- Sales Card -->
             <div class="col">
              <div class="card info-card sales-card">

                

                <div class="card-body">
                  <h5 class="card-title">Tickets Ouverts </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle bg-info d-flex align-items-center justify-content-center">
                    <i class="bx bxs-coupon"></i>
                    </div>
                    <div class="ps-3">
                    <?php
                     $req = $bdd->prepare("SELECT  COUNT(*)  as NbNews FROM tickets WHERE assigner = ? AND statut = 'En cours' " );
                     $req->execute(array($_SESSION['pseudo']));
                     $donnees = $req->fetch();
                     $req->closeCursor();
                     if( $req->rowCount() > 0){
                      echo '<h6>'.$donnees['NbNews'].'</h6>';
                     }else{
                      echo '<h6>Pas de données</h6>';
                     }              
                         ?>
                  <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col">
              <div class="card info-card revenue-card">

               

                <div class="card-body">
                  <h5 class="card-title">Tickets Fermés </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center bg-danger justify-content-center">
                    <i class="bx bxs-coupon"></i>
                    </div>
                    <div class="ps-3">
                    <?php
                     $req = $bdd->prepare("SELECT  COUNT(*)  as NbNews FROM tickets WHERE assigner = ? AND statut = 'close' " );
                     $req->execute(array($_SESSION['pseudo']));
                     $donnees = $req->fetch();
                     $req->closeCursor();
                     if( $req->rowCount() > 0){
                      echo '<h6>'.$donnees['NbNews'].'</h6>';
                     }else{
                      echo '<h6>Pas de données</h6>';
                     }              
                         ?>
                   <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
             <!-- Revenue Card -->
             <div class="col">
              <div class="card info-card revenue-card">


                <div class="card-body">
                  <h5 class="card-title">Tickets Terminés </h5>
                  
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex bg-success align-items-center justify-content-center">
                    <i class="bx bxs-coupon"></i>
                    </div>
                    <div class="ps-3">
                    <?php
                     $req = $bdd->prepare("SELECT  COUNT(*)  as NbNews FROM tickets WHERE assigner = ? AND statut = 'Terminé' " );
                     $req->execute(array($_SESSION['pseudo']));
                     $donnees = $req->fetch();
                     $req->closeCursor();
                     if( $req->rowCount() > 0){
                      echo '<h6>'.$donnees['NbNews'].'</h6>';
                     }else{
                      echo '<h6>Pas de données</h6>';
                     }              
                         ?>
                     <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

         
            </div>

            <!-- Recent Sales -->
            <div class="col">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  
                </div>

                <div class="card-body">
                  <h5 class="card-title">My-tickets Recent <span>| Today</span></h5>
                 
               <!-- Button trigger modal -->

                 <?php 
                 include '../agent/my-tickets.php';
                 ?>
                 </div>

              </div>
            </div><!-- End Recent Sales -->

           

          </div>
        </div><!-- End Left side columns -->

       

    
    </section>

  </main><!-- End #main -->    

  <!-- ======= Footer ======= -->
  <?php 
    include '../agent/include/footer.php';
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>