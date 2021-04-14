<?php

require_once "database.php";
class Categorie extends Database
{


    public function getProduitByCategorie(){
        //$categorie_recherche=$_GET['categorie_recherche'];
$connecter=new PDO("mysql:dbname=crud_mvc;charset=utf8", 'root', '');
        $connecter->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //Requète SQL + jointure
        $sql="SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur WHERE id_vendeur=?";
        //Recup de id utilisateur
        $this->id_vendeur = $_SESSION['id_vendeur'];
        //Requète préparée
        $request = $connecter->prepare($sql);
        //Lié les paramètres
        $request->bindParam(1, $this->id_vendeur);

        //Execution de la requète
        $request->execute();
        //Retourne un objet de resultats


        return $request->fetchAll(PDO::FETCH_ASSOC);

        $categorie->execute();
return $categorie->fetchAll(PDO::FETCH_ASSOC);



    }

    public function getAllCategorie()
    {
        $connecter=new PDO("mysql:dbname=crud_mvc;charset=utf8", 'root', '');
        $connecter->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //Requète SQL + jointure
        $sql="SELECT DISTINCT  categorie_produit,`nom_produit`,id_produit,nom_vendeur,image_produit FROM produits  INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur  ";
        //Recup de id utilisateur
        $this->id_vendeur = $_SESSION['id_vendeur'];
        //Requète préparée
        $request = $connecter->prepare($sql);
        //Lié les paramètres
        //$request->bindParam(1, $this->id_vendeur);

        //Execution de la requète
        $request->execute();
        //Retourne un objet de resultats


        return $request->fetchAll(PDO::FETCH_ASSOC);

        $categorie->execute();
 return $categorie->fetchAll(PDO::FETCH_ASSOC);



    }


}