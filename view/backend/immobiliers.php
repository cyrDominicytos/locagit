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
													<div class="modal-body">
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
                                                                        <div class="tab-pane fade show active form-bg"  id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
                                                                            <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                    <label>Designation *</label>
                                                                                    <input id="titre" name="titre"   type="text" class="form-control" placeholder="Renseignez la désignation" required max="200" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Type *</label>
                                                                                    <select class="form-control input-fixed" id="type" name="type" required>
                                                                                        <option value="0" disabled>Selectionnez...</option>
                                                                                                                                                                             
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Code postal*</label>
                                                                                    <input id="codePostal" type="number" name="codePostal" class="form-control" placeholder="354856" max="99999999" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Ville*</label>
                                                                                    <select class="form-control input-fixed" id="ville" name="ville" required>
                                                                                            <option value="0" disabled>Selectionnez...</option>                                                                                        
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Chambre à coucher*</label>
                                                                                    <input id="chambre" type="number" name="chambre" class="form-control" placeholder="2" max="50" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Douche*</label>
                                                                                    <input id="douche" type="number" name="douche" class="form-control" placeholder="2" max="20" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Dimension (m<sup>2</sup>)*</label>
                                                                                    <input id="dimension" type="number" name="dimension" class="form-control" placeholder="300" max="9999999" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Garage</label>
                                                                                    <input id="chambre" type="number" name="chambre" class="form-control" placeholder="2" max="50" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="row item-center" style="display: block; margin-left: auto; margin-right: auto; width: 60%;">
                                                                                    <div class="checkbox" style="display: inline-block; padding: 1rem 1rem; vertical-align: middle;"><label class="unselectable"><input id="estEnVente" type="checkbox" > A vendre</label></div>
                                                                                    <div class="checkbox" style="display: inline-block; padding: 1rem 1rem; vertical-align: middle;"><label class="unselectable"><input id="estEnLocation" type="checkbox" checked=""> A louer</label></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Prix de vente (€)*</label>
                                                                                    <input id="prixVente" type="number" name="prixVente" class="form-control" placeholder="35000" min="0" max="99999999" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Prix de location (€)*</label>
                                                                                    <input id="prixLocation" type="number" name="prixLocation" class="form-control" placeholder="400" min="0" max="99999999" >

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
									

									<div class="table-responsive">
										<div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4" ><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="add-row_length"><label>Show <select name="add-row_length" aria-controls="add-row" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="add-row_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="add-row"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="add-row" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">
											<thead class="theader">
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
                                                    <td rowspan="1" colspan="1" ><button class="btn btn-success" disabled="disabled">Disponible</button></td>
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

	

 