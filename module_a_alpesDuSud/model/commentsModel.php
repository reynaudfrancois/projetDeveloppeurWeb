<?php 

function postComment($name, $firstname, $email, $content) {
	$db = dbConnect();
	$comment = $db->prepare("INSERT INTO message (name, firstname, email, content) VALUES (?, ?, ?, ?)");
	$newComment=$comment->execute(array($name, $firstname, $email, $content));
	return $newComment;
}

function countComments () {
	$db = dbConnect();
	$req=$db->prepare("SELECT COUNT(*) AS nbComments FROM message");
	$req->execute();
	$data=$req->fetch();
	$nbComments=$data["nbComments"];
	return $nbComments;
}

function displayComments () {
	$db = dbConnect();
	$req=$db->query("SELECT name, firstname, content, DATE_FORMAT(dated, ', le %d/%m/%Y à %H:%i') AS creationDate  FROM message ORDER BY id DESC");
	$allComments = $req;
	return $allComments;
}

function dbConnect() {
	try {
		$db  = new PDO("mysql:host=localhost;dbname=francoi3_comments;charset=utf8", "francoi3", "F9WOuR;)7u9lx8");
		return $db;
	} catch(Exception $e) {
		die("Erreur : ".$e->getMessage());		
	}
}