<?php

require("model.php");

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["name"]) AND $_POST["name"]!="" AND isset($_POST["firstname"]) AND $_POST["firstname"]!="" AND isset($_POST["content"]) AND $_POST["content"]!="") {
		$name = $_POST["name"];
		$firstname = $_POST["firstname"];
		if (isset($_POST["email"]) AND $_POST["email"]!="") {
			$email = $_POST["email"];
		} else {
			$email = "UNKNOWN";
		}
		$content = $_POST["content"];
		postComment($name, $firstname, $email, $content);
		header("Location: index.php");
	} else {
		$error = "<p>Vous devez obligatoirement rentrer un nom, in prénom, et un commentaire !</p>";
	}
}

$nbComments = countComments();

$reqAllComments = displayComments();

require("commentsView.php");

