
<?php $title = 'Locagite - Nous contacter'; ?>
<?php $page = 5; ?>
<?php ob_start(); ?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Nous Contacter</h1>
              <span class="color-text-a">Voulez-vous nous contacter? Nous serons heureux de vous acceuillir dans nos locaux du lundi au vendredi de 8h30-12h30 puis de 14h-17h et le samedi de 9h-13h. Vous pouvez aussi nous laisser un message en remplissant le formulaire <a href="#myform"><strong>ci-dessous</strong></a>. Merci! </span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contact
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-map box">
              <div id="map" class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-sm-12 section-t8" id="myform">
            <div class="row">
              <div class="col-md-7">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form" >
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Votre nom" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Votre Email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Objet" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Votre message a ét béien envoye. Merci!</div>
                      </div>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-a"> Envoyer</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Adresse electronique</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">Email.
                        <span class="color-a"><?= $parametres->getParams('email_site') != null ? $parametres->getParams('email_site')['valeur'] :'#'?></span>
                      </p>
                      <p class="mb-1">Phone.
                        <span class="color-a"><?= $parametres->getParams('phone_site') != null ? $parametres->getParams('phone_site')['valeur'] :'#'?></span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Nous visiter</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                      <span class="color-a"><?= $parametres->getParams('adresse_site') != null ? $parametres->getParams('adresse_site')['valeur'] :'#'?></span>

                        <br>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="bi bi-share"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Nos réseaux sociaux</h4>
                    </div>
                    <div class="icon-box-content">
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="<?= $parametres->getParams('facebook') != null ? $parametres->getParams('facebook')['valeur'] :'#'?>" target="_blank" class="link-one">
                              <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="<?= $parametres->getParams('twitter') != null ? $parametres->getParams('twitter')['valeur'] :'#'?>" target="_blank" class="link-one">
                              <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="<?= $parametres->getParams('instagram') != null ? $parametres->getParams('instagram')['valeur'] :'#'?>" target="_blank" class="link-one">
                              <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="<?= $parametres->getParams('linkedin') != null ? $parametres->getParams('linkedin')['valeur'] :'#'?>" target="_blank" class="link-one">
                              <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->

  <?php $content = ob_get_clean(); ?>
  <!-- Loading of our website frontend template -->
  <?php require('frontTemplate.php'); ?>