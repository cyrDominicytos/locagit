<?php
require('dao/PartenaireDAO.php');

class PartenaireManager
{
    private $partenaire = null;
    public function __construct()
    {
        $this->partenaire =  new PartenaireDAO();
    }
    
    public function add($data) 
    {
        $this->partenaire->add($data);
    }
    public function getAll() 
    {
        return $this->partenaire->getAll();
    }
   


}