<?php

require "controller.php";

$error = "";
if (isset($_GET["action"])) {
	if ($_GET["action"] == "addComment") {
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
				addComment($name, $firstname, $email, $content);
				header("Location: index.php");
			} else {
				$error = "<p>Vous devez obligatoirement rentrer un nom, un prénom, et un commentaire !</p>";
			}
		}
	}
} 
require "commentsView.php";
