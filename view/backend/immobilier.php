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
								<a href="#">Créer une propriétée</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Creer une propriété</h4>
									</div>
								</div>
								<div class="card-body">
									<form action="index.php?action=insertImmo" method="post" enctype="multipart/form">
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
                                                                                            <option value="1" >Maison</option>
                                                                                            <option value="2" >Appartement</option>
                                                                                            <option value="3" >Studio</option>
                                                                                        </select>
                                                                                        <label for="type" class="placeholder">Type *</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input  id="codePostal" type="number" name="codePostal"  class="form-control input-border-bottom" required min="0" max="99999999">
                                                                                        <label for="titre" class="placeholder">Code postal*</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                    <input  id="ville" type="text" name="ville"  class="form-control input-border-bottom" required >

                                                                                        <label for="ville" class="placeholder">Ville *</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input  id="chambre" type="number" name="chambre"  class="form-control input-border-bottom" required max="50" min="0" >
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
                                                                                        <div class="checkbox" style="display: inline-block; padding: 1rem 1rem; vertical-align: middle;"><label class="unselectable"><input id="estEnVente" type="checkbox" name="estEnVente" onclick="priceInput()" > A vendre</label></div>
                                                                                        <div class="checkbox" style="display: inline-block; padding: 1rem 1rem; vertical-align: middle;"><label class="unselectable"><input id="estEnLocation" type="checkbox" name="estEnLocation" onclick="priceInput()"> A louer</label></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6" id="venteParent" style="display:none">
                                                                                    <div class="form-group form-floating-label">
                                                                                        <input id="prixVente" type="number" name="prixVente" class="form-control input-border-bottom" required max="99999999" min="0">
                                                                                        <label for="prixVente" class="placeholder">Prix de vente (€)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6" id="locationParent" style="display:none">
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
                                                            <div class="row mt-5">
                                                                <div class="col-md-4 ">
                                                                    <button type="button" id="addRowButton" class="btn btn-gray">Retour</button>
                                                                </div>
                                                                
                                                                <div class="col-md-4 offset-md-4" >
                                                                    <button type="submit" id="addRowButton" class="btn btn-pnud" style="display: inline-block;  vertical-align: middle; ">Enregistrer</button>
                                                                </div>
                                                            </div>
														<!-- End Modal content --> 
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

 