<?php
require_once "database.php";

class AdministrationFunction extends Database
{
//Afficher tous les valeurs de la tablea administration

    public function  afficherTableAdmin(){
        $db = $this->getPDO();

        $sql = "SELECT * FROM administrateur";
        $datas = $db->query($sql);
        return $datas;
    }
}