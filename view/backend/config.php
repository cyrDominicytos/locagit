<?php $title = 'Locagite - Admin, Gérer immobiliers'; ?>
<?php $page = 1; ?>
<!-- specific css -->
<?php ob_start(); ?>
<link rel="stylesheet" href="public/backend/assets/css/custom.css"/>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<?php $css = ob_get_clean(); ?>


<?php ob_start(); ?>

<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Administration</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Paramétrer les système</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Information de l'agence</h4>
									</div>
								</div>
								<div class="card-body">
									<form action="index.php?action=updateConfig" method="post" enctype="multipart/form" >
                                    <div class="row">
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="nom" name="nom"   type="text" value="<?= $parametres->getParams('nom_site') != null ? $parametres->getParams('nom_site')['valeur'] :''?>" class="form-control input-border-bottom" required  max="200">
														<label for="nom" class="placeholder">Nom de l'agence*</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="adresse" name="adresse"   type="text" value="<?= $parametres->getParams('adresse_site') != null ? $parametres->getParams('adresse_site')['valeur'] :''?>"  class="form-control input-border-bottom" required max="200">
														<label for="adresse" class="placeholder">Adresse complete *</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="email" name="email"   type="email" value="<?= $parametres->getParams('email_site') != null ? $parametres->getParams('email_site')['valeur'] :''?>"  class="form-control input-border-bottom" required max="200">
														<label for="email" class="placeholder">Email *</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="telephone" name="telephone"   type="text" value="<?= $parametres->getParams('phone_site') != null ? $parametres->getParams('phone_site')['valeur'] :''?>" class="form-control input-border-bottom" required max="200">
														<label for="telephone" class="placeholder">Téléphone *</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="facebook" name="facebook"   type="text" value="<?= $parametres->getParams('facebook') != null ? $parametres->getParams('facebook')['valeur'] :''?>"  class="form-control input-border-bottom" >
														<label for="facebook" class="placeholder">Lien Facebook</label>													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="instagram" name="instagram"   type="text" value="<?= $parametres->getParams('instagram') != null ? $parametres->getParams('instagram')['valeur'] :''?>"  class="form-control input-border-bottom" >
														<label for="instagram" class="placeholder">Lien Instagram</label>													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="twitter" name="twitter"   type="text" value="<?= $parametres->getParams('twitter') != null ? $parametres->getParams('twitter')['valeur'] :''?>"  class="form-control input-border-bottom" >
														<label for="twitter" class="placeholder">Lien Twitter</label>													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="linkedin" name="linkedin"   type="text"  value="<?= $parametres->getParams('linkedin') != null ? $parametres->getParams('linkedin')['valeur'] :''?>" class="form-control input-border-bottom">
														<label for="linkedin" class="placeholder">Lien LinkedIn</label>													</div>
												</div>
                                                <div class="col-md-4 offset-md-4" >
													<div class="form-group form-floating-label">
														<input  id="logo" name="logo" type="file"  class="form-control input-border-bottom">
														<label for="logo" class="placeholder">Logo agence *</label>
													</div>
												</div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-md-4 ">
                                                    <button type="button" id="addRowButton" class="btn btn-gray">Retour</button>
                                                </div>
                                                
                                                <div class="col-md-4 offset-md-4" >
                                                    <button type="submit" id="addRowButton" class="btn btn-pnud" style="display: inline-block;  vertical-align: middle; ">Sauvegarder</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
<?php $content = ob_get_clean(); ?>

<!-- Js -->
<?php ob_start(); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script type="text/javascript">
    

</script>
<?php $js = ob_get_clean(); ?>
<!-- Loading of our website frontend template -->
<?php require('backTemplate.php'); ?>



 