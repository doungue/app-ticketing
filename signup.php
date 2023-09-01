<?php require('actions/users/signupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>
<main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card ">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Créer un Compte</h5>
                    <p class="text-center small">Enterez vos informations Personnelles pour creer</p>
                  </div>
 
    <form class="row g-3 needs-validation" novalidate method="POST">

        <div class="col-md-6">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" required>
            <div class="invalid-feedback">Please, enter your pseudo!</div>
        </div>
        <div class="col-md-6">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastname" required>
            <div class="invalid-feedback">Please, enter your name!</div>
        </div>
        <div class="col-md-6">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="firstname" required>
            <div class="invalid-feedback">Please, enter your prénom!</div>
        </div>
        <div class="col-md-6">
            <label for="exampleInputEmail1" class="form-label">domaine</label>
            <input type="text" class="form-control" name="domaine" required>
            <div class="invalid-feedback">Please, enter your domaine!</div>
            </div>
        <div class="mb-3">
        <label for="priorite" class="col-sm-5 col-form-label">Type</label>
        <select class="form-select" aria-label="Default select example" name="type" required>
              <option selected>client</option>
              <option value="client">client</option>
              <option value="agent">agent</option>
            </select>
        <div class="invalid-feedback">Please, enter your type!</div>
    </div>
      
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
            <div class="invalid-feedback">Please, enter your password!</div>
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        <div class="col-12">
                      <p class="small mb-0">Vous-avez deja un Compte? <a href="login.php">Connectez-vous</a></p>
         </div>
   </form>

   </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>