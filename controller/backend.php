<?php

require('model/ProprietaireManager.php');
require('model/CollaborateurManager.php');
require('model/PartenaireManager.php');
require('model/AdministrateurManager.php');
require('model/ParametreManager.php');
require('model/BienImmobilierManager.php');

function dashboard()
{
    require('view/backend/index.php');
}
function immobiliers()
{
    require('view/backend/immobiliers.php');
}

function personnes()
{
    require('view/backend/personnes.php');
}

function bienImmo()
{
    require('view/backend/immobilier.php');
}

function personne_liste()
{
    $propretaire = new ProprietaireManager();
    $personnes = $propretaire->getAll();
    require('view/backend/personneListes.php');
}

function postes()
{
    require('view/backend/postes.php');
}

function typeBien()
{
    require('view/backend/typeBien.php');
}

function config()
{
    $parametres = new ParametreManager();
    require('view/backend/config.php');
}


//insert
function insertPersonne()
{
    if ($_POST) {
        $msg["success"] = "Une nouvelle personne a été créé avec succès !";
        switch ($_POST['type']) {
            case '1':
                $partenaires = new PartenaireManager(); 
                $partenaires->add([
                    "nom"=>$_POST['nom'],
                    "prenom"=>$_POST['prenom'],
                    "email"=>$_POST['email'],
                    "telephone"=>$_POST['telephone'],
                    "adresse"=>"",
                    "imageUrl"=>"",
                    "sexe"=>$_POST['sexe'],
                    "siteUrl"=>$_POST['siteUrl'],
                    "ordreAffichage"=>$_POST['ordreAffichage'],
                    "estActif"=>1
                ]);
                break;
            case '2':
                $collaborateur = new CollaborateurManager(); 
                $collaborateur->add([
                    "nom"=>$_POST['nom'],
                    "prenom"=>$_POST['prenom'],
                    "email"=>$_POST['email'],
                    "telephone"=>$_POST['telephone'],
                    "adresse"=>"",
                    "imageUrl"=>"",
                    "sexe"=>$_POST['sexe'],
                    "id_poste"=>1,
                    "ordreAffichage"=>$_POST['ordreAffichage'],
                    "estActif"=>1
                ]);
                break;
            case '3':
                $propretaire = new ProprietaireManager(); 
                $propretaire->add([
                    "nom"=>$_POST['nom'],
                    "prenom"=>$_POST['prenom'],
                    "email"=>$_POST['email'],
                    "telephone"=>$_POST['telephone'],
                    "adresse"=>"",
                    "imageUrl"=>"",
                    "sexe"=>$_POST['sexe'],
                    "dateContrat"=>$_POST['dateContrat'],
                    "estActif"=>1
                ]);
                break;
            case '4':
                $admin = new AdministrateurManager(); 
                $admin->add([
                    "nom"=>$_POST['nom'],
                    "prenom"=>$_POST['prenom'],
                    "email"=>$_POST['email'],
                    "telephone"=>$_POST['telephone'],
                    "adresse"=>"",
                    "imageUrl"=>"",
                    "sexe"=>$_POST['sexe'],
                    "estActif"=>1
                ]);
                break;
            
            default:
            $msg["error"] = "Erreu, le type de personne choisi est invalid!";
                break;
        }    
        
    header('Location: index.php?action=immobiliers');
    }
}
//insert immobilier
function insertImmo()
{
    if ($_POST) {
        $msg["success"] = "Une nouvelle propriétée a été créé avec succès !";
        
        $bien = new BienImmobilierManager();
        $data = [
            "titre"=>$_POST['titre'],
            "codePostal"=> (int)$_POST['codePostal'],
            "ville"=>$_POST['ville'],
            "enVente"=>0,
            "enLocation"=>0,
            "prixVente"=>0,
            "prixLocation"=>0,
            "description"=>(int)$_POST['description'],
            "superficie"=>(int)$_POST['dimension'],
            "chambre"=>(int)$_POST['chambre'],
            "salle_bain"=>(int)$_POST['douche'],
            "garage"=>(int)$_POST['garage'],
            "id_type"=>(int) 1
        ];

      
        if($_POST['estEnVente']){
            $data['enVente'] = (int) $_POST['estEnVente'];
            $data['prixVente'] =  $_POST['prixVente'];
        }
        if($_POST['estEnVente']){
            $data['enLocation'] = (int) $_POST['estEnLocation'];
            $data['prixLocation'] =  $_POST['prixLocation'];
        }
        $bien->add($data);
        header('Location: index.php?action=immobiliers');
        //return  personne_liste();
    }
}

//update configuration
 function updateConfig(){
    if ($_POST) {
       // var_dump($_POST['adresse']);
        $msg["success"] = "Les paramètres du site sont mises à jour avec succès !";
        $params = new ParametreManager();
        //adresse site 
        $params->update(
        [
        "valeur"=>$_POST['adresse'],
        "id_admin"=>1,
        "code"=>"adresse_site"
        ]);

        //Nom site
        $params->update(
        [
        "valeur"=>$_POST['nom'],
        "id_admin"=>1,
        "code"=>"nom_site"
        ]);

        //Email site
        $params->update(
        [
        "valeur"=>$_POST['email'],
        "id_admin"=>1,
        "code"=>"email_site"
        ]);

        //Phone site
        $params->update(
        [
        "valeur"=>$_POST['telephone'],
        "id_admin"=>1,
        "code"=>"phone_site"
        ]);

        //facebook site
        $params->update(
        [
        "valeur"=>$_POST['facebook'],
        "id_admin"=>1,
        "code"=>"facebook"
        ]);

        //instagram site
        $params->update(
        [
        "valeur"=>$_POST['instagram'],
        "id_admin"=>1,
        "code"=>"instagram"
        ]);

        //twitter site
        $params->update(
        [
        "valeur"=>$_POST['twitter'],
        "id_admin"=>1,
        "code"=>"twitter"
        ]);
        //linkedin site
        $params->update(
        [
        "valeur"=>$_POST['linkedin'],
        "id_admin"=>1,
        "code"=>"linkedin"
        ]);

    }else{
        $msg["error"] = "Erreur, accès non autorisé";
    }
    header('Location: index.php?action=config');
}