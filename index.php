<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Locagite - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="public/css/flexslider.css" rel="stylesheet" />
    <link href="public/css/style.css" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper" class="home-page">
       
        <!-- start header -->
       <?php include_once("view/frontend/header.html") ?>
        <!-- end header -->
        <section id="banner">

            <!-- Slider -->
            <div id="main-slider" class="flexslider">
                <ul class="slides">
                    <li onclick="displayImage('img/slides/2.jpg')">
                   
                        <img src="public/img/slides/2.jpg" alt="" style=" cursor:pointer"/>
                        <div class="flex-caption">
                            <h3>Maisons</h3>

                        </div>
                    </li>
                    <li onclick="displayImage('img/slides/1.jpg')" style=" cursor:pointer">
                        <img src="public/img/slides/1.jpg" alt="" />
                        <div class="flex-caption">
                            <h3>Appartements Meublés</h3>

                        </div>
                    </li>
                    <li onclick="displayImage('img/slides/1.jpg')" style=" cursor:pointer">
                        <img src="public/img/slides/1.jpg" alt="" />
                        <div class="flex-caption">
                            <h3>Terrain</h3>

                        </div>
                    </li>
                </ul>
            </div>
            <!-- end slider -->

        </section>


        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="skill-home">
                        <div class="skill-home-solid clearfix">
                            <div class="col-md-3 col-sm-6 text-center">
                                <span class="icons c1"><i class="fa fa-home"></i></span>
                                <div class="box-area">
                                    <h3>Maison</h3>
                                    <p>Nous disponsons des maisons de qualité</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 text-center">
                                <span class="icons c2"><i class="fa fa-rocket"></i></span>
                                <div class="box-area">
                                    <h3>Appartement</h3>
                                    <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 text-center">
                                <span class="icons c3"><i class="fa fa-trophy"></i></span>
                                <div class="box-area">
                                    <h3>Terrain</h3>
                                    <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 text-center">
                                <span class="icons c4"><i class="fa fa-star"></i></span>
                                <div class="box-area">
                                    <h3>Bureau</h3>
                                    <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <section class="section-padding noTopMrgn">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2><span class="coloured">A LA</span> UNE</h2>
                                <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row service-v1 margin-bottom-40">
                        <div class="col-sm-3 md-margin-bottom-40">
                            <img class="img-responsive" src="public/img/img1.jpg" alt="">
                            <h3>Apartments</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                        </div>
                        <div class="col-sm-3 md-margin-bottom-40">
                            <img class="img-responsive" src="public/img/img2.jpg" alt="">
                            <h3>luxury Villas</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                        </div>
                        <div class="col-sm-3 md-margin-bottom-40">
                            <img class="img-responsive" src="public/img/img3.jpg" alt="">
                            <h3>Gated Projects</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                        </div>
                        <div class="col-sm-3 md-margin-bottom-40">
                            <img class="img-responsive" src="public/img/img4.jpg" alt="">
                            <h3>Apartments</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                        </div>
                    </div>
                </div>
            </section>


        </section>

        <section class="section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2><span class="coloured">Logements</span> Disponibles</h2>
                            <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="row service-v1 margin-bottom-40">
                    <div class="col-sm-4 md-margin-bottom-40">
                        <img class="img-responsive" src="public/img/img5.jpg" alt="">
                        <h3>Apartments</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                    </div>
                    <div class="col-sm-4 md-margin-bottom-40">
                        <img class="img-responsive" src="public/img/img6.jpg" alt="">
                        <h3>luxury Villas</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                    </div>
                    <div class="col-sm-4 md-margin-bottom-40">
                        <img class="img-responsive" src="public/img/img7.jpg" alt="">
                        <h3>Gated Projects</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                    </div>
                </div>
                <div class="row service-v1 margin-bottom-40">
                    <div class="col-sm-4 md-margin-bottom-40">
                        <img class="img-responsive" src="public/img/img8.jpg" alt="">
                        <h3>Apartments</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                    </div>
                    <div class="col-sm-4 md-margin-bottom-40">
                        <img class="img-responsive" src="public/img/img9.jpg" alt="">
                        <h3>luxury Villas</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                    </div>
                    <div class="col-sm-4 md-margin-bottom-40">
                        <img class="img-responsive" src="public/img/img10.jpg" alt="">
                        <h3>Gated Projects</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2><span class="coloured">A propos</span> de notre agence</h2>
                            <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-text">
                            <p>chez Locagite, nous avons depuis toujours le souci de l’humain, du bien-être des collaborateurs, de la préservation d’un équilibre sain entre les journées de travail et la vie privée. Pour continuer de grandir sans changer d’état d’esprit, nous privilégions une organisation horizontale et des méthodes de management modernes et agiles. Nous osons nous remettre en question chaque jour, nous réinventer quand c’est nécessaire, afin d’être toujours plus performants tout en restant fidèles à nos valeurs..</p>

                            <ul class="withArrow">
                                <li><span class="fa fa-angle-right"></span> Lorem ipsum dolor sit amet</li>
                                <li><span class="fa fa-angle-right"></span> consectetur adipiscing elit</li>
                                <li><span class="fa fa-angle-right"></span> Curabitur aliquet quam id dui</li>
                                <li><span class="fa fa-angle-right"></span> Donec sollicitudin molestie malesuada.</li>
                            </ul>
                            <a href="about.php" class="btn btn-primary">Lire Plus</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="about-image">
                            <img src="public/img/about.jpg" alt="About Images">
                        </div>
                    </div>
                </div>
            </div>
        </section>




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