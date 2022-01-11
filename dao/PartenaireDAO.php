<?php
require_once('DBManager.php');

class PartenaireDAO  extends DBManager
{
    
   
    public function add($data) 
    {
       
        $db = $this->dbConnect();
        $query = "INSERT INTO partenaires (nom,prenom,email,telephone,adresse,imageUrl,sexe,estActif,siteUrl, ordreAffichage) VALUES(?,?,?,?,?,?,?,?,?,?)"; 
        $req = $db->prepare($query);
        return  $req->execute(array($data["nom"], $data["prenom"],$data["email"],$data["telephone"],$data["adresse"],$data["imageUrl"],$data["sexe"],$data["estActif"],$data["siteUrl"],$data["ordreAffichage"]));
      
    }
    public function getAll() 
    {
        $db = $this->dbConnect();
        $result =  $db->query('SELECT id,nom,prenom,email,telephone,adresse,imageUrl,sexe,estActif,siteUrl, ordreAffichage, DATE_FORMAT(dateAjout, \'%d/%m/%Y à %Hh%imin%ss\') AS dateAjout FROM partenaires ORDER BY dateAjout DESC');
        return $result;
    }

}
