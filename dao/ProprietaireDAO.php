<?php
require_once('DBManager.php');

class ProprietaireDAO  extends DBManager
{
    
   
    public function add($data) 
    {
       
        $db = $this->dbConnect();
        $query = "INSERT INTO proprietaires (nom,prenom,email,telephone,adresse,imageUrl,sexe,estActif,dateContrat) VALUES(?,?,?,?,?,?,?,?,?)"; 
        $req = $db->prepare($query);
        return  $req->execute(array($data["nom"], $data["prenom"],$data["email"],$data["telephone"],$data["adresse"],$data["imageUrl"],$data["sexe"],$data["estActif"],$data["dateContrat"]));
      
    }
    public function getAll() 
    {
        $db = $this->dbConnect();
        $result =  $db->query('SELECT id,nom,prenom,email,telephone,adresse,imageUrl,sexe,estActif,dateContrat, DATE_FORMAT(dateAjout, \'%d/%m/%Y à %Hh%imin%ss\') AS dateAjout FROM proprietaires ORDER BY dateAjout DESC');
        return $result;
    }

}
