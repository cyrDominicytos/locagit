<?php
require_once('DBManager.php');

class BienImmobilierDAO  extends DBManager
{
    
   
    public function add($data) 
    {
       try {
            $db = $this->dbConnect();
            $query = "INSERT INTO biensimmobiliers (titre,codePostal,ville,enVente,enLocation,prixVente,prixLocation,description,superficie,chambre,salle_bain,garage,id_type) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)"; 
            $req = $db->prepare($query);
            $result =   $req->execute(array($data["titre"], $data["codePostal"],$data["ville"],$data["enVente"],$data["enLocation"],$data["prixVente"],$data["prixLocation"],$data["description"],$data["superficie"],$data["chambre"],$data["salle_bain"],$data["garage"],$data["id_type"]));
            var_dump($result);
            return $result;
       } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
       }
       
        }
    public function getAll() 
    {
        $db = $this->dbConnect();
        $result =  $db->query('SELECT id,titre,codePostal,ville,enVente,enLocation,prixVente,prixLocation,description,superficie,chambre,salle_bain,garage,id_type, DATE_FORMAT(dateAjout, \'%d/%m/%Y à %Hh%imin%ss\') AS dateAjout FROM biensimmobiliers ORDER BY dateAjout DESC');
        return $result;
    }

}
