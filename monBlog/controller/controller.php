<?php
require "model/model.php";

function listPostsView() {
	// PAGE ACTUELLEMENT AFFICHEE
	function actualPage() {
		$nbPostsPerPage = nbPostsPerPage();
		$nbPosts = nbPosts();
		$nbPages = nbPages($nbPosts, $nbPostsPerPage);
		if(!empty($_GET["page"]) AND ctype_digit($_GET["page"]) AND $_GET["page"]<=$nbPages AND $_GET["page"]>=1) {
			$page=$_GET["page"];
		} else {
			$_GET["page"]=1;
			$page=$_GET["page"];
		}
		return $page;
	}

	// NB DE POSTS PAR PAGE
	function nbPostsPerPage() {
		$nbPostsPerPage = 3;
		return $nbPostsPerPage;
	}

	// PREMIER POST AFFICHE
	function firstPostDisplayed($nbPostsPerPage) {
		//$nbPostsPerPage = nbPostsPerPage();
		$page = actualPage();
		$firstPostDisplayed = $nbPostsPerPage*($page-1);
		return $firstPostDisplayed;
	}

	// NB DE PAGES AFFICHANT LES POSTS
	function nbPages($nbPosts, $nbPostsPerPage) {
		$nbPages=ceil($nbPosts/$nbPostsPerPage);
		return $nbPages;
	}

	require "view/listPostsView.php";	
}

function postView() {
	$post = selectPost($_GET['id']);
	$comments = selectComments($_GET['id']);
	require("view/postView.php");
}

function addComment($postId, $name, $firstname, $email, $content) {
	$newComment = postComment($postId, $name, $firstname, $email, $content);

	if ($newComment == false) {
		throw new Exception('Impossible d\'ajouter le commentaire !');
	} else {
		header('Location: index.php?action=post&id=' . $postId);
	}
}