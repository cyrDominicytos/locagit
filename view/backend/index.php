<?php $title = 'Locagite - Admin'; ?>
<?php $page = 1; ?>
<?php ob_start(); ?>

<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Statistiques</h2>
                    <h5 class="text-white op-7 mb-2"></h5>
                </div>
               
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
   
    <!-- Ligne 1 -->
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-primary card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-users"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <h4 class="card-title">0</h4>
                                <p class="card-category text-center">Biens en location</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-info card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-interface-6"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <h4 class="card-title">0</h4>
                                <p class="card-category">Biens en vente</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-success card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-analytics"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <h4 class="card-title">0</h4>
                                <p class="card-category">Interactions location</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-secondary card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">0</p>
                                <h4 class="card-title">Interactions vente</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- CA -->
     <div class="row">
            <div class="col-md-4">
                <div class="card card-dark bg-secondary-gradient">
                    <div class="card-body bubble-shadow">
                        <h3>0</h3>
                        <h5 class="op-8">Collaborateurs</h5>
                        <div class="pull-right">
                            <h3 class="fw-bold op-8">25% des utilisateurs</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark bg-secondary2">
                    <div class="card-body curves-shadow">
                        <h3>0</h3>
                        <h5 class="op-8">Partenaires</h5>
                        <div class="pull-right">
                            <h3 class="fw-bold op-8">70% des utilisateurs</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark bg-secondary2">
                    <div class="card-body curves-shadow">
                        <h3>0</h3>
                        <h5 class="op-8">Profiles</h5>
                        <div class="pull-right">
                            <h3 class="fw-bold op-8">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CA -->
        
        <div class="row row-card-no-pd">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row card-tools-still-right">
                            <h4 class="card-title">Point Mensuel des biens créés</h4>
                            <div class="card-tools">
                                <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
                                <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
                                <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
                            </div>
                        </div>
                        <p class="card-category">
                        Nombre de biens créés par mois</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive table-hover table-sales">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                   Période
                                                </td>
                                                <td>Biens en ventes</td>
                                                <td class="text-right">
                                                    Biens en locations
                                                </td>
                                                <td class="text-right">
                                                    Total
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                   Dec. 2021
                                                </td>
                                                <td>0</td>
                                                <td class="text-right">
                                                   0
                                                </td>
                                               
                                                <td class="text-right">
                                                    0
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			


<?php $content = ob_get_clean(); ?>
<!-- Loading of our website frontend template -->
<?php require('backTemplate.php'); ?>
  

 