<?php

// ON EST ICI DANS LE "routeur" QUI CONTIENT LES CONDITIONS SERVANT A APPELER LE BON "controller"

require('controller/frontend.php');

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'listPosts') {
			listPosts();
		} else if ($_GET['action'] == 'post') {
			if (isset($_GET['id']) && $_GET['id']>0) {
				post();
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
	 	listPosts ();
	}
}
catch(Exception $e) {
	echo 'Erreur : ' . $e->getMessage();
}
// A noter qu'il est préférable d'utiliser un "require" qu'un "include" : cela permet de faire planter le script si le fichier n'est pas trouvé et de ne pas afficher la page.

// A noter qu'on peut retirer la balise de fermeture du PHP lorsqu'un fichier contient uniquement du langage PHP