<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Moteur sur base Election legislative 2017</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <META HTTP-EQUIV="Refresh" CONTENT="">
  <link rel="stylesheet" href="css/font/css/font-awesome.min.css">  
  <link rel="stylesheet" href="css/bootstrap.min.css">  
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style_over_bs.css" media="all"/>
  <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
</head>
<body>
<script>
$(document).ready( function() {
  // détection de la saisie dans le champ de recherche
  $('#q').keyup( function(){
    $field = $(this);
    $('#results').html(''); // on vide les resultats
    $('#ajax-loader').remove(); // on retire le loader
 
    // on commence à traiter à partir du 2ème caractère saisie
    if( $field.val().length > 1 )
    {
      // on envoie la valeur recherché en GET au fichier de traitement
      $.ajax({
  	type : 'GET', // envoi des données en GET ou POST
	url : 'ajax-search.php' , // url du fichier de traitement
	data : 'q='+$(this).val() , // données à envoyer en  GET ou POST
	beforeSend : function() { // traitements JS à faire AVANT l'envoi
		$field.after('<img src="img/ajax-loader.gif" alt="loader" id="ajax-loader" />'); // ajout d'un loader pour signifier l'action
	},
	success : function(data){ // traitements JS à faire APRES le retour d'ajax-search.php
		$('#ajax-loader').remove(); // on enleve le loader
		$('#results').html(data); // affichage des résultats dans le bloc
	}
      });
    }		
  });
});
</script>

<!--debut du formulaire-->
<form class="ajax" action="" method="get">
	<p>
		<label for="q">Rechercher une commune</label>
		<input type="text" name="q" id="q" />
	</p>
</form>
<!--fin du formulaire-->
 
<!--preparation de l'affichage des resultats-->
<div id="results"></div>


</body>
<footer>@2017 DD Moteur Jquery</footer>
</html>