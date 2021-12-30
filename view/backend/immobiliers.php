<?php $title = 'Locagite - Admin, Gérer immobiliers'; ?>
<?php $page = 1; ?>
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
												@csrf
												<input id="update_id" name="id"   type="number" hidden >

												<div class="modal-content">
													<div class="modal-header no-bd">
														<h5 class="modal-title">
															<span class="fw-mediumbold">
															Création d'un Vendeur</span> 
															
														</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
													</div>
													<div class="modal-body">
														<p class="small mdTitle">Remplissez les champs afin de créer un nouveau vendeur</p>
														
															<div class="row">
																<div class="col-sm-6">
																	<div class="form-group ">
																		<label>Nom *</label>
																		<input id="firstname" name="firstname"   type="text" class="form-control" placeholder="Renseignez le nom" required max="20" >
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<label>Prénom *</label>
																		<input id="lastname" name="lastname"   type="text" class="form-control" placeholder="Renseignez le prénom" required max="255" >
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label>Tel</label>
																		<input id="tel" type="tel" name="phoneNumber" class="form-control" placeholder="66666666" max="20" >
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label>Email</label>
																		<input id="email" type="email" name="email" class="form-control" placeholder="exemple@gmail.com" max="50" >
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group">
																		<label>Adresse</label>
																		<input id="address" type="text"  name="address" class="form-control" placeholder="Midombo-Akpakpa" max="50" >
																	</div>
																</div>
															</div>
														
													</div>
													<div class="modal-footer no-bd">
														<button type="submit" id="addRowButton" class="btn btn-primary">Ajouter</button>
														<button type="button" class="btn btn-danger" data-dismiss="modal">Quitter</button>
													</div>
												</div>
											</form>
										</div>
									</div>

									<div class="table-responsive">
										<div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="add-row_length"><label>Show <select name="add-row_length" aria-controls="add-row" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="add-row_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="add-row"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="add-row" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">
											<thead>
                                            <tr>
                                                    <th rowspan="1" colspan="1">N°</th>
                                                    <th rowspan="1" colspan="1">Nom et Prénoms</th>
                                                    <th rowspan="1" colspan="1">Téléphone</th>
                                                    <th rowspan="1" colspan="1">Email</th>
                                                    <th rowspan="1" colspan="1" class="sorting_asc" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 189.188px;">Créer le</th>
                                                    <th rowspan="1" colspan="1">Action</th>
                                                </tr>
											</thead>
											<tfoot>
												<tr>
                                                    <th rowspan="1" colspan="1">N°</th>
                                                    <th rowspan="1" colspan="1">Nom et Prénoms</th>
                                                    <th rowspan="1" colspan="1">Téléphone</th>
                                                    <th rowspan="1" colspan="1">Email</th>
                                                    <th rowspan="1" colspan="1">Créer le</th>
                                                    <th rowspan="1" colspan="1">Action</th>
                                                </tr>
											</tfoot>
											<tbody>
															
                                            </tbody>
									</table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="add-row_info" role="status" aria-live="polite">Affichage de 1 à 5 sur 10 Entrée(s)</div>
                                    </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="add-row_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="add-row_previous"><a href="#" aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="add-row" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="add-row" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="add-row_next"><a href="#" aria-controls="add-row" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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
  

 