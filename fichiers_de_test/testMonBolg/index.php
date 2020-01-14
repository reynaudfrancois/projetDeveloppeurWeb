<?php
	try {
		$db  = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "freynaut", "admin2018");
	}
	catch(Exception $e) {
		die("Erreur : ".$e->getMessage());		
	}

		// on prépare la requête de compatge des messages
	$retour=$db->prepare("SELECT COUNT(*) AS nbArticles FROM posts");

	//on execute la requete
	$retour->execute();

	//on renvoie le résultat sous forme de tableau
	$donnees=$retour->fetch();

	//on récupère le nombre total d'articles dans la varialble $totalArticles
	$totalArticles=$donnees["nbArticles"];

	// on choisit le nombre maximum d'articles présentés par page
	$nbArticlesPerPage = 3;

	//on calcule le nombre de pages nécessaires en divisant le total des articles par le nombre d'articles par page ; la fonction 'ceil' arrondit à l'entier supérieur
	$nbPages=ceil($totalArticles/$nbArticlesPerPage);
?>


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

		<?php

			echo "<nav class='center'>PAGES : ";
	for ($i=1 ; $i<=$nbPages ; $i++) {
		echo "<a href='index.php?page=" . $i . "'>" . $i . "</a> ";
	}
	echo "</nav>";

	// ctype_digit vérifie si tous les carctères de la chaine sont des chiffres
	if(!empty($_GET["page"]) AND ctype_digit($_GET["page"]) AND $_GET["page"]<=$nbPages AND $_GET["page"]>=1) {
		$page=$_GET["page"];
	} else {
		$_GET["page"]=1;
		$page=$_GET["page"];
	}

	echo "<h3>Page " . $page . "</h3>";
	var_dump(is_numeric($_GET["page"]));
	

	var_dump(ctype_digit($_GET["page"]));

	$firstArticleDisplayed = $nbArticlesPerPage*($page-1);


		//NE PAS OUBLIER DE METTRE DES DOUBLES GUILLEMETS QUAND ON UTILISE LE SYMBOLE $ DANS UNE REQUETE
		$reponse=$db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $firstArticleDisplayed, $nbArticlesPerPage");

		while ($donnees=$reponse->fetch()){
			echo 
				"<div class='abstractArticle'>
					<aside class='asideAbstract'>
						<h3>" . $donnees["location"] . "</h3>
						<img src='" . $donnees["image"] . "' alt='img" . $donnees["id"] . "' class='imgAbstract' />
						<p><small><small><em>Mis en ligne : " . $donnees["dated"] . "</em></small></small></p>
					</aside>
					<section class='sectionAbstract'>
						<h2>" . $donnees["title"] . "</h2>				
						<article>" . $donnees["abstract"] . "</article>
						<button class='readArticle'> <a href='displayArticle.php?numero=" . $donnees["id"] . "' class='readArticle'> Lire </a> </button>
					</section>
				</div>";
		}

		$reponse->closeCursor();


	?>

		</main>

		<footer>

			<?php include "view/pagination.php"; ?>
			
			<div id="findMe">				
				<h3>RETROUVEZ-MOI</h3>
				<div>
					<a href="contact.php"><i class="fas fa-envelope"></i></a>
					<a href="https://www.facebook.com/fran.cisco.376043" target="new"><i class="fab fa-facebook-square"></i></a>
					<a href="https://www.instagram.com/n0mmade" target="new"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCnp9vbWd4sw0SnbX8Nw0EIQ" target="new"><i class="fab fa-youtube"></i></a>
				</div>				
			</div>

			<div id="copyright">
				<small>Copyright © 2019 François Reynaud</small>
			</div>

		</footer>

	</body>

</html>