<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">-->
		<link rel="stylesheet" type="text/css" href="view/css/normalize-css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="view/fontawesome/css/all.css" />
		<link rel="stylesheet" href="view/css/style.css" />
		<title>François REYNAUD - Blog de randonnée</title>
	</head>

	<body>
		
		<header>

			<div id="title">
				<h1>MON BLOG</h1>
				<h2>Voyages et Petites randonnées</h2>
				<h3>François REYNAUD</h3>
			</div>

		</header>

		<main>

		<h2>Derniers articles du blog</h2>

		<?php
		// connexion à la BDD
		try {
			$db  = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "freynaut", "admin2018");
		}
		catch(Exception $e) {
			die("Erreur : ".$e->getMessage());		
		}

		$req = $db->query("SELECT title, location, DATE_FORMAT(dated, 'Le %d%m%Y à %H:%i' ) AS dateCreation FROM posts ORDER BY id DESC LIMIT 0, 5");

		while 


		?>

<?php 
	
	include "controller/paging.php";
	
	include "header.inc.php";
	include "model/displayAbstractArticle.php";
	include "footer.inc.php";
?>