<?php
// ON APPELLE LA BDD
try {
	$db  = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "freynaut", "admin2018");
}
catch(Exception $e) {
	die("Erreur : ".$e->getMessage());		
}

// COMPTAGE DES MESSAGES
$retour=$db->prepare("SELECT COUNT(*) AS nbArticles FROM posts");
$retour->execute();
$donnees=$retour->fetch();
$totalArticles=$donnees["nbArticles"];

// NOMBRE D'ARTCICLES PAR PAGE
$nbArticlesPerPage = 3;
$nbPages=ceil($totalArticles/$nbArticlesPerPage);
?>


<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

			<!-- PAGINATION -->
			<nav class="center">PAGES :
			<?php
			for ($i=1 ; $i<=$nbPages ; $i++) {
			?>
				<a href="index.php?page=<?= $i ?>" class="underlined"><?= $i ?></a>
			<?php
			}
			?>
			</nav>

			<!-- ctype_digit vérifie si tous les carctères de la chaine sont des chiffres -->
			<?php
			if(!empty($_GET["page"]) AND ctype_digit($_GET["page"]) AND $_GET["page"]<=$nbPages AND $_GET["page"]>=1) {
				$page=$_GET["page"];
			} else {
				$_GET["page"]=1;
				$page=$_GET["page"];
			}
			?>

			<h3>Page <?= $page ?></h3>


			<!-- AFFICHAGE DES POSTS

			 (NE PAS OUBLIER DE METTRE DES DOUBLES GUILLEMETS QUAND ON UTILISE LE SYMBOLE $ DANS UNE REQUETE) -->
			
			<?php
			$firstArticleDisplayed = $nbArticlesPerPage*($page-1);

			$reponse=$db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $firstArticleDisplayed, $nbArticlesPerPage");

			while ($donnees=$reponse->fetch()){
			?>
				<div class="abstractArticle">
					<aside class="asideAbstract">
						<h3><?= $donnees["location"] ?></h3>
						<img src="<?= $donnees['image'] ?>" alt="img<?= $donnees['id'] ?>" class="imgAbstract" />
						<p><small><small><em>Mis en ligne : <?= $donnees["dated"] ?></em></small></small></p>
					</aside>
					<section class="sectionAbstract">
						<h2><?= $donnees["title"] ?></h2>				
						<article><?= $donnees["abstract"] ?></article>
						<button class="readArticle"> <a href="displayArticle.php?numero=<?= $donnees["id"] ?>" class="readArticle"> Lire </a> </button>
					</section>
				</div>
			<?php
			}

			$reponse->closeCursor();
			?>

		</main>

		<footer>

			<!-- PAGINATION -->

			<h3>Page <?= $page ?></h3>

			<nav class="center">PAGES :
			<?php
			for ($i=1 ; $i<=$nbPages ; $i++) {
			?>
				<a href="index.php?page=<?= $i ?>"><?= $i ?></a>
			<?php
			}
			?>
			</nav>

			<!-- ctype_digit vérifie si tous les carctères de la chaine sont des chiffres -->
			<?php
			if(!empty($_GET["page"]) AND ctype_digit($_GET["page"]) AND $_GET["page"]<=$nbPages AND $_GET["page"]>=1) {
				$page=$_GET["page"];
			} else {
				$_GET["page"]=1;
				$page=$_GET["page"];
			}
			?>

			<!-- CONTACTS -->
			
			<div id="findMe">				
				<h3>RETROUVEZ-MOI</h3>
				<div>
					<a href="mailto:freynaut@laposte.net"><i class="fas fa-envelope"></i></a>
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