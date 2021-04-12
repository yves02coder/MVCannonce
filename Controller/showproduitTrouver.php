<?php
require_once "../asset/template.php";
require_once "../Model/SearchProduit.php";
    function FoundProduit()
    {

    $recherche = new SearchProduit();
    $found=$recherche->FoundProduit();
        if($found){
            require_once "../View/recherche.php";
        }else{
            echo "<p class='alert-warning text-center p-2 mt-2'><b>Pas d'annonce pour cette region et cette catégorie</b></p>";
        }




}

