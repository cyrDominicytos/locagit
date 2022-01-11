<?php
require('dao/AdministrateurDAO.php');
class AdministrateurManager
{
    
    private $admin = null;
    public function __construct()
    {
        $this->admin =  new AdministrateurDAO();
    }
    
    public function add($data) 
    {
        $this->admin->add($data);
    }
    public function getAll() 
    {
        return $this->admin->getAll();
    }


}