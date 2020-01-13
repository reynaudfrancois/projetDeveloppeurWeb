<main>

	<?php include "view/pagination.php"; ?>

	<?php

		$firstArticleDisplayed = $nbArticlesPerPage*($page-1);


		//NE PAS OUBLIER DE METTRE DES DOUBLES GUILLEMETS QUAND ON UTILISE LE SYMBOLE $ DANS UNE REQUETE
		$reponse=$db->query("SELECT * FROM view_abstracts ORDER BY id DESC LIMIT $firstArticleDisplayed, $nbArticlesPerPage");

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