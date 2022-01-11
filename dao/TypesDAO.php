<?php
require_once('DBManager.php');
require_once('model/TypeManager.php');

class TypeDAO  extends DBManager
{
    

    public function add(TypeManager $type) 
    {
       
        $db = $this->dbConnect();
        $query = "INSERT INTO type (intitule, description) VALUES(?,?)"; 
        $req = $db->prepare($query);
        return  $req->execute(array($type->intitule, $type->description));
      
    }
    public function getAll() 
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, intitule, description, DATE_FORMAT(dateAjout, \'%d/%m/%Y à %Hh%imin%ss\') AS dateAjout FROM types ORDER BY dateAjout DESC');
        var_dump( $req);
        return $req;
      
    }

}
