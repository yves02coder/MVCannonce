<?php
require_once "../Model/ProduitByvendeur.php";

function getByvendeur(){
    $byvendeur=new ProduitByvendeur();
    $getvendeur=$byvendeur->getproduitByvendeur();

        require_once "../View/ProduitByVendeur.php";
        return $getvendeur;





}
