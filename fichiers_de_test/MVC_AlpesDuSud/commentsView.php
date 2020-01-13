<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">-->
		<link rel="stylesheet" type="text/css" href="view/css/normalize-css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="view/fontawesome/css/all.css" />
		<link rel="stylesheet" href="view/css/style.css" />
		<title>La traversée des Alpes du Sud</title>
	</head>

	<body>
		
		<header>

			<nav>
				<a href="index.php">Accueil</a>
				<a href="mountains.php">Massifs</a>
				<a href="path.php">Itinéraire</a>
				<a href="story.php">Récit</a>
				<a href="photos.php">Photos</a>
				<a href="comments.php">Commentaires</a>
			</nav>

			<div id="title">
				<h1>La traversée des Alpes Du Sud</h1>
				<h2>1-21/6/2015</h2>
				<h3>par François REYNAUD</h3>
			</div>

			<div id="blog"><a href="#" id="linkBlog">Pour suivre mon fil d'actualités sur mon blog, cliquez ici.</a></div>

		</header>

		<main class="general" id="comments">

			<div>		
					
				<h2 class="generalTitle">LES COMMENTAIRES</h2>				

				<button class="button" id="addComment">AJOUTER UN COMMENTAIRE<br /><i class="fas fa-angle-down" id="faAngle"></i></button>

				<form id="commentForm" action="comments.php" method="post" role="form">

					<div id="error" style="color: <?php if ($error != '') {echo 'red;';} ?>">
						<?= $error ?>
					</div>
				
					<div class="field contactInformations">
						<label for="name">Votre nom *</label>
						<input type="text" name="name" id="name" value="" />
					</div>

					<div class="field contactInformations">
						<label for="firstname">Votre prénom *</label>
						<input type="text" name="firstname" id="firstname" value="" />
					</div>

					<div class="field contactInformations">
						<label for="email">Votre email</label>
						<input type="email" name="email" id="email" value="" />
					</div>

					<div class="field">
						<label for="content">Votre commentaire *</label>
						<textarea name="content" rows="20px" cols="100px" id="content"></textarea>
					</div>

					<div id="required">				
						<p><strong>* Ces informations sont requises.</strong></p>
					</div>
					
					<div><input type="submit" class="button" value="Envoyer" /></div>

				</form>

				<script type="text/javascript" src="view/javascript/comments.js"></script>
							
			</div>

			<?php

			if ($nbTotalComments == 0) { 
			?>
				<p class='justifyAlign' id='nbComments'><em><strong>Aucun commentaire</strong></em></p>
			<?php 
			} else {
				if ($nbTotalComments == 1) {
			?>
					<p class='justifyAlign' id='nbComments'><em><strong><?=  $nbTotalComments ?> commentaire</strong></em></p>
			<?php
				} else { 
			?>
					<p class='justifyAlign' id='nbComments'><em><strong><?=  $nbTotalComments ?> commentaires</strong></em></p>
			<?php 
				}
				while ($donnees=$reponse->fetch()) {
			?>
					<hr />
					<p class='justifyAlign'><strong><?= htmlspecialchars($donnees["firstname"]) . " " . htmlspecialchars($donnees["name"]) ?></strong><?= htmlspecialchars($donnees["dateCreationFr"]) ?></p>
					<p class='justifyAlign'><?= htmlspecialchars($donnees["content"]) ?></p>
			<?php 
				}
				$reponse->closeCursor();
			} 
			?>

			<img src='view/images/imageDeFond.JPG' alt='imgComments' />

		</main>	

		<footer id="footer">
			
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