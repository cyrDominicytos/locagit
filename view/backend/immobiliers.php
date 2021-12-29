<?php $title = 'Locagite - Admin, Gérer immobiliers'; ?>
<?php $page = 1; ?>
<?php ob_start(); ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Gérer les propriétés</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Locagite</a></li>
          <li class="breadcrumb-item">Admin</li>
          <li class="breadcrumb-item active">Gérer les propriétés</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Listes des propriétés</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


<?php $content = ob_get_clean(); ?>
<!-- Loading of our website frontend template -->
<?php require('backTemplate.php'); ?>
  

 