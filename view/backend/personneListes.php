<?php $title = 'Locagite - Admin, Gérer immobiliers'; ?>
<?php $page = 1; ?>
<!-- specific css -->
<?php ob_start(); ?>
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
									<!-- Button -->
					<div class="d-flex">
						<button class="btn btn-primary btn-round ml-auto mb-3" onclick="document.location='personnes.php'" >
							<i class="fa fa-plus"></i>
							Créer nouveau

						</button>
					</div>
					
					<!-- Table -->
					<div class="table-responsive">
						<table id="add-row" class="display table table-striped table-hover" cellspacing="0" width="100%">
							<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 69px;">Désignation</th>
									<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 65px;">Description</th>
									<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 59px;">Créé le</th>
									<th width="10%" class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 127px;">Actions</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th rowspan="1" colspan="1">Désignation</th>
									<th rowspan="1" colspan="1">Description</th>
									<th rowspan="1" colspan="1">Créé le</th>
									<th rowspan="1" colspan="1">Actions</th>
								</tr>
							</tfoot>
							<tbody>
								<tr role="row" class="odd">
									<td class="sorting_1">Maison</td>
									<td>Maison à louer ou à vendre</td>
									<td>10/01/2020</td>
									<td>
										<div class="form-button-action">
											<button type="button" data-toggle="modal" data-target="#addRowModal" onclick="edit(1)" title="" class="btn btn-link btn-simple-primary btn-lg" data-original-title="Edit Task">
												<i class="fa fa-edit"></i>
											</button>
											<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-danger" data-original-title="Remove">
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
<script type="text/javascript">
    //For datatable
    // Add Row
$('#add-row').DataTable({
	"pageLength": 5,
});


function edit(id) {
	var row = document.getElementById("add-row").rows[id];
    document.getElementById("intitule").value = row.cells[0].innerHTML;
    document.getElementById("description").value = row.cells[1].innerHTML;
}
</script>
<?php $js = ob_get_clean(); ?>
<!-- Loading of our website frontend template -->
<?php require('backTemplate.php'); ?>

	

 