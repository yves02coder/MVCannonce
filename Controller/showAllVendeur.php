<?php
require "../Model/AllVendeur.php";

function getAllVendeur()
{
    $vendeur=new AllVendeur();
    $getvendeur= $vendeur->getAllVendeur();

    require_once "../View/Allvendeur.php";
    return $getvendeur;
}