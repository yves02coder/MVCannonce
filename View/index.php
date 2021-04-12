<?php
session_start();
require "../vendor/autoload.php";
ob_start();
require_once "../asset/template.php";
require_once "../Controller/showProduit.php";
require_once "../Controller/showUpdate.php";
require_once "../Controller/showproduitTrouver.php";
require_once "../Controller/showDelete.php";
require_once "../Controller/showCategorie.php";
require_once "../Controller/showconnexionVendeur.php";
require_once "../Controller/showConnexionAdministrateur.php";
require_once "../Controller/showAllAdminfunction.php";
require_once "../Controller/showClientProduit.php";
require_once "../Controller/showAchatClient.php";
require_once "../Controller/showInscriptionAdmin.php";
require_once "../Controller/showInscriptionUtilisateur.php";
require_once "../Controller/showConnextionUtilisateur.php";
require_once "../Controller/showInscriptionVendeur.php";
require_once "../Controller/showProduitByvendeur.php";
require_once "../Controller/showDetail.php";


//les routes= index.php?action=......


if (isset($_GET['action'])){
    $action = $_GET['action'];

}else{
    $action="accueil";
}

if ($action===""){
    $action="clientProduit";
}

//les routes
// index.php?action=accueil
if ($action==="accueil") {
    getAllproduit();
require_once "../View/accueil.php";
}elseif ($action==="supprimer" && isset($_GET['id'])&& $_GET['id']>0){
    getProduitDelete();
    //require_once "../View/supprimer.php";

}elseif ($action==="modifier"){

    require_once "../View/modifier_produit.php";



}elseif ($action ==="inscriptionAdministrateur"){
    require_once "../View/inscriptionAdministrateur.php";

    if (isset($_POST['email_admin']) AND isset($_POST['password_admin']) ){
        if ($_POST['password_admin']===$_POST['repeatpassword']){
            getInscription();
        }else{
           echo "<p class='alert alert-danger'>les deux mots passes sont differents</p>";
        }
       // var_dump($_POST['email_utilisateur']);

    }else{
        //echo"veuillez verifier les champs du formulaire";
    }

}elseif ($action==="connexionVendeur"){
    require_once "../View/connexionVendeur.php";
}elseif ($action==="connexionVendeur" && isset($_SESSION['connecter_vendeur']) && $_SESSION['id_produit'] === true){
  //getByvendeur();
    getProduitByCategorie();

  // require_once "../View/ProduitByVendeur.php";
   //require_once "../View/accueil.php";
}

elseif ($action === "add"){

    require_once "../View/add.php";
   // var_dump($_POST['nom_produit']);

} elseif ($action=== "recherche"){
    FoundProduit();
require_once "../View/recherche.php";


}elseif ($action === "categorie"){
   getProduitByCategorie();
  require_once "../View/categorie.php";


}elseif ($action==="deconnexion"){
   require_once "../View/clientProduit.php";


}elseif ($action === "Folon"){
    require_once "../View/connexion_administrateur.php";

}elseif ($action==="connexion-administrateur" && isset($_SESSION['connecter_admin']) && $_SESSION['connecter_admin'] === true){


require_once "../View/espaceAdministration.php";



}elseif ($action==="inscriptionAdministrateur")
    require_once "../View/inscriptionAdministrateur.php";

if ($action==="clientProduit"){

    require_once "../View/clientProduit.php";

}elseif ($action==="acheter" && isset($_GET['id'])&& $_GET['id']>0){

        getProduitAchat();
        require_once "../View/acheter.php";
    //require "../View/messageVendeur.php";
        /*
 }elseif ($action === "region"){
     $title = "Annonce.com - Produits par région - ";
     $id = $_GET['id'];
     afficherProduitParRegion($id);

 }elseif ($action === "pdf" && isset($_GET['id']) && $_GET['id'] > 0){
     $id = $_GET['id'];
     pdfExport($id);*/
}elseif ($action === "acheter"){
    require "../View/acheter.php";

}elseif ($action === "messageVendeur"){
    require "../View/messageVendeur.php";

}elseif ($action ==="inscriptionUtilisateur"){
    //getInscriptionUtilisateur();
    envoiemail_inscription();
  require_once "../View/inscriptionUtilisateur.php";

    if (isset($_POST['email_utilisateur']) AND isset($_POST['password_utilisateur']) ) {
       getConnexionUtilisateur();

            require_once "../View/connexionUtilisateur.php";

    }if ( isset($_SESSION['connecter_utilisateur']) && $_SESSION['connecter_utilisateur'] === true){
        header("Location:http://localhost/CRUDMVC/");
        //require_once "../View/acheter.php";

    }elseif ($action==="adminView"){
       getAdminView();
       require_once "../View/adminView.php";
    }elseif ($action==="supprimer" && isset($_GET['id_supp'])&& $_GET['id_supp']>0){

        getAdminDelete();
   /* }elseif ($action==="ProduitByvendeur"){

        getByvendeur();*/
       //require_once "../View/ProduitByVendeur.php";
    }elseif ($action==="detail"){
      getAllproduitVendeur();
        //require_once "../View/detail.php";



    }elseif ($action==="gestion_vendeur" && isset($_SESSION['connecter_vendeur']) && $_SESSION['connecter_vendeur'] === true){
        afficherParVendeur();
    }



//elseif ($action === "deconnexion"){
//header("Refresh:30;$action===deconnexion");
    //require_once "../View/deconnexion.php";

}/*elseif ($action==="ALLcategorie"){

}*/


