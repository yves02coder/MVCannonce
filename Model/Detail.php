<?php
require_once "../asset/template.php";
require_once "../Model/database.php";
class Detail extends Database
{


    public function getAllproduitVendeur()
    {
        $connecter=new PDO("mysql:dbname=crud_mvc;charset=utf8", 'root', '');
        $connecter->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        $sql="DELETE FROM `produits` WHERE id_produit=?";
        $supp=$connecter->prepare($sql);
        $supp->bindParam(1,$_GET['id']);
        //$this->id_produit=$_GET['id'];
        $supp->execute();
        return $supp;

    }


}
