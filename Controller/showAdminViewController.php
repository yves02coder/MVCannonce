<?php
require "../Model/AdminViewModel.php";

function getAdminView()
{
    $produit=new AdminViewModel();
    $getproduit= $produit->getAdminView();

    require_once "../View/adminView.php";
    return $getproduit;
}

