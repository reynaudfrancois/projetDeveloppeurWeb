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

// POUR RECUPERER LE CONTENU ENTIER D'UN SEULPOST
function selectPost ($postId) {
	$db = dbConnect ();
	$req=$db->prepare('SELECT * FROM posts WHERE id = ?');
	$req->execute(array($postId));
	$post = $req->fetch();
	return $post;
}

// POUR RECUPERER LES COMMENTAIRES D'UN POST
function selectComments($postId) {
	$db = dbConnect() ;
	$comments = $db->prepare ('SELECT id, name, firstname, content, DATE_FORMAT(dated, "%d/%m/%Y à %H:%i") AS dateComment FROM comments WHERE id_post = ? ORDER BY dateComment DESC');
	$comments->execute(array($postId));
	return $comments;
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