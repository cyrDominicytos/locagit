
<?php $title = 'Locagite - A propos de nous'; ?>
<?php ob_start(); ?>

    <main id="main">

        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Appartement 104</h1>
                            <span class="color-text-a">Rennes, 3 rue de l'union</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">Accueil</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="property-grid.php">Description</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Appartement
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Intro Single-->

        <!-- ======= Property Single ======= -->
        <section class="property-single nav-arrow-b">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div id="property-single-carousel" class="swiper">
                            <div class="swiper-wrapper">
                                <div class="carousel-item-b swiper-slide">
                                    <img src="../../public/frontend/assets/img/slide-1.jpg" alt="">
                                </div>
                                <div class="carousel-item-b swiper-slide">
                                    <img src="../../public/frontend/assets/img/slide-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="property-single-carousel-pagination carousel-pagination"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">

                        <div class="row justify-content-between">
                            <div class="col-md-5 col-lg-4">
                                <div class="property-price d-flex justify-content-center foo">
                                    <div class="card-header-c d-flex">
                                        <div class="card-box-ico">
                                            <span class="bi bi-cash"> €</span>
                                        </div>
                                        <div class="card-title-c align-self-center">
                                            <h5 class="title-c">12000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-summary">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="title-box-d section-t4">
                                                <h3 class="title-d">Caractéristiques</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <ul class="list">
                                            <li class="d-flex justify-content-between">
                                                <strong>Identifiant de la propriété:</strong>
                                                <span>1134</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Localisation:</strong>
                                                <span>Rennes, 3 rue de l'union</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Type de la propriété:</strong>
                                                <span>Appartement</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Statut:</strong>
                                                <span>A louer</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Superficie:</strong>
                                                <span>54m<sup>2</sup>
                        </span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Chambre(s):</strong>
                                                <span>4</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Salle(s) de bain:</strong>
                                                <span>2</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Garage(s):</strong>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 section-md-t3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d">
                                            <h3 class="title-d">Description de la propriété</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-description">
                                    <p class="description color-text-a">
                                        Propriété situe sur un terrain de 7400m
                          <sup>2</sup> à Rennes (35000).
                          Appartement 4 pièces de 54m<sup>2</sup> : 1 cuisine, 2 chambres, 1 salle de bain + WC.<br>
                          Chauffage nouvelle génération : aérotherme reversible (chauffage+clim).<br>

                          Premiers commerces à 3km+Gare TGV à 20min
                                    </p>
                                   <!--  <p class="description color-text-a no-margin">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                                    </p> -->
                                </div>
                                <div class="row section-t3">
                                    <div class="col-sm-12">
                                        <div class="title-box-d">
                                            <h3 class="title-d">Autres</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="amenities-list color-text-a">
                                    <ul class="list-a no-margin">
                                        <li>Balcon: Oui</li>
                                        <li>Cuisine: Oui</li>
                                        <li>Terrain de sport: Non</li>
                                        <li>Internet: Oui</li>
                                        <li>Parking: Oui</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans" aria-selected="false"> Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-map-tab" data-bs-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">Localisation</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                                <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                            <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                                <img src="../../public/frontend/assets/img/plan2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                                    width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row section-t3">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Contact Agent</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <img src="../../public/frontend/assets/img/agent-4.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="property-agent">
                                    <h4 class="title-agent">Anabella Geller</h4>
                                    <p class="color-text-a">
                                        Agent immobilier en charge de a location.
                                    </p>
                                    <ul class="list-unstyled">
                                        <li class="d-flex justify-content-between">
                                            <strong>Phone:</strong>
                                            <span class="color-text-a">(33) 06 27 28 29 30</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Mobile:</strong>
                                            <span class="color-text-a">777 287 378 737</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Email:</strong>
                                            <span class="color-text-a">annabella@locagite.com</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Skype:</strong>
                                            <span class="color-text-a">Annabela.ge</span>
                                        </li>
                                    </ul>
                                    <div class="socials-a">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="property-contact">
                                    <form class="form-a">
                                        <div class="row">
                                            <div class="col-md-12 mb-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Nom *" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-1">
                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-1">
                                                <div class="form-group">
                                                    <textarea id="textMessage" class="form-control" placeholder="Message *" name="message" cols="45" rows="8" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <button type="submit" class="btn btn-a">Envoyer Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Property Single-->

    </main>
    <!-- End #main -->

    <?php $content = ob_get_clean(); ?>
  <!-- Loading of our website frontend template -->
  <?php require('frontTemplate.php'); ?>