<?php
require('dao/ParametreDAO.php');

class ParametreManager
{
    
   
    private $para = null;
    public function __construct()
    {
        $this->para =  new ParametreDAO();
    }
    
    public function add($data) 
    {
       return $this->para->add($data);
    }
    public function update($data) 
    {
        return $this->para->update($data);
    }
    //get params by code
    public function getParams($code)  
    {
       return $this->para->getParams($code) ;
    }
    public function getAll() 
    {
        return $this->para->getAll();
    }

}