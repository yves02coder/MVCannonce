<?php
require_once "../Model/database.php";
require_once "../asset/template.php";


class Delete extends Database
{

    private $id_produit;

    public function getDelete(){
        $db=$this->getPDO();

        $sql="DELETE FROM `produits` WHERE id_produit=?";
        $supp=$db->prepare($sql);
        $this->id_produit = $_GET['id_supp'];
        $supp->bindParam(1,$this->id_produit);
       //$this->id_produit=$_GET['id'];
        $delete=$supp->execute();
        return $delete;
    }

}