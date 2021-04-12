<?php
require_once "database.php";

class Update extends Database
{


    public function getUpdate($nom_produit,$image_produit,$description_produit,$prix_produit,$categorie_produit,$id_produit_region,$id)
    {
        // if server request method = post
        $db=$this->getPDO();
        $sql="UPDATE produits SET nom_produit = ?,image_produit=?,description_produit=?,prix_produit=?,categorie_produit=?,id_produit_region=? WHERE id_produit=?";
        $sql=$db->prepare($sql);
        $nom_produit=$_POST['nom_produit'];
        $description_produit=$_POST['description_produit'];
        $prix_produit=$_POST['prix_produit'];
        $image_produit=$_POST['image_produit'];
        $categorie_produit=$_POST['categorie_produit'];
        $id_produit_region=$_POST['id_produit_region'];


       $id=$_GET['id'];

       $sql->bindParam(1, $nom_produit);
        $sql->bindParam(2, $image_produit);
        $sql->bindParam(3, $description_produit);
        $sql->bindParam(4, $prix_produit);
        $sql->bindParam(5, $categorie_produit);
        $sql->bindParam(6,$id_produit_region);
        $sql->bindParam(7,$id);
        $update=$sql->execute();
        return  $update;




    }


}
