<?php

require_once "database.php";
class Administration_modele extends Database

{
    private $id_admin;
    private $email_admin;
    private $password_admin;

    //Coonexion de l'adminsitarteur
    public function connexionAdministration(){
        //Connexiona PDO
        $db = $this->getPDO();

        $this->email_admin = $_POST['email_admin'];
        $this->password_admin = $_POST['password_admin'];

        $sql = "SELECT * FROM administrateur WHERE email_admin = ? AND password_admin = ?";

        $admin = $db->prepare($sql);

        $admin->bindParam(1, $_POST['email_admin']);
        $admin->bindParam(2, $_POST['password_admin']);

        if($admin->rowCount() >= 0){

            $row = $admin->fetch(PDO::FETCH_BOTH);
            $this->id_admin = $row['id_admin'];
            $this->email_admin = $row['email_admin'];
            $this->password_admin = $row['password_admin'];

            if($this->email_admin == $row['email_admin'] && $this->password_admin == $row['password_admin']){
                session_start();
                $_SESSION['connecter_admin'] = true;
                $_SESSION['email_admin'] = $_POST['email_admin'];
                header("location: espaceAdministration");
            }else{
                echo "<p class='alert alert-danger'>L'email et le mot passe ne sont pas valide !</p>";
            }
        }else{
            var_dump($admin->rowCount());
            echo "<p class='alert alert-danger'>Aucun administrateur ne possède cet email et ce mot de passe !</p>";
            var_dump($_POST['email_admin']);
            var_dump($_POST['password_admin']);
        }

    }
    public function supprimerAnnonceUtilisateur(){
        //Appel de  la classe mere et de la methode PDO
        $db = $this->getPDO();
        //Requète sql
        $sql = 'DELETE FROM `produits` WHERE `id_produit` = ?';
        //Creation de la requète péparée
        $stmt = $db->prepare($sql);
        $this->id_produit = $_GET['id_suppr'];
        //Lié les paramètre (ici id de annonce a $_GET id url)
        $stmt->bindParam(1, $this->id_produit);
        //Execution de la requète
        $delete = $stmt->execute();
        //Retourne l'objet avec son id
        return $delete;
    }

    public function supprimerUtilisateurAdmin(){
        $db = $this->getPDO();
        $sql = "DELETE FROM vendeur_produit WHERE id_vendeur = ?";
        $stmt = $db->prepare($sql);
        $this->id_vendeur = $_GET['id_suppr'];
        $stmt->bindParam(1, $this->id_vendeur);
        $delete = $stmt->execute();
        return $delete;
    }

    public function getAdminDelete(){
        $db=$this->getPDO();

        $sql="DELETE FROM `administrateur` WHERE id_admin=?";
        $stmt = $db->prepare($sql);
        $this->id_admin = $_GET['id_suppr'];
        //Lié les paramètre (ici id de annonce a $_GET id url)
        $stmt->bindParam(1, $this->id_admin);
        //Execution de la requète
        $deleteAdmin = $stmt->execute();
        //Retourne l'objet avec son id
        return $deleteAdmin;
    }
    public function getDelete(){
        $db=$this->getPDO();

        $sql="DELETE FROM `produits` WHERE id_produit=?";
        $supp=$db->prepare($sql);
        $this->id_produit = $_GET['id'];
        $supp->bindParam(1,$this->id_produit);
        $this->id_produit=$_GET['id'];
        $delete=$supp->execute();
        return $delete;
    }
    public function getRegisterAdministrateur($email_admin,$password_admin){
        $db=$this->getPDO();

        $this->email_admin=$email_admin;
        $this->password_admin=$password_admin;

        $sql = "INSERT INTO utilisateurs (email_admin,password_admin) VALUES (?,?)";
        $add = $db->prepare($sql);

        $add->bindParam(1, $this->email_admin);
        $add->bindParam(2, $this->password_admin);

        $resultat = $add->execute(array($email_admin,$password_admin));
        if ($resultat) {

            echo "<p> votre inscription a bien été enregistrée</p>";

        } else {
            echo "une erreur c'est produite veuillez recommencer ulterieurement";
        }
    }

    public function  afficherTableAdmin(){
        $db = $this->getPDO();

        $sql = "SELECT * FROM administrateur";
        $datas = $db->query($sql);
        return $datas;
    }

    public function getAdminView()
    {
        $db=$this->getPDO();

        $sql="SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur ORDER BY nom_produit ASC";
        $stmt=$db->query($sql);
        return $stmt;

    }

}