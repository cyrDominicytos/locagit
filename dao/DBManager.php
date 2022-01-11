<?php

class DBManager 
{
    
    protected function dbConnect()
    {
       // try {
            $db = new PDO('mysql:host=localhost;dbname=locagite;charset=utf8', 'root', '');
            return $db;
       /* } catch (\Throwable $th) {
            //throw $th;
        }*/
       
    }
}