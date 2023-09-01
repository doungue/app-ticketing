<?php 
    require('../actions/users/securityAction.php'); 
    require('../actions/questions/showDemandeTcketsAction.php'); 
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
              <h1>Listes des Demnades</h1>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">Listes des Demnades</li>
                  <li class="breadcrumb-item active">Demande</li>
                </ol>
              </nav>
            </div><!-- End Page Title -->
        
            <section class="section">
              <div class="row">
                <div class="col-lg-12">
        
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Listes des Demnades </h5> 
                              
                      
                    
                     <!-- Modal -->
                     
                     <!-- Modal new ticket -->
                    
                    <!-- End Modal new ticket -->
        
                      <p></p>
        
                     <!-- Table with stripped rows -->
                     <div class="container mt-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
          
            <div>
              <h4></h4>
            </div>
            <div>
              <h4></h4>
            </div>
             <div>
              <h4></h4>
            </div>
             <div>
              <h4></h4>
            </div>
            <div>
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                 <i class="bi bi-plus-circle"></i> Nouvelle Demande
                </button>
            </div>
        </div>
<br>
        
<!-- Modal -->

      <?php
         include '../modal/new_demande_Modal.php';
        ?>
     
<!-- Button trigger modal -->


    <div class="row">
        <div class="col-lg-12">
            <div class="table responsive">
    <table id="id_ticket"  class="table table-bordered">
        <thead>
            <tr>
            <th>ID</th>
                <th>Demande</th>               
                <th>Date</th>              
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
        <tr>
                <th>ID</th>
                <th>Demande</th>               
                <th>Date</th>              
                <th>Action</th>
        </tr>
      </tfoot>
    </table>
    </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="editeticketModal" tabindex="-1" aria-labelledby="editeticketModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-gray">
        <h5 class="modal-title" id="editeticketModalLabel">Edite tickets</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
        <?php
         include '../TEST/editeModal.php';
        ?>

      </div>
      
    </div>
  </div>
</div>






                      <!-- End Table with stripped rows -->
        
                    </div>
                  </div>
        
                </div>
              </div>
            </section>
        
        
          </main><!-- End #main -->


 
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src= "../script/listes_demand.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $("#id_ticket").DataTable();
});

</script>
<script src = "../script/newdemand.js"></script>
<?php 
    include '../admin/include/footer.php';
  ?>
</body>
</html>