<main>

	<?php include "view/pagination.php"; ?>

	<?php

		$firstArticleDisplayed = $nbArticlesPerPage*($page-1);


		//NE PAS OUBLIER DE METTRE DES DOUBLES GUILLEMETS QUAND ON UTILISE LE SYMBOLE $ DANS UNE REQUETE
		$reponse=$bdd->query("SELECT * FROM vue_article ORDER BY id DESC LIMIT $firstArticleDisplayed, $nbArticlesPerPage");

		while ($donnees=$reponse->fetch()){
			echo 
				"<div class='abstractArticle'>
					<aside class='asideAbstract'>
						<h3>" . $donnees["lieu"] . "</h3>
						<img src='" . $donnees["image"] . "' alt='img" . $donnees["id"] . "' class='imgAbstract'>
						<p><small><small><em>Mis en ligne : " . $donnees["date"] . "</em></small></small></p>
					</aside>
					<section class='sectionAbstract'>
						<h2>" . $donnees["titre"] . "</h2>				
						<article>" . $donnees["resume"] . "</article>
						<button class='readArticle'> <a href='displayArticle.php?numero=" . $donnees["id"] . "' class='readArticle'> Lire </a> </button>
					</section>
				</div>";
		}

		$reponse->closeCursor();

	?>

</main>