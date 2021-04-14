<?php
require_once "../asset/template.php";
require_once "../Model/SearchCategorie.php";


function FoundCategorie()
{



    $found = new SearchCategorie();
    $found=$found->Foundproduit();
    if( isset($found)){
      require_once "../View/rechercheCatReg.php";
    }else{
        echo "<p class='alert-warning text-center p-2 mt-2'><b>Pas d'annonce pour cette region et cette catégorie</b></p>";
    }




}
