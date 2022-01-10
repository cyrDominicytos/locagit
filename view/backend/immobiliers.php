<?php $title = 'Locagite - Admin, Gérer immobiliers'; ?>
<?php $page = 1; ?>
<!-- specific css -->
<?php ob_start(); ?>
<link rel="stylesheet" href="../../public/backend/assets/css/custom.css"/>
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
								<a href="#">Gérer les propriétés</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Liste des propriétés</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Créer nouvelle
										</button>
									</div>
								</div>


								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<form action="" method="post" id="mdForm">
												
												<input id="update_id" name="id"   type="number" hidden >

												<div class="modal-content">
													<div class="modal-header no-bd card-header">
														<h5 class="modal-title">
															<span class="fw-mediumbold">
															Création d'une propriété</span> 
															
														</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
													</div>
													<div class="modal-body form-b">
														<p class="small mdTitle">Remplissez les champs afin de créer une nouvelle propriété</p>
														<!-- Modal content -->
															<div class="row">
																<div class="col-md-12">
                                                                    <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="true">Details du bien</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Images</a>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="tab-content mt-2 mb-3 " id="pills-without-border-tabContent">
                                                                        <div class="tab-pane fade show active form-b"  id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input  id="titre" name="titre"   type="text"  class="form-control input-border-bottom" required max="200">
                                                                                        <label for="titre" class="placeholder">Designation *</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <select class="form-control input-border-bottom" id="type" name="type" required="">
                                                                                            <option value="0" disabled>Selectionnez...</option>
                                                                                        </select>
                                                                                        <label for="type" class="placeholder">Type *</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input  id="codePostal" type="number" name="codePostal"  class="form-control input-border-bottom" required max="99999999">
                                                                                        <label for="titre" class="placeholder">Code postal*</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <select class="form-control input-border-bottom"  id="ville" name="ville" required>
                                                                                            <option value="0" disabled>Selectionnez...</option>
                                                                                        </select>
                                                                                        <label for="ville" class="placeholder">Type *</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input  id="chambre" type="number" name="chambre"  class="form-control input-border-bottom" required max="50">
                                                                                        <label for="chambre" class="placeholder">Chambre à coucher *</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input id="douche" type="number" name="douche"  class="form-control input-border-bottom" required max="20" min="0">
                                                                                        <label for="douche" class="placeholder">Douche *</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input id="dimension" type="number" name="dimension" class="form-control input-border-bottom" required max="9999999" min="0">
                                                                                        <label for="chambre" class="placeholder">Dimension (m<sup>2</sup>)*</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input id="garage" type="number" name="garage" class="form-control input-border-bottom" required max="50" min="0">
                                                                                        <label for="garage" class="placeholder">Garage</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="row item-center" style="display: block; margin-left: auto; margin-right: auto; width: 60%;">
                                                                                        <div class="checkbox" style="display: inline-block; padding: 1rem 1rem; vertical-align: middle;"><label class="unselectable"><input id="estEnVente" type="checkbox" onclick="priceInput()" > A vendre</label></div>
                                                                                        <div class="checkbox" style="display: inline-block; padding: 1rem 1rem; vertical-align: middle;"><label class="unselectable"><input id="estEnLocation" type="checkbox" onclick="priceInput()"> A louer</label></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6" id="venteParent">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input id="prixVente" type="number" name="prixVente" class="form-control input-border-bottom" required max="99999999" min="0">
                                                                                        <label for="prixVente" class="placeholder">Prix de vente (€)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6" id="locationParent">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input id="prixLocation" type="number"  name="prixLocation" class="form-control input-border-bottom" required max="99999999" min="0">
                                                                                        <label for="prixVente" class="placeholder">Prix de location (€)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Description</label>
                                                                                        <textarea name="description" class="form-control" placeholder="Décrivez votre bien..."></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
                                                                            <div class="col-md-12">
                                                                            <div class="table-repsonsive">
                                                                                <span id="error"></span>
                                                                                <table class="table table-bordered" id="item_table">
                                                                                    <tr>
                                                                                        <th>Joindre un document</th>
                                                                                        <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="fa fa-plus"></span></button></th>
                                                                                    </tr>


                                                                                </table>
                                                                            
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
														        </div>
															</div>
                
														<!-- End Modal content -->
													</div>
													<div class="modal-footer no-bd">
														<button type="button" id="addRowButton" class="btn btn-primary">Ajouter Images</button>
														<button type="button" class="btn btn-danger" data-dismiss="modal">Quitter</button>
                                                        <button type="submit" id="addRowButton" class="btn btn-success">Enregistrer</button>
													</div>
												</div>
											</form>

                                            
										</div>
									</div>
									
									<!-- <div class="table-responsive">
										<table id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4" > -->
                                        <div class="table-responsive">
	<table id="add-row" class="display table table-striped table-hover" cellspacing="0" width="100%">
											<thead class="">
                                                <tr>
                                                    <th rowspan="1" colspan="1">N°</th>
                                                    <th rowspan="1" colspan="1">Désignation</th>
                                                    <th rowspan="1" colspan="1">Adresse</th>
                                                    <th rowspan="1" colspan="1">Vente/Location</th>
                                                    <th rowspan="1" colspan="1">Prix Vente (€)</th>
                                                    <th rowspan="1" colspan="1">Prix Location (€)</th>
                                                    <th rowspan="1" colspan="1">Statut</th>
                                                    <th rowspan="1" colspan="1">Description</th>
                                                    <th rowspan="1" colspan="1" class="sorting_asc" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 189.188px;">Créer le</th>
                                                    <th rowspan="1" colspan="1">Action</th>
                                                </tr>
											</thead>
											<tfoot>
												<tr>
                                                    <th rowspan="1" colspan="1">N°</th>
                                                    <th rowspan="1" colspan="1">Désignation</th>
                                                    <th rowspan="1" colspan="1">Adresse</th>
                                                    <th rowspan="1" colspan="1">Vente/Location</th>
                                                    <th rowspan="1" colspan="1">Prix Vente (€)</th>
                                                    <th rowspan="1" colspan="1">Prix Location (€)</th>
                                                    <th rowspan="1" colspan="1">Statut</th>
                                                    <th rowspan="1" colspan="1">Description</th>
                                                    <th rowspan="1" colspan="1" class="sorting_asc" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 189.188px;">Créer le</th>
                                                    <th rowspan="1" colspan="1">Action</th>
                                                </tr>
											</tfoot>
											<tbody>
                                                <tr>
                                                    <td rowspan="1" colspan="1">N°</td>
                                                    <td rowspan="1" colspan="1">Appartement avec vue sur la mer</td>
                                                    <td rowspan="1" colspan="1">00748/Rennes</td>
                                                    <td rowspan="1" colspan="1">Location</td>
                                                    <td rowspan="1" colspan="1"></td>
                                                    <td rowspan="1" colspan="1">2500</td>
                                                    <td rowspan="1" colspan="1" ><span class="badge badge-success">Disponible</span></td>
                                                    <td rowspan="1" colspan="1">Jolie Appartement à louer</td>
                                                    <td rowspan="1" colspan="1" style="width: 189.188px;">30/12/2021</td>
                                                    <td rowspan="1" colspan="1">
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="modal" data-target="#addRowModal"  onclick="edit({{$vendeur}})" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editer ce vendeur">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Bannir ce vendeur">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>		
                                                <tr>
                                                    <td rowspan="1" colspan="1">N°</td>
                                                    <td rowspan="1" colspan="1">Appartement avec vue sur la mer</td>
                                                    <td rowspan="1" colspan="1">00748/Rennes</td>
                                                    <td rowspan="1" colspan="1">Location</td>
                                                    <td rowspan="1" colspan="1"></td>
                                                    <td rowspan="1" colspan="1">2500</td>
                                                    <td rowspan="1" colspan="1" ><span class="badge badge-success">Disponible</span></td>
                                                    <td rowspan="1" colspan="1">Jolie Appartement à louer</td>
                                                    <td rowspan="1" colspan="1" style="width: 189.188px;">30/12/2021</td>
                                                    <td rowspan="1" colspan="1">
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="modal" data-target="#addRowModal"  onclick="edit({{$vendeur}})" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editer ce vendeur">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Bannir ce vendeur">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>		
                                                <tr>
                                                    <td rowspan="1" colspan="1">N°</td>
                                                    <td rowspan="1" colspan="1">Appartement avec vue sur la mer</td>
                                                    <td rowspan="1" colspan="1">00748/Rennes</td>
                                                    <td rowspan="1" colspan="1">Location</td>
                                                    <td rowspan="1" colspan="1"></td>
                                                    <td rowspan="1" colspan="1">2500</td>
                                                    <td rowspan="1" colspan="1" ><span class="badge badge-success">Disponible</span></td>
                                                    <td rowspan="1" colspan="1">Jolie Appartement à louer</td>
                                                    <td rowspan="1" colspan="1" style="width: 189.188px;">30/12/2021</td>
                                                    <td rowspan="1" colspan="1">
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="modal" data-target="#addRowModal"  onclick="edit({{$vendeur}})" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editer ce vendeur">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Bannir ce vendeur">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
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
<?php $content = ob_get_clean(); ?>

<!-- Js -->
<?php ob_start(); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script type="text/javascript">
    function priceInput() {
        let estEnVente =  document.getElementById("estEnVente");
        let estEnLocation = document.getElementById("estEnLocation"); 
        let priceClass = false;
        if(estEnVente.checked == true){
            document.getElementById("venteParent").style.display = "block";
            priceClass = true;
        }
        else{
            document.getElementById("venteParent").style.display = "none";
            priceClass -= 6;
        }

        if(estEnLocation.checked == true){
            document.getElementById("locationParent").style.display = "block";
           if(priceClass==true){
                document.getElementById('locationParent').className = 'col-md-6';
                document.getElementById('venteParent').className = 'col-md-6';
           }else{
                document.getElementById('locationParent').className = 'col-md-12';
                document.getElementById('venteParent').className = 'col-md-12';
           }
        }
        else{
            document.getElementById("locationParent").style.display = "none";
            if(priceClass==true){
                document.getElementById('locationParent').className = 'col-md-12';
                document.getElementById('venteParent').className = 'col-md-12';
           }else{
                document.getElementById('locationParent').className = 'col-md-6';
                document.getElementById('venteParent').className = 'col-md-6';
           }
        }

      
    }


//For datatable
    // Add Row
    $('#add-row').DataTable({
	"pageLength": 5,
});

/*var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

$('#addRowButton').click(function() {
	$('#add-row').dataTable().fnAddData([
		$("#addName").val(),
		$("#addPosition").val(),
		$("#addOffice").val(),
		action
		]);
	$('#addRowModal').modal('hide');

});*/
</script>
<?php $js = ob_get_clean(); ?>
<!-- Loading of our website frontend template -->
<?php require('backTemplate.php'); ?>

<script>
$(document).ready(function(){
 $(document).on('click', '.add', function(){
        
  
  var html = '';
  html += '<tr>';
  html += '<td><input type="file" id="file_document[]" name="file_document[]" class="form-control design file_document" /></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.type_document').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Type Document at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  
  $('.file_document').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Upload Doc "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>

 