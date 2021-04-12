<?php
require_once "../Model/acheterClient.php";

function getProduitAchat(){

    $achat=new acheterClient();

    $getachat= $achat->getAcheter();

    if($getachat){

        require_once "../View/acheter.php";
    }else{
        echo "rien a ete payé";
    }
return $getachat;
}
