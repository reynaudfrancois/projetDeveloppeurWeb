<?php

require "model.php";

function addComment($name, $firstname, $email, $content) {
	$newComment = postComment($name, $firstname, $email, $content);
}

function viewcomments ($errorMessage) {
$error = $errorMessage;
$nbComments = countComments();
$reqAllComments = displayComments();
require "commentsView.php";
}



