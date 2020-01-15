<?php
function getPosts() {
	$db=dbConnect();
	var_dump($db);
	$req=$db->query('SELECT id, titre, contenu, DATE_FORMAT(dateCreation, "%d/%m/%Y à %Hh%imin%ss") AS dateCreationFr FROM billets ORDER BY dateCreation DESC, id DESC LIMIT 0, 3');

	return $req;
}

function getPost($postId) {
	$db=dbConnect();
	var_dump($db);
	$req=$db->prepare('SELECT id, titre, contenu, DATE_FORMAT(dateCreation, "%d/%m/%Y à %Hh%imin%ss") AS dateCreationFr FROM billets WHERE id = ?');
	$req->execute(array($postId));
	$post = $req->fetch();
	return $post;
}


function getComments($postId) {
	$db=dbConnect();
	var_dump($db);
	$comments=$db->prepare('SELECT id, auteur, commentaire, DATE_FORMAT(dateCommentaire, "%d/%m/%Y à %H:%i:%s") AS dateCommentaireFr FROM commentaires WHERE idBillet = ? ORDER BY dateCommentaire DESC');
	$comments->execute(array($postId));
	return $comments;
}

function postComment($postId, $auteur, $comment) {
	$db=dbConnect();
	var_dump($db);
	$comments = $db->prepare('INSERT INTO commentaires(idBillet, auteur, commentaire, dateCommentaire) VALUES (?, ?, ?, NOW())');
	$affectedLines = $comments->execute(array($postId, $auteur, $comment));
	return $affectedLines;
}

// Récupération des données
function dbConnect() {
	//try {
		$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8','freynaut','admin2018');
		return $db;
	/*}
	catch(Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}*/
}
