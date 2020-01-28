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
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					if (isset($_POST["name"]) && trim($_POST["name"])!="" && isset($_POST["firstname"]) && trim($_POST["firstname"])!="" && isset($_POST["content"]) && trim($_POST["content"])!="") {
						$name = htmlspecialchars($_POST["name"]);
						$firstname = htmlspecialchars($_POST["firstname"]);
						$content = htmlspecialchars($_POST["content"]);
						if (isset($_POST["email"]) AND trim($_POST["email"])!="") {
							$email = htmlspecialchars($_POST["email"]);
						} else {
							$email = "UNKNOWN";
						}
						addComment($id, $name, $firstname, $email, $content);
					} else {
						$error = "<p>Vous devez obligatoirement rentrer un nom, un prénom, et un commentaire !</p>";
						postView($error);
					}
				}
			} else {
				throw new Exception ("Aucun identifiant de billet envoyé !");
			}
		} else {
			listPostsView();
		}
	} else {
	 	listPostsView ();
	}
} catch(Exception $e) {
	echo "Erreur : " . $e->getMessage();
}