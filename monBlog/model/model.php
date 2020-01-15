<?php
// COMPTAGE DES POSTS
function nbPosts() {
	$db = dbConnect();
	$retour=$db->prepare("SELECT COUNT(*) AS nbArticles FROM posts");
	$retour->execute();
	$donnees=$retour->fetch();
	$nbPosts=$donnees["nbArticles"];
	return $nbPosts;
}

// ON RECUPERE L'ENSEMBLE DES POSTS ET DE LEUR CONTENU

function selectAllPosts () {
$db = dbConnect();
$nbPostsPerPage = nbPostsPerPage();
$firstPostDisplayed = firstPostDisplayed($nbPostsPerPage);
$reponse=$db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $firstPostDisplayed, $nbPostsPerPage");
return $reponse;
}

// ON APPELLE LA BDD
function dbConnect() {
	try {
		$db  = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "freynaut", "admin2018");
		return $db;
	}
	catch(Exception $e) {
		die("Erreur : ".$e->getMessage());		
	}
}