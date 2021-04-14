<?php
session_start();
require "../vendor/autoload.php";
ob_start();
require_once "../asset/template.php";
require_once "../Controller/showProduit.php";
require_once "../Controller/showUpdate.php";
require_once "../Controller/showproduitTrouver.php";
require_once "../Controller/showEspaceAdmin.php";
require_once "../Controller/showCategorie.php";
require_once "../Controller/showconnexionVendeur.php";
require_once "../Controller/showConnexionAdministrateur.php";
require_once "../Controller/showClientProduit.php";
require_once "../Controller/showAchatClient.php";
require_once "../Controller/showInscriptionUtilisateur.php";
require_once "../Controller/showConnextionUtilisateur.php";
require_once "../Controller/showInscriptionVendeur.php";
require_once "../Controller/showProduitByvendeur.php";
require_once "../Controller/showDetail.php";
require_once "../Controller/showbyVendeur.php";
require_once "../Controller/RegionsControlleur.php";

if(isset($_GET['action'])){
    $url = $_GET['action'];
}else{
    $url = "accueil";
}
//Creation de la cle url = page
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "";
}
//les routes= index.php?action=......


if (isset($_GET['action'])){
    $action = $_GET['action'];

}else{
    $action="accueil";
}



//les routes
if($action === ""){
    $action = "accueil?page=1";
    $page = "";
}
// index.php?action=accueil
if ($action==="accueil") {
    //afficherLesAnnonces();
    getAllproduit();
    require_once "../View/accueil.php";
}elseif ($action==="supp" && isset($_GET['id_supp'])&& $_GET['id_supp']>0){
    getProduitDelete("id_produit");
    //require_once "../View/supprimer.php";

}elseif ($action==="modifier"){

    require_once "../View/modifier_produit.php";



}elseif ($action ==="inscriptionAdministrateur"){
    getAdminInscription();
    require_once "../View/inscriptionAdministrateur.php";

    if (isset($_POST['email_admin']) AND isset($_POST['password_admin']) ){
        if ($_POST['password_admin']===$_POST['repeatpassword']){
            getInscription();
        }else{
            echo "<p class='alert alert-danger'>les deux mots passes sont differents</p>";
        }
        // var_dump($_POST['email_utilisateur']);
    }

}elseif ($action==="connexionVendeur"){
    require_once "../View/connexionVendeur.php";

}elseif ($action==="connexionVendeur" && isset($_SESSION['connecter_vendeur']) && $_SESSION['id_produit'] === true){

    getProduitByCategorie();

} elseif ($action === "add"){

    require_once "../View/add.php";
    // var_dump($_POST['nom_produit']);

} elseif ($action=== "recherche"){
    FoundProduit();


    require_once "../View/recherche.php";


}elseif ($action === "categorie"){
    getProduitByCategorie();
    require_once "../View/categorie.php";

}elseif ($action === "Folon"){
    require_once "../View/connexion_administrateur.php";


}elseif ($action==="espace_adminitration" && isset($_SESSION['connecter_admin']) && $_SESSION['connecter_admin'] === true){
    header("Location:http://localhost/CRUDMVC/espaceAdministration");
    require_once "../View/espaceAdministration.php";



}elseif ($action==="inscriptionAdministrateur"){
    require_once "../View/inscriptionAdministrateur.php";

    if ($action==="clientProduit") {
        require_once "../View/produitClient.php";
    }

}elseif ($action==="acheter" && isset($_GET['id'])&& $_GET['id']>0){

    getProduitAchat();
    require_once "../View/acheter.php";

}elseif ($action === "acheter"){
    require "../View/acheter.php";

}elseif ($action === "messageVendeur"){
    require "../View/messageVendeur.php";

}elseif ($action ==="inscriptionUtilisateur") {

    require_once "../View/inscriptionUtilisateur.php";
}elseif ($action == "connexionUtilisateur") {
    require_once "../View/connexionUtilisateur.php";

}elseif(isset($_SESSION['connecter_utilisateur']) && $_SESSION['connecter_utilisateur'] === true){
    header("Location:http://localhost/CRUDMVC/accueil");


}elseif ($action==="adminView"){
    getAdminView();
    require_once "../View/adminView.php";
}elseif ($action==="supprimer" && isset($_GET['id_supp'])&& $_GET['id_supp']>0){

    getAdminDelete();
}elseif ($action==="detail"){
    getAllproduitVendeur();


}elseif ($action==="gestion_vendeur" && isset($_SESSION['connecter_vendeur']) && $_SESSION['connecter_vendeur'] === true){
    afficherParVendeur();
} elseif ($action === "deconnexion") {

    require_once "../View/deconnexion.php";
}elseif ($action==="rechercheCatReg"){
   // FoundCategorie();
    listerRegions();
   //require_once "../View/rechercheCatReg.php";
}elseif ($action==="supprimerAnnonceAdmin"){

    supprimerAnnonceAdmin();
}elseif ($action="supprimerUtilisateurAdmin"){
    supprimerUtilisateurAdmin();

}elseif ($action === "region"){
    $id= $_GET['id'];

    annonceParRegion($_GET['id']);

}



