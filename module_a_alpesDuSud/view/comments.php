<?php

require "../controller/commentsController.php";

if (isset($_GET["action"])) {
	if ($_GET["action"] == "addComment") {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST["name"]) AND trim($_POST["name"])!="" AND isset($_POST["firstname"]) AND trim($_POST["firstname"])!="" AND isset($_POST["content"]) AND trim($_POST["content"])!="") {
				$name = htmlspecialchars($_POST["name"]);
				$firstname = htmlspecialchars($_POST["firstname"]);
				$content = htmlspecialchars($_POST["content"]);
				if (isset($_POST["email"]) AND trim($_POST["email"])!="") {
					$email = htmlspecialchars($_POST["email"]);
				} else {
					$email = "UNKNOWN";
				}
				addComment($name, $firstname, $email, $content);
				//header("Location: comments.php?action=viewComments");
			} else {
				$error = "<p>Vous devez obligatoirement rentrer un nom, un prénom, et un commentaire !</p>";
				viewComments($error);
			}
		}
	} else if ($_GET["action"] == "viewComments") {
		$error ="";
		viewComments($error);
	}
} else {
	$error = "";
	viewComments($error);
}