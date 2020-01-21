<?php
require "controller/controller.php";
try {
	if (isset($_GET["action"])) {
		if ($_GET["action"] == "listPostsView") {
			listPostsView();
		} else if ($_GET["action"] == "postView") {
			if (isset($_GET["id"]) && $_GET["id"]>0) {
				$error = "";
				postView($error);
			} else {
				throw new Exception ("Aucun identifiant de billet envoyé");
			}
		} else if ($_GET["action"] == "addComment") {
			if (isset($_GET["id"]) && $_GET["id"] > 0) {
				$id = $_GET["id"];
				if (!empty($_POST["name"]) && !empty($_POST["firstname"]) && !empty($_POST["content"])) {
					$name = $_POST["name"];
					$firstname = $_POST["firstname"];
					$content = $_POST["content"];
					if (isset($_POST["email"]) AND $_POST["email"]!="") {
						$email = $_POST["email"];
					} else {
						$email = "UNKNOWN";
					}
					addComment($id, $name, $firstname, $email, $content);
					header("Location: index.php?action=postView&id=" . $id . "/#comments");
				} else {
					$error = "<p>Vous devez obligatoirement rentrer un nom, un prénom, et un commentaire !</p>";
					postView($error);
				}
			} else {
				throw new Exception ("Aucun identifiant de billet envoyé !");
			}
		}
	} else {
	 	listPostsView ();
	}
}
catch(Exception $e) {
	echo "Erreur : " . $e->getMessage();
}
//listPostsView();