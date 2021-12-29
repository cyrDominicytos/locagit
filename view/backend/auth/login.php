<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Locagite - Admin Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../public/backend/assets/img/favicon.png" rel="icon">
  <link href="../../../public/backend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../public/backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../public/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../public/backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../../public/backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../../public/backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../../public/backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../../public/backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!--  CSS File -->
  <link href="../../../public/backend/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="../../../public/backend/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Locagite</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Veuillez vous connecter</h5>
                    <p class="text-center small">Saisissez votre email et mot de passe pour vous connecter</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Veuillez saisir votre email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="passwword" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Veuillez saisir votre mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous avez oublié votre mot de passe ?<a href="pages-register.html">Réinitialiser</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../../public/backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../../public/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../public/backend/assets/vendor/chart.js/chart.min.js"></script>
  <script src="../../../public/backend/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../../public/backend/assets/vendor/quill/quill.min.js"></script>
  <script src="../../../public/backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../../public/backend/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../../public/backend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../../public/backend/assets/js/main.js"></script>

</body>

</html>