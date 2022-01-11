 <!-- Sidebar -->
 <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="public/backend/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
									Carole AGUEDEGAN
									<span class="user-level">Administrateur</span>
                                <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">Mon Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Editer Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="index.php?action=dashboard">
                                <i class="fas fa-home"></i>
                                <p>Tableau de bord</p>
                               
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                            <h4 class="text-section">Fonctionnalités</h4>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=immobiliers" >
                                <i class="fas fa-layer-group"></i>
                                <p>Gérer les propriétés</p>
                                <span class="badge badge-success">0</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=typeBien">
                                <i class="fas fa-th-list"></i>
                                <p>Gérer les types de bien</p>
                                <span class="badge badge-success">0</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=postes">
                                <i class="fas fa-th-list"></i>
                                <p>Gérer les postes</p>
                                <span class="badge badge-success">0</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=personne_liste">
                                <i class="fas fa-pen-square"></i>
                                <p>Gérer les personnes</p>
                                <span class="badge badge-success">0</span>
                            </a>
                        </li>             
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#submenu">
                                <i class="fas fa-bars"></i>
                                <p>Paramétrer le système</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="submenu">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="index.php?action=config">
                                            <span class="sub-item">Informations de l'agence</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->