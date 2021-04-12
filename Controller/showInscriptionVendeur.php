<?php
require_once "../Model/NewVendeur.php";

function getInscription()
{

    $inscription=new NewVendeur();
    $getNew= $inscription->getRegisterVendeur();

    return $getNew;

}
