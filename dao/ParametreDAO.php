<?php
require_once('DBManager.php');

class ParametreDAO  extends DBManager
{
    
   
    public function add($data) 
    {
       
        $db = $this->dbConnect();
        $query = "INSERT INTO parametres (intitule,description,valeur,code,id_admin) VALUES(?,?,?,?,?)"; 
        $req = $db->prepare($query);
       // var_dump($req);
        return  $req->execute(array($data["intitule"], $data["description"],$data["valeur"],$data["id_admin"]));
      
    }
    public function update($data) 
    {
       
        $db = $this->dbConnect();
        $query = "UPDATE  parametres SET valeur=?,id_admin=? WHERE code=?"; 
        $req = $db->prepare($query);
       // var_dump($req);
        return  $req->execute(array($data["valeur"],$data["id_admin"],$data["code"]));
      
    }
    public function getAll() 
    {
        $db = $this->dbConnect();
        $result =  $db->query('SELECT id,intitule,description,valeur,code,id_admin, DATE_FORMAT(dateAjout, \'%d/%m/%Y à %Hh%imin%ss\') AS dateAjout FROM parametres ORDER BY dateAjout DESC');
        return $result;
    }
    public function getParams($code) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,intitule,description,valeur,code,id_admin, DATE_FORMAT(dateAjout, \'%d/%m/%Y à %Hh%imin%ss\') AS dateAjout FROM parametres WHERE code =? ');
        $req->execute(array($code));
        $param = $req->fetch();
        return $param;
    }

}
