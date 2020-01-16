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
				if (!empty($_POST['auteur']) && !empty($_POST['commentaire'])) {
					addComment($_GET['id'], $_POST['auteur'], $_POST['commentaire']);
				} else {
					throw new Exception ('Tous les champs ne sont pas remplis !');
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