<?php $title = "François REYNAUD - Blog de randonnée"; ?>

<?php ob_start(); ?>

<?php include "header.inc.php" ?>

<main>

	<!-- LIENS VERS LES PAGES -->
	<nav class="center">PAGES :
	<?php
	$nbPosts = nbPosts();
	$nbPostsPerPage = nbPostsPerPage();
	$nbPages = nbPages($nbPosts, $nbPostsPerPage);
	for ($i=1 ; $i<=$nbPages ; $i++) {
	?>
		<a href="index.php?page=<?= $i ?>" class="underlined"><?= $i ?></a>
	<?php
	}
	?>
	</nav>

	<!-- AFFICHAGE DU NUMERO DE PAGE ACTUEL -->
	<?php
	$page= actualPage();
	?>
	<h3>Page <?= $page ?></h3>


	<!-- AFFICHAGE DES POSTS -->			
	<?php
	$reponse = selectAllPosts();
	while ($donnees=$reponse->fetch()){
	?>
		<div class="abstractArticle">
			<aside class="asideAbstract">
				<h3><?= $donnees["location"] . "<br /><em>" . $donnees["period"] . " </em>"?></h3>
				<img src="<?= $donnees['image'] ?>" alt="img<?= $donnees['id'] ?>" class="imgAbstract" />
				<p><small><small><em>Mis en ligne : <?= $donnees["dated"] ?></em></small></small></p>
			</aside>
			<section class="sectionAbstract">
				<h2><?= $donnees["title"] ?></h2>				
				<article><?= $donnees["abstract"] ?></article>
				<button class="readArticle"><a <?= "href='index.php?action=postView&id=" . $donnees["id"] . "' class='readArticle'" ?>>Lire</a></button>
			</section>
		</div>
	<?php
	}
	$reponse->closeCursor();
	?>

	<!-- AFFICHAGE DU NUMERO DE PAGE ACTUEL -->
	<h3>Page <?= $page ?></h3>

	<!-- LIENS VERS LES PAGES -->
	<nav class="center">PAGES :
	<?php
	for ($i=1 ; $i<=$nbPages ; $i++) {
	?>
		<a href="index.php?page=<?= $i ?>" class="underlined"><?= $i ?></a>
	<?php
	}
	?>
	</nav>

</main>

<?php include "footer.inc.php>" ?>

<?php $content = ob_get_clean() ?>

<?php require "template.php" ?>