<?php 

// J'appelle ma BDD

function dbConnect() {
	try
		{
			$db  = new PDO("mysql:host=localhost;dbname=comments;charset=utf8", "freynaut", "admin2018");
		}
		/*message d"erreur au cas où il n"y ait pas de lignes (entrées) trouvées avec fetch()*/
	catch(Exception $e)
		{
			die("Erreur : ".$e->getMessage());		
		}
}
// Je traite l'envoi des données par formulaire

function postComment() {
	$error = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["name"]) AND $_POST["name"]!="" AND isset($_POST["firstname"]) AND $_POST["firstname"]!="" AND isset($_POST["message"]) AND $_POST["message"]!="") {
			//include "appelBDD.php";
			//on définit les variables "name" et "firstname"
			$name = $_POST["name"];
			$firstname = $_POST["firstname"];
			if (isset($_POST["email"]) AND $_POST["email"]!="") {
				$email = $_POST["email"];
			} else {
				$email = "UNKNOWN";
			}
			$message = $_POST["message"];
			//on envoie notre requete à la table "message"
			$requete=$db->prepare("INSERT INTO message(name, firstname, email, message) VALUES(:name, :firstname, :email, :message)");
			$requete->execute(array(
				"name" => $name,
				"firstname" => $firstname,
				"email" => $email,
				"message" => $message
			));

				/*header("Location: commentaires.php");*/
		} else {
			//echo "<p>Tu dois obligatoirement rentrer un nom, un prénom et un commentaire. <a href="commentaires.php#comment">Clique ici</a> pour revenir à la page des commentaires.</p>";
			$error = "<p>Vous devez obligatoirement rentrer un nom, un prénom et un commentaire.</p>";
		}
	}
}

function countComments () {
	$retour=$db->prepare("SELECT COUNT(*) AS nbMessages FROM message");

	//on execute la requete
	$retour->execute();
	//on renvoie le résultat sous forme de tableau
	$donnees=$retour->fetch();
	//var_dump($donnees);

	//on récupère la donnée "nbMessages" du tableau, cad le nombre de messages total
	$totalDesMessages=$donnees["nbMessages"];
	//var_dump($totalDesMessages);
}

function displayComments () {
	$reponse=$db->query("SELECT name, firstname, comment, DATE_FORMAT(dated, 'le %d/%m/%Y à %H:%i') AS dateCreationFr  FROM message ORDER BY id DESC");
}

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

		<main class="general" id="commentaires">

			<div>		
					
				<h2 class="generalTitle">LES COMMENTAIRES</h2>				

				<button class="button" id="addComment">AJOUTER UN COMMENTAIRE<br /><i class="fas fa-angle-down" id="faAngle"></i></button>

				<form id="commentForm" action="commentaires.php" method="post" role="form">

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
						<label for="message">Votre commentaire *</label>
						<textarea name="message" rows="20px" cols="100px" id="message"></textarea>
					</div>

					<div id="required">				
						<p><strong>* Ces informations sont requises.</strong></p>
					</div>
					
					<div><input type="submit" class="button" value="Envoyer" /></div>

				</form>

				<script type="text/javascript" src="view/javascript/comments.js"></script>
							
			</div>

			<?php

			if ($totalDesMessages == 0) { 
			?>
				<p class='justifyAlign' id='nbComments'><em><strong>Aucun commentaire</strong></em></p>
			<?php 
			} else {
				if ($totalDesMessages == 1) {
			?>
					<p class='justifyAlign' id='nbComments'><em><strong>" . $totalDesMessages . " commentaire</strong></em></p>
			<?php
				} else { 
			?>
					<p class='justifyAlign' id='nbComments'><em><strong>" . $totalDesMessages . " commentaires</strong></em></p>
			<?php 
				}
				while ($donnees=$reponse->fetch()) {
			?>
					<hr />
					<p class='justifyAlign'><strong><?= htmlspecialchars($donnees["firstname"]) . " " . htmlspecialchars($donnees["name"]) ?></strong><?= htmlspecialchars($donnees["dateCreationFr"]) ?></p>
					<p class='justifyAlign'><?= htmlspecialchars($donnees["comment"]) ?></p>
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