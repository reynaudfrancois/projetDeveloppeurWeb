<?php

	// on prépare la requête de compatge des messages
	$retour=$bdd->prepare("SELECT COUNT(*) AS nbArticles FROM vue_article");

	//on execute la requete
	$retour->execute();

	//on renvoie le résultat sous forme de tableau
	$donnees=$retour->fetch();

	//on récupère le nombre total d'articles dans la varialble $totalArticles
	$totalArticles=$donnees["nbArticles"];

?>