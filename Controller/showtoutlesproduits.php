<?php
require_once "../Model/Pagination.php";
function afficherLesAnnonces(){
    //Instance de la classe Annonce
    $getproduit = new Pagination();
    //stock dansune variable l'appel de la methode concernée
    $recupAnnonce = $getproduit->afficherToutesAnnonces();
    require_once "../View/produitClient.php";
}