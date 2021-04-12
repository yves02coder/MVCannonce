<?php
class Database
{
    private $host="localhost";
    private $dname="crud_mvc";
    private $user="root";
    private $pass="";


    public function getPDO()
    {
        try {
            $db=new PDO("mysql:host=".$this->host.";dbname=".$this->dname.";charset=utf8", $this->user, $this->pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
        }catch (PDOException $exception){
            echo "Erreur de connexion :" .$exception->getMessage();
            die();
        }
    }

}