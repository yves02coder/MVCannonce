<?php
function annoncePDF($id){
    $annonce = new Annonces_modele();
    $id = $_GET['id'];
    $afficherPDF = $annonce->pdfExportParId($_GET['id']);
    return $afficherPDF;
}
