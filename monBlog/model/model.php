<?php

function nbPosts() {
	$db = dbConnect();
	$req=$db->prepare("SELECT COUNT(*) AS nbArticles FROM posts");
	$req->execute();
	$data=$req->fetch();
	$nbPosts=$data["nbArticles"];
	return $nbPosts;
}

function selectAllPosts () {
$db = dbConnect();
$nbPostsPerPage = nbPostsPerPage();
$firstPostDisplayed = firstPostDisplayed($nbPostsPerPage);
$answer=$db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $firstPostDisplayed, $nbPostsPerPage");
return $answer;
}

function selectPost ($postId) {
	$db = dbConnect ();
	$req=$db->prepare('SELECT * FROM posts WHERE id = ?');
	$req->execute(array($postId));
	$post = $req->fetch();
	return $post;
}

function selectComments ($postId) {
	$db = dbConnect() ;
	$comments = $db->prepare ('SELECT id, name, firstname, content, DATE_FORMAT(dated, "%d/%m/%Y à %H:%i") AS dateComment FROM comments WHERE id = ? ORDER BY id_comment DESC');
	$comments->execute(array($postId));
	return $comments;
}

function countComments ($postId) {
	$db = dbConnect();
	$req=$db->prepare("SELECT COUNT(*) AS nbComments FROM comments WHERE id = ? ");
	$req->execute(array($postId));
	$data=$req->fetch();
	$nbComments=$data["nbComments"];
	return $nbComments;
}

function postComment ($postId, $name, $firstname, $email, $content) {
	$db=dbConnect();
	$commentAdded = $db->prepare("INSERT INTO comments(id, name, firstname, email, content) VALUES (?, ?, ?, ?, ?)");
	$newComment = $commentAdded->execute(array($postId, $name, $firstname, $email, $content));
	return $newComment;
}

function dbConnect() {
	try {
		$db  = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "freynaut", "admin2018");
		return $db;
	}
	catch(Exception $e) {
		die("Erreur : ".$e->getMessage());		
	}
}