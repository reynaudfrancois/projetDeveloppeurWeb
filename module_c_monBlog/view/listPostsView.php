<?php $title = "François REYNAUD - Blog de randonnée"; ?>

<?php ob_start(); ?>

<?php include "header.inc.php"; ?>

<main>

	<nav>
		PAGES :
		<?php
		$nbPosts = nbPosts();
		$nbPostsPerPage = nbPostsPerPage();
		$nbPages = nbPages($nbPosts, $nbPostsPerPage);
		for ($i = 1; $i <= $nbPages; $i++) {
		?>
			<a href="index.php?page=<?= $i ?>"><?= $i ?></a>
		<?php
		}
		?>
	</nav>

	<?php
	$page= actualPage();
	?>
	<h3>Page <?= $page ?></h3>
		
	<?php
	$req = selectAllPosts();
	while ($data=$req->fetch()){
	?>
		<div class="abstractArticle">
			<aside class="center">
				<h3 class="location"><?= $data["location"] . "<br /><em>" . $data["period"] . " </em>"?></h3>
				<img src="<?= $data['image'] ?>" alt="img<?= $data['id'] ?>" class="imgAbstract" />
				<p><small><small><em>Mis en ligne : <?= $data["dated"] ?></em></small></small></p>
			</aside>
			<section class="center">
				<h2><?= $data["title"] ?></h2>				
				<p class="justifyAlign"><?= $data["abstract"] ?></p>
				<a <?= "href='index.php?action=postView&id=" . $data["id"] . "' class='readArticle'" ?> >Lire</a>
			</section>
		</div>
	<?php
	}
	$req->closeCursor();
	?>

	<h3>Page <?= $page ?></h3>

	<nav>
		PAGES :
		<?php
		for ($i = 1; $i <= $nbPages; $i++) {
		?>
			<a href="index.php?page=<?= $i ?>"><?= $i ?></a>
		<?php
		}
		?>
	</nav>

</main>

<?php include "footer.inc.php"; ?>

<?php $content = ob_get_clean(); ?>

<?php include "template.php"; ?>