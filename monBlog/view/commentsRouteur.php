<?php

require "../controller/commentsController.php";

$error = "";

if ($_GET["action"] == "addComment") {
	if (!empty($_POST["name"]) && !empty($_POST["firstname"]) && !empty($_POST["content"])) {
		$name = $_POST["name"];
		$firstname = $_POST["firstname"];
		$content = $_POST["content"];
		if (isset($_POST["email"]) AND $_POST["email"]!="") {
			$email = $_POST["email"];
		} else {
			$email = "UNKNOWN";
		}
		addComment($name, $firstname, $email, $content);	
	} else {
		throw new Exception ("Vous devez obligatoirement rentrer un nom, un prénom et un commentaire !");
	}

}

if ($error=""){
	echo "no error";	
} else {
	echo  "$error"; 
}
require ("commentsView.php");