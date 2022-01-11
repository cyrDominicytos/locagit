<?php
require('dao/ProprietaireDAO.php');

class ProprietaireManager 
{
    private $proprietaire = null;
    public function __construct()
    {
        $this->proprietaire =  new ProprietaireDAO();
    }
    
    public function add($data) 
    {
        $this->proprietaire->add($data);
    }
    public function getAll() 
    {
        return $this->proprietaire->getAll();
    }

}