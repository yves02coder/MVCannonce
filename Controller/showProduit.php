<?php
//controle toute les vues et les methodes
require "../Model/produit.php";

    function getAllproduit()
    {
        $produit=new Produit();
        $getproduit= $produit->getAllproduit();

        require_once "../View/accueil.php";
        return $getproduit;
    }

