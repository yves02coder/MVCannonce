<?php
require_once "../Model/DeleteAdmin.php";

function getAdminDelete(){

    $supprimer=new DeleteAdmin();

    $getsupprimer= $supprimer->getAdminDelete();

    if($getsupprimer){
        //header("Location: accueil");
        require_once "../View/adminView.php";
    }else{
        echo "rien a supprimer";
    }

}
