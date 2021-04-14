
<?php
$_SESSION = array();
session_unset();
session_destroy();

header("Refresh:5000;accueil");
require_once "../View/deconnexion.php";
?>

