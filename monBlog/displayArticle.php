<?php include "header.inc.php"; ?>

<main>

	<?php

		include "model/callDatabase.php";

		//NE PAS OUBLIER DE METTRE DES DOUBLES GUILLEMETS QUAND ON UTILISE LE SYMBOLE $ DANS UNE reponseUETE
		$reponse=$bdd->prepare("SELECT * FROM vue_article WHERE id = ?");

		$reponse->execute(array($_GET["numero"]));
		$donnees=$reponse->fetch();

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
				</section>
			</div>";

		$reponse->closeCursor();

		/*$reponse=$bdd->prepare("SELECT author, comment, DATE_FORMAT(dateComment, '%d/%m/%Y à %H:%i:%s' as dateCommentFr FROM comments WHERE idArticle = ? ORDER BY dateComment DESC");

		while($donnees=$reponse->fetch()) {
			echo '<p><strong>' . htmlspecialchars($donnees['auteur']) . '</strong> - ' . $donnees['dateCommentaireFr'] . '</p>';
			echo '<p>' . nl2br(htmlspecialchars($donnees['commentaire'])) . '</p>';
		}

		$reponse->closeCursor();*/

	?>

</main>