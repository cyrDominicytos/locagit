<?php
require('dao/CollaborateurDAO.php');

class CollaborateurManager
{
    private $collaborateur = null;
    public function __construct()
    {
        $this->collaborateur =  new CollaborateurDAO();
    }
    
    public function add($data) 
    {
        $this->collaborateur->add($data);
    }
    public function getAll() 
    {
        return $this->collaborateur->getAll();
    }
   


}