<?php $title = 'Locagite - Accueil'; ?>
<?php $page = 1; ?>
<?php ob_start(); ?>

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(public/frontend/assets/img/slide-1.jpg)" onclick="window.open('public/frontend/assets/img/slide-1.jpg','_self');">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Rennes, France
                      <br> 35000
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">Appartement </span> 204
                      <br> Immeuble des oliviers
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">A louer | € 1200</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(public/frontend/assets/img/slide-2.jpg)" onclick="window.open('public/frontend/assets/img/slide-2.jpg','_self');">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Rennes, France
                      <br>35000
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Appartement</span> 112
                      <br> Immeuble le Renard
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">A louer | € 990 </span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(public/frontend/assets/img/slide-3.jpg)" onclick="window.open('public/frontend/assets/img/slide-3.jpg','_self');">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Cesson-Sevigne, France
                      <br> 35510
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Maison </span> Alira
                      <br> 
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">A vendre | € 240.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">A La Une</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.php">Toutes nos propriétés
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="public/frontend/assets/img/property-6.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php">Appartement 107
                          <br /><br /> Immeuble du Renard</a>
                      </h2>
                    </div><br />
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">A vendre | $ 115.000</span>
                      </div>
                      <a href="#" class="link-a">Cliquer ici pour afficher
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h1 class="card-info-title">Superficie</h1>
                          <span>37m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Chambres</h6>
                          <span>2</span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Salle de bain</h6>
                          <span>4</span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Garages</h6>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="public/frontend/assets/img/property-3.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php">Maison 
                          <br /> <br /> Maisons du Sud</a>
                      </h2>
                    </div> <br />
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">A louer | € 12.000</span>
                      </div>
                      <a href="property-single.php" class="link-a">Cliquer ici pour afficher
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h2 class="card-info-title">Superfice</h2>
                          <span>112m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Chambre (s)</h6>
                          <span>4</span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Salle de bain</h6>
                          <span>2</span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Garages</h6>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="public/frontend/assets/img/property-7.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php">Appartement 245 
                          <br /> <br /> Immeuble Courageux</a>
                      </h2>
                    </div> <br />
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">A vendre | € 117.000</span>
                      </div>
                      <a href="property-single.php" class="link-a">Cliquer ici pour afficher
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h6 class="card-info-title">Superficie</h6>
                          <span>57m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Chambre(s)</h6>
                          <span>3</span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Salle de bain</h6>
                          <span>2</span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Garages</h6>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="public/frontend/assets/img/property-10.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php">Studio
                          <br /> <br /> Immeuble du Bonheur</a>
                      </h2>
                    </div> <br />
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">A louer | € 450</span>
                      </div>
                      <a href="property-single.php" class="link-a">Cliquer ici pour afficher
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h6 class="card-info-title">Superficie</h6>
                          <span>19m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Chambres</h6>
                          <span>1</span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Salle de bain</h6>
                          <span>1</span>
                        </li>
                        <li>
                          <h6 class="card-info-title">Garages</h6>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    
    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Dernières Publications</h2>
              </div>
              <div class="title-link">
                <a href="blog-grid.php">Toutes les nouveautés
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="public/frontend/assets/img/post-2.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Maison</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">
                          <br> nouveau</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 dec. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="public/frontend/assets/img/post-5.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Studio</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">
                          <br> nouveau</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">22 dec. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="public/frontend/assets/img/post-7.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Appartement</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">
                          <br> nouveau</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 dec. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="public/frontend/assets/img/post-3.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Studio</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">
                          <br> nouveau</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">27 dec. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->

  </main><!-- End #main -->

  <?php $content = ob_get_clean(); ?>
  <!-- Loading of our website frontend template -->
  <?php require('frontTemplate.php'); ?>
  

 