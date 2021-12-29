<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../public/frontend/assets/img/favicon.png" rel="icon">
  <link href="../../public/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/../public/frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../public/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../public/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../public/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../public/frontend/assets/css/style.css" rel="stylesheet">
</head>

<body>
    

        <!-- start header -->
        <?php include_once("header.php") ?>
        <!-- end header -->
        
        <?= $content ?>

        <!-- start footer -->
        <?php include_once("footer.php") ?>
        <!-- end footer -->
    
        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
    <!-- javascript
    ================================================== -->
<!-- Vendor JS Files -->
  <script src="../../public/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../public/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../public/frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../public/frontend/assets/js/main.js"></script>
    <script>
        function displayImage(params) {
            window.open(params);
        }
    </script>
</body>

</html>