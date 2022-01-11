<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?> <?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="public/css/flexslider.css" rel="stylesheet" />
    <link href="public/css/style.css" rel="stylesheet" />

   

</head>

<body>
    <div id="wrapper" class="home-page">

        <!-- start header -->
        <?php include_once("view/frontend/header.html") ?>
        <!-- end header -->
        
        <?= $content ?>

        <!-- start footer -->
        <?php include_once("view/frontend/footer.html") ?>
        <!-- end footer -->
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="public/js/jquery.js"></script>
    <script src="public/js/jquery.easing.1.3.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.fancybox.pack.js"></script>
    <script src="public/js/jquery.fancybox-media.js"></script>
    <script src="public/js/jquery.flexslider.js"></script>
    <script src="public/js/animate.js"></script>
    <!-- Vendor Scripts -->
    <script src="public/js/modernizr.custom.js"></script>
    <script src="public/js/jquery.isotope.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/animate.js"></script>
    <script src="public/js/custom.js"></script>

    <script>
        function displayImage(params) {
            window.open(params);
        }
    </script>
</body>

</html>