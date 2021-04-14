<?php
require_once "../Model/categorie.php";

function getProduitByCategorie()
{
    $categorie=new Categorie();
    $getcategorie=$categorie->getProduitByCategorie();
   // require_once "../View/categorie.php";

    return $getcategorie;

}

function getProduitCategorie()
{
    $categorie=new Categorie();
    $getcategorie=$categorie->getAllCategorie();
    // require_once "../View/categorie.php";

    return $getcategorie;

}