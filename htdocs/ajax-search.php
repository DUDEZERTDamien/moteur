<?php
//connexion � la base de donn�es 
include 'inc/bdd.php';
 
//recherche des r�sultats dans la base de donn�es
$result =   $bdd->query( "SELECT libelle_commune 
                          FROM info_etat_commune
                          WHERE libelle_commune LIKE '%" . $_GET['q'] . "%'" );			  
						  
//echo "SELECT libelle_commune 
                          //FROM info_etat_commune
                          //WHERE libelle_commune LIKE '%" . $_GET['q'] . "%'";
        
            					  
 
// affichage d'un message "pas de r�sultats"

	//echo 'toto';
    // parcours et affichage des r�sultats
    while( $post = $result->fetch())
    {
		
    ?>
        <div class="article-result">
            <h3><?php echo $post['libelle_commune']; ?></h3>
        </div>
    <?php
    }

 

?>