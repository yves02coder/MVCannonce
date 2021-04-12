
<?php
//controle toute les vues et les methodes
require "../Model/detail.php";

    function getAllproduitVendeur()
    { $supprimer=new Detail();

        $getsupprimer= $supprimer->getAllproduitVendeur();

        if($getsupprimer){
            //header("Location: accueil");
            require_once "../View/accueil.php";
        }else{
            echo "rien a supprimer";
        }

    }
