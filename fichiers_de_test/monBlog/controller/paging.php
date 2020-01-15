<?php

	// on prépare la requête de compatge des messages
	$retour=$db->prepare("SELECT COUNT(*) AS nbArticles FROM posts");

	//on execute la requete
	$retour->execute();

	//on renvoie le résultat sous forme de tableau
	$donnees=$retour->fetch();

	//on récupère le nombre total d'articles dans la varialble $totalArticles
	$totalArticles=$donnees["nbArticles"];

	// on choisit le nombre maximum d'articles présentés par page
	$nbArticlesPerPage = 3;

	//on calcule le nombre de pages nécessaires en divisant le total des articles par le nombre d'articles par page ; la fonction 'ceil' arrondit à l'entier supérieur
	$nbPages=ceil($totalArticles/$nbArticlesPerPage);

?>