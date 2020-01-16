<?php
require "controller/controller.php";
try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'listPostsView') {
			listPostsView();
		} else if ($_GET['action'] == 'postView') {
			if (isset($_GET['id']) && $_GET['id']>0) {
				postView();
			} else {
				throw new Exception ('Aucun identifiant de billet envoyé');
			}
		} else if ($_GET['action'] == 'addComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['content'])) {
					$name = $_POST['name'];
					$firstname = $_POST['firstname'];
					$content = $_POST['content'];
					if (isset($_POST["email"]) AND $_POST["email"]!="") {
						$email = $_POST["email"];
					} else {
						$email = "UNKNOWN";
					}
					addComment($_GET['id'], $name, $firstname, $email, $content);
				} else {
					throw new Exception ('Vous devez obligatoirement rentrer un nom, un prénom et un commentaire !');
				}
			} else {
				throw new Exception ('Aucun identifiant de billet envoyé !');
			}
		}
	} else {
	 	listPostsView ();
	}
}
catch(Exception $e) {
	echo 'Erreur : ' . $e->getMessage();
}
//listPostsView();