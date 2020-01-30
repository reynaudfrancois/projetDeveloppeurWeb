<?php

require "model/model.php";

function listPostsView() {

	function actualPage() {
		$nbPostsPerPage = nbPostsPerPage();
		$nbPosts = nbPosts();
		$nbPages = nbPages($nbPosts, $nbPostsPerPage);
		if(!empty($_GET["page"]) && ctype_digit($_GET["page"]) && $_GET["page"]<=$nbPages && $_GET["page"]>=1) {
			$page=$_GET["page"];
		} else {
			$_GET["page"]=1;
			$page=$_GET["page"];
		}
		return $page;
	}

	function nbPostsPerPage() {
		$nbPostsPerPage = 3;
		return $nbPostsPerPage;
	}

	function firstPostDisplayed($nbPostsPerPage) {
		$page = actualPage();
		$firstPostDisplayed = $nbPostsPerPage*($page-1);
		return $firstPostDisplayed;
	}

	function nbPages($nbPosts, $nbPostsPerPage) {
		$nbPages=ceil($nbPosts/$nbPostsPerPage);
		return $nbPages;
	}

	require "view/listPostsView.php";	
}

function postView($errorMessage) {
	$error = $errorMessage;
	$nbComments =  countComments($_GET["id"]);
	$post = selectPost($_GET['id']);
	$currentDatePost = selectDatePost($_GET["id"]);
	$reqAllComments = selectComments($_GET['id']);
	require("view/postView.php");
}

function addComment($postId, $name, $firstname, $email, $content) {
	$newComment = postComment($postId, $name, $firstname, $email, $content);
	if ($newComment === false) {
        die("Impossible d'ajouter le commentaire !");
    }
    else {
        header("Location: index.php?action=postView&id=" . $postId . "/#comments");
    }
}