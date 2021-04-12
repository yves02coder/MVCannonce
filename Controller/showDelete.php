<?php

require_once "../Model/Delete.php";

 function getProduitDelete(){

    $supprimer=new Delete();

    $getsupprimer= $supprimer->getDelete();

     if($getsupprimer){
         //header("Location: accueil");
         require_once "../View/accueil.php";
     }else{
         echo "rien a supprimer";
     }

}