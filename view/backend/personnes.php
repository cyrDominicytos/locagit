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
								<a href="#">Gérer les personnes</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Creer une personne</h4>
									</div>
								</div>
								<div class="card-body">
									<form action="index.php?action=insertPersonne" method="post" enctype="multipart/form">
                                    <div class="row">
												<div class="col-md-12">
                                                    <div class="avatar-lg" style="display: inline-block; vertical-align: middle;">
                                                        <img src="public/backend/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="nom" name="nom"   type="text"   class="form-control input-border-bottom" required max="200">
														<label for="nom" class="placeholder">Nom *</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="prenom" name="prenom"   type="text"  class="form-control input-border-bottom" required max="200">
														<label for="prenom" class="placeholder">Prénom *</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="email" name="email"   type="text"  class="form-control input-border-bottom" required max="200">
														<label for="email" class="placeholder">Email *</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-floating-label">
														<input  id="telephone" name="telephone"   type="text"  class="form-control input-border-bottom" required max="200">
														<label for="telephone" class="placeholder">Téléphone *</label>
													</div>
												</div>
												<div class="col-md-6">
                                                    <div class="form-group form-floating-label">
                                                        <select class="form-control input-border-bottom"  id="sexe" name="sexe" required>
                                                            <option value="M" >M</option>
                                                            <option value="F" >F</option>
                                                        </select>
                                                        <label for="sexe" class="placeholder">Sexe *</label>
                                                    </div>
												</div>
												<div class="col-md-6">
                                                    <div class="form-group form-floating-label">
                                                        <select class="form-control input-border-bottom"  id="type" name="type" onchange="changeType()" required>
                                                            <option value="1" >Partenaire</option>
                                                            <option value="2" >Collaborateur</option>
                                                            <option value="3" >Propriétaire</option>
                                                            <option value="4" >Administrateur</option>
                                                        </select>
                                                        <label for="type" class="placeholder">Type de personne *</label>
                                                    </div>
												</div>
                                                <div class="col-md-6" id="siteUrlDiv" style="display:none">
													<div class="form-group form-floating-label">
														<input  id="siteUrl" name="siteUrl"   type="text"  class="form-control input-border-bottom"  >
														<label for="siteUrl" class="placeholder">Site Url *</label>
													</div>
												</div>
                                                <div class="col-md-6" id="ordreAfficheDiv1" style="display:none">
													<div class="form-group form-floating-label">
														<input  id="ordreAffiche" name="ordreAffiche" type="number"  class="form-control input-border-bottom"  value="0">
														<label for="ordreAffiche" class="placeholder">Ordre Affichage *</label>
													</div>
												</div>
                                                <div class="col-md-4 offset-md-4" id="ordreAfficheDiv2" style="display:none">
													<div class="form-group form-floating-label">
														<input  id="ordreAffiche" name="ordreAffiche" type="number"  class="form-control input-border-bottom"  value="0">
														<label for="ordreAffiche" class="placeholder">Ordre Affichage *</label>
													</div>
												</div>
                                                <div class="col-md-4 offset-md-4" id="dateContratDiv" style="display:none">
													<div class="form-group form-floating-label">
														<input  id="dateContrat" name="dateContrat" type="date"  class="form-control input-border-bottom"  max="200">
														<label for="dateContrat" class="placeholder">Date de contrat *</label>
													</div>
												</div>
                                                
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-md-4 ">
                                                    <button type="button" id="addRowButton" class="btn btn-gray">Retour</button>
                                                </div>
                                                
                                                <div class="col-md-4 offset-md-4" >
                                                    <button type="submit" id="addRowButton" class="btn btn-pnud" style="display: inline-block;  vertical-align: middle; ">Enregistrer</button>
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
    

    function changeType() {
    let selectedType = document.getElementById("type").value;
    
    switch (selectedType) {
        case "1":
            closeAllOptions() ;
            document.getElementById("siteUrlDiv").style.display ="block";
            document.getElementById("ordreAfficheDiv1").style.display ="block";
         break;
        case "2":

            closeAllOptions() ;
            document.getElementById("ordreAfficheDiv2").style.display ="block";
         break;
        case "3":
            closeAllOptions() ;
            document.getElementById("dateContratDiv").style.display ="block";            
         break;
        case "4":
            closeAllOptions() ;
         break;
            
        default:
        closeAllOptions() ;
        
        break;
    }

}

function closeAllOptions() {
    document.getElementById("siteUrlDiv").style.display ="none";
    document.getElementById("ordreAfficheDiv1").style.display ="none";
    document.getElementById("dateContratDiv").style.display ="none";          
    document.getElementById("ordreAfficheDiv2").style.display ="none";

    }


</script>
<?php $js = ob_get_clean(); ?>
<!-- Loading of our website frontend template -->
<?php require('backTemplate.php'); ?>



 