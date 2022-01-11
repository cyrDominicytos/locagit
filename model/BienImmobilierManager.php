<?php
require('dao/BienImmobilierDAO.php');
class BienImmobilierManager
{
    private $proprietaire = null;
    public function __construct()
    {
        $this->bien =  new BienImmobilierDAO();
    }
    
    public function add($data) 
    {
        $this->bien->add($data);
    }
    public function getAll() 
    {
        return $this->bien->getAll();
    }

}