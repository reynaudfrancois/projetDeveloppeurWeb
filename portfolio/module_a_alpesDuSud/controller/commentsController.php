<?php

require "../model/commentsModel.php";

function addComment($name, $firstname, $email, $content) {
	$newComment = postComment($name, $firstname, $email, $content);
	if ($newComment === false) {
        die("Impossible d'ajouter le commentaire !");
    }
    else {
        header("Location: comments.php?action=viewComments");
    }
}

function viewcomments ($errorMessage) {
	$error = $errorMessage;
	$nbComments = countComments();
	$reqAllComments = displayComments();
	require "../view/commentsView.php";
}