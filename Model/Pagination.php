<?php
require_once "database.php";

class Pagination extends Database
{
    public function  getAllproduit(){
        $db = $this->getPDO();

        //Appel de la clé $_GET['page'] referencée dans le routeur
        //index.php?url=quelque_chose?page=1

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = "page=1";
        }
        //Nombre d'annonce affichée par page
        $limite = 3;
        //Valeur de depart page courante - 1 * nombre d'annonce a afficher
        $debut = ($page - 1) * $limite;

        //Requète SQL + limite
        $sql = "SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur ORDER BY Rand() ASC LIMIT {$limite} OFFSET {$debut}";
        $stmt = $db->query($sql);

        //Requète qui compte le nombre d'entrée
        $resultFoundRows = $db->query('SELECT COUNT(id_produit) FROM produits');
        /* On doit extraire le nombre du jeu de résultat */
        $nombredElementsTotal = $resultFoundRows->fetchColumn();
        /* Si on est sur la première page, on n'a pas besoin d'afficher de lien
        * vers la précédente. On va donc ne l'afficher que si on est sur une autre
        * page que la première */
        $nombreDePages = ceil($nombredElementsTotal / $limite);


        ?>
        <div class="text-center">
            <img width="10%" src="../asset/image/poto.png" alt="Renouveau.com" title="Renouveau.com">
        </div>
        <div class="d-flex flex-row justify-content-center mt-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                    if ($page > 1):
                        ?><li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Page précédente</a></li><?php
                    endif;

                    /* On va effectuer une boucle autant de fois que l'on a de pages */
                    for ($i = 1; $i <= $nombreDePages; $i++):
                        ?><li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li><?php
                    endfor;

                    /* Avec le nombre total de pages, on peut aussi masquer le lien
                     * vers la page suivante quand on est sur la dernière */
                    if ($page < $nombreDePages):
                        ?><li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Page suivante</a></li><?php
                    endif;
                    ?>

                </ul>
            </nav>
        </div>

        <?php

        return $stmt;
    }

    //COMPTE LE NOMBRE D'ANNONCE///

    public function compterLesAnnonces(){
        $db = $this->getPDO();
        $limite = 2;
        //Requète qui compte le nombre d'entrée
        $resultFoundRows = $db->query('SELECT COUNT(id_produit) FROM produits');
        /* On doit extraire le nombre du jeu de résultat */
        $nombredElementsTotal = $resultFoundRows->fetchColumn();
        /* Si on est sur la première page, on n'a pas besoin d'afficher de lien
     * vers la précédente. On va donc ne l'afficher que si on est sur une autre
     * page que la première */
        $nombreDePages = ceil($nombredElementsTotal / $limite);
        return $nombreDePages;
    }
}