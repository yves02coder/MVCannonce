<?php
require_once "database.php";

class Email_vendeur extends Database

{
    private $produit_id;
    private $nom_produit;
    private $image_produit;
    private $description_produit;
    private $prix_produit;
    private $categorie_produit;
    private $id_vendeur;


    public function pdfExportParId($produitID){
        ob_get_clean();
        //Instance de la classe
        require "../public/FPDF/fpdf.php";
        $db = $this->getPDO();
        $query = "SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur  WHERE produit_id = ?";
        $req = $db->prepare($query);
        $req->execute(array($produitID));
        $details_annonces = $req->fetch();

        /*$this->nom_produit = $details_annonces['nom_annonce'];
        $this->description_annonce = $details_annonces['description_annonce'];
        $this->prix_annonce = $details_annonces['prix_annonce'];
        $this->photo_annonce = $details_annonces['photo_annonce'];
        $this->categorie_id = $details_annonces['type_categorie'];
        $this->utilisateur_id = $details_annonces['nom_utilisateur'];
        $this->region_id = $details_annonces['nom_region'];*/

        $pdf = new FPDF('P','mm','A4');
        //Sortie
        $pdf->AddPage();
        //Header
        $pdf->Image('../asset/image/poto.png');

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'Votre annonces : ');
        $pdf->Ln(10);
        $pdf->Cell(190,10, iconv('UTF-8', 'ISO-8859-2', 'Nom du annonce : '.$this->nom_produit));

        $pdf->Ln(10);
        $pdf->Image(''.$details_annonces['photo_annonce'], 100, 120, 100,100);


        $pdf->Ln(10);
        $pdf->SetFont('Arial','',12);
        $pdf->MultiCell(190,10,'Description de l\'annonce : '.utf8_decode($this->description_produit), 1, 'J');
        $pdf->Ln(10);
        $pdf->Cell(190,10,'Prix du produit : '.$this->prix_produit. ' EUROS');
        $pdf->Ln(10);
        $pdf->Cell(190,10,iconv('UTF-8', 'ISO-8859-2', 'Catégorie : '.$this->categorie_produit));
        $pdf->Ln(10);
        $pdf->Cell(190,10,'Nom du vendeur : '.$this->id_vendeur);
        $pdf->Ln(10);
        $pdf->Cell(190,10,iconv('UTF-8', 'ISO-8859-2', 'Région : '.$this->id_region));
        $pdf->Ln(10);
        //$pdf->AddLink("http://localhost/bon_coin_mic/region&id=3");


        $pdf->Output('','annonces.pdf',true);
    }

}