<?php

require_once "database.php";
class AllVendeur extends Database
{
    private $id_vendeur;
    private $email_vendeur;
    private $password_vendeur;




    public function getAllVendeur()
    {
        $db=$this->getPDO();

        $sql="SELECT * FROM `vendeur_produit`";
        $stmt=$db->query($sql);
        return $stmt;

    }

}