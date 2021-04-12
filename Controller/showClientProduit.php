<?php
require "../Model/produitClient.php";

function getAllproduitClient()
{
    $produit=new ProduitClient();
    $getproduit= $produit->getAllproduitClient();

    require_once "../View/clientProduit.php";
    return $getproduit;
}
