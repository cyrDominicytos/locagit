<?php
require('controller/frontend.php');
require('controller/backend.php');

if (isset($_GET['action'])) {

    //fontend links
    if ($_GET['action'] == 'frontend_index') {
        index();
    }
    elseif ($_GET['action'] == 'about') {
        about();
    }
    elseif ($_GET['action'] == 'property-grid') {
        property_grid();
    }
    elseif ($_GET['action'] == 'agents-grid') {
        agents_grid();
    }
    elseif ($_GET['action'] == 'contact') {
        contact();
    }elseif ($_GET['action'] == 'conditions') {
        conditions();
    }
    elseif ($_GET['action'] == 'politique') {
        politique();
    }
     //backend links
    elseif ($_GET['action'] == 'dashboard') {
        dashboard();
    }
    elseif ($_GET['action'] == 'immobiliers') {
        immobiliers();
    }
    elseif ($_GET['action'] == 'personnes') {
        personnes();
    }
    elseif ($_GET['action'] == 'personne_liste') {
        personne_liste();
    }
    elseif ($_GET['action'] == 'typeBien') {
        typeBien();
    }
    elseif ($_GET['action'] == 'postes') {
        postes();
    }
    elseif ($_GET['action'] == 'bienImmo') {
        bienImmo();
    }
    


    elseif ($_GET['action'] == 'insertPersonne') {
        insertPersonne();
    }
    elseif ($_GET['action'] == 'insertImmo') {
        insertImmo();
    }
    elseif ($_GET['action'] == 'updateConfig') {
        updateConfig();
    }
    elseif ($_GET['action'] == 'config') {
        config();

        //default redirection
    }else{
        index();
    }
}
else {
    index();
}