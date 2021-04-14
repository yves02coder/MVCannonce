<?php
require_once "../Model/Administration_modele.php";

function getAdminDelete(){

    $supprimer=new Administration_modele();

    $getsupprimer= $supprimer->getAdminDelete();

    if($getsupprimer){
        //header("Location: accueil");
        require_once "../View/adminView.php";
    }else{
        echo "rien a supprimer";
    }

}

function supprimerAnnonceAdmin(){
    //Instance du model (classe) annonce
    $admin = new Administration_modele();
    $delete = $admin->supprimerAnnonceUtilisateur();
    if($delete){
        require_once "../View/espaceAdministration.php";
    }else{
        echo "rien a supprimer";
    }
}



function supprimerUtilisateurAdmin(){
    $admin = new Administration_modele();
    $suprUtilisateur = $admin->supprimerUtilisateurAdmin();
    if($suprUtilisateur){
       require_once "../View/espaceAdministration.php";
    }else{
        echo "rien a supprimer";
    }
}

function getProduitDelete($id_produit){

    $supprimer=new Administration_modele();

    $getsupprimer= $supprimer->getDelete();

    if($getsupprimer){
        //header("Location: accueil");
        require_once "../View/accueil.php";
    }else{
        echo "rien a supprimer";
    }

}
function getAdminInscription()
{

    $inscription=new Administration_modele();
    $inscription ->getRegisterAdministrateur('email_admin','password_admin');
    if ($inscription){
        echo "votre inscription a ete bien enregistré";
        require_once "../View/connexion_administrateur.php";
    }
}

function afficherTableAdmin(){
    $admin = new Administration_modele();
    $tableAdmin = $admin->afficherTableAdmin();
    return $tableAdmin;

}

function getAdminView()
{
    $produit=new Administration_modele();
    $getproduit= $produit->getAdminView();

    require_once "../View/espaceAdministration.php";
    return $getproduit;
}
