<?php

require "model.php";

function addComment($name, $firstname, $email, $content) {
	$newComment = postComment($name, $firstname, $email, $content);
}

$nbComments = countComments();
$reqAllComments = displayComments();



