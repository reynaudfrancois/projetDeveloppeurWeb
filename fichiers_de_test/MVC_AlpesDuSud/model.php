<?php 

// Je traite l'envoi des données par formulaire

function postComment() {
	$db = dbConnect();
	$error = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["name"]) AND $_POST["name"]!="" AND isset($_POST["firstname"]) AND $_POST["firstname"]!="" AND isset($_POST["content"]) AND $_POST["content"]!="") {
			//include "appelBDD.php";
			//on définit les variables "name" et "firstname"
			$name = $_POST["name"];
			$firstname = $_POST["firstname"];
			if (isset($_POST["email"]) AND $_POST["email"]!="") {
				$email = $_POST["email"];
			} else {
				$email = "UNKNOWN";
			}
			$content = $_POST["content"];
			//on envoie notre requete à la table "message"
			$requete = $db->prepare("INSERT INTO message(name, firstname, email, content) VALUES(:name, :firstname, :email, :content)");
			$requete->execute(array(
				"name" => $name,
				"firstname" => $firstname,
				"email" => $email,
				"content" => $content
			));

			$error = '';

		header("Location: comments.php");
		} else {
			//echo "<p>Tu dois obligatoirement rentrer un nom, un prénom et un commentaire. <a href="commentaires.php#comment">Clique ici</a> pour revenir à la page des commentaires.</p>";
			$error = "<p>Vous devez obligatoirement rentrer un nom, un prénom et un commentaire.</p>";


		}
		return $error;
	}
}

function countComments () {
	$db = dbConnect();
	$retour=$db->prepare("SELECT COUNT(*) AS nbMessages FROM message");

	//on execute la requete
	$retour->execute();
	//on renvoie le résultat sous forme de tableau
	$donnees=$retour->fetch();
	//var_dump($donnees);

	//on récupère la donnée "nbMessages" du tableau, cad le nombre de messages total
	$totalDesMessages=$donnees["nbMessages"];
	//var_dump($totalDesMessages);
	return $totalDesMessages;
}

function displayComments () {
	$db = dbConnect();
	$reponse=$db->query("SELECT name, firstname, content, DATE_FORMAT(dated, 'le %d/%m/%Y à %H:%i') AS dateCreationFr  FROM message ORDER BY id DESC");
	return $reponse;
}

// J'appelle ma BDD

function dbConnect() {
	try
		{
			$db  = new PDO("mysql:host=localhost;dbname=comments;charset=utf8", "freynaut", "admin2018");
			return $db;
		}
		/*message d"erreur au cas où il n"y ait pas de lignes (entrées) trouvées avec fetch()*/
	catch(Exception $e)
		{
			die("Erreur : ".$e->getMessage());		
		}
}