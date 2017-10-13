<?php
//connexion à la base de données 
include 'inc/bdd.php';
 
//recherche des résultats dans la base de données
$result =   $bdd->query( "SELECT libelle_commune 
                          FROM info_etat_commune
                          WHERE libelle_commune LIKE '%" . $_GET['q'] . "%'" );			  
						  
//echo "SELECT libelle_commune 
                          //FROM info_etat_commune
                          //WHERE libelle_commune LIKE '%" . $_GET['q'] . "%'";
        
            					  
 
// affichage d'un message "pas de résultats"

	//echo 'toto';
    // parcours et affichage des résultats
    while( $post = $result->fetch())
    {
		
    ?>
        <div class="article-result">
            <h3><?php echo $post['libelle_commune']; ?></h3>
        </div>
    <?php
    }

 

?>