<?php
require_once "../Model/AdministrationFunction.php";

function afficherTableAdmin(){
    $admin = new AdministrationFunction();
    $tableAdmin = $admin->afficherTableAdmin();
    return $tableAdmin;

}
