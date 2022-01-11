<?php
require_once('DBManager.php');

class CollaborateurDAO  extends DBManager
{
    
   
    public function add($data) 
    {
       
        $db = $this->dbConnect();
        $query = "INSERT INTO collaborateurs (nom,prenom,email,telephone,adresse,imageUrl,sexe,estActif,id_poste, ordreAffichage) VALUES(?,?,?,?,?,?,?,?,?,?)"; 
        $req = $db->prepare($query);
        return  $req->execute(array($data["nom"], $data["prenom"],$data["email"],$data["telephone"],$data["adresse"],$data["imageUrl"],$data["sexe"],$data["estActif"],$data["id_poste"],$data["ordreAffichage"]));
      
    }
    public function getAll() 
    {
        $db = $this->dbConnect();
        $result =  $db->query('SELECT id,nom,prenom,email,telephone,adresse,imageUrl,sexe,estActif,id_poste, ordreAffichage, DATE_FORMAT(dateAjout, \'%d/%m/%Y à %Hh%imin%ss\') AS dateAjout FROM collaborateurs ORDER BY dateAjout DESC');
        return $result;
    }

}
