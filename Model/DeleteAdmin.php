<?php
require_once "database.php";

class DeleteAdmin extends Database
{
    private $id_admin;

    public function getAdminDelete(){
        $db=$this->getPDO();

        $sql="DELETE FROM `administrateur` WHERE id_admin=?";
        $supp=$db->prepare($sql);
        $supp->bindParam(1,$_GET['id']);

        $supp->execute();
        return $supp;
    }
}