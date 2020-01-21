<?php

require "../controller/commentsController.php";

if (isset($_GET["action"])) {
	if ($_GET["action"] == "addComment") {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST["name"]) AND $_POST["name"]!="" AND isset($_POST["firstname"]) AND $_POST["firstname"]!="" AND isset($_POST["content"]) AND $_POST["content"]!="") {
				$name = $_POST["name"];
				$firstname = $_POST["firstname"];
				$content = $_POST["content"];
				if (isset($_POST["email"]) AND $_POST["email"]!="") {
					$email = $_POST["email"];
				} else {
					$email = "UNKNOWN";
				}
				addComment($name, $firstname, $email, $content);
				header("Location: comments.php?action=viewComments");
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
