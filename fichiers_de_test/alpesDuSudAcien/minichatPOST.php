<?php



/*if (isset($_POST['name']) AND $_POST['name']!='')
{

	if (isset($_POST['firstname']) AND $_POST['firstname']!='')
	{
		include 'appelBDD.php';
		//on définit les variables 'name' et 'firstname'
		$name = $_POST['name'];
		$firstname = $_POST['firstname'];
		//on envoie notre requete à la table 'minichat'
		$requete=$bdd->prepare('INSERT INTO minichat(name, firstname) VALUES(:name, :firstname)');
		$requete->execute(array(
			'name' => $name,
			'firstname' => $firstname
		));
		var_dump($name);
		var_dump($firstname);
		var_dump($bdd);

		header('Location: index.php');
	}
	else
	{
		echo '<p>Tu dois rentrer un firstname</p>';
		echo '<p><a href="index.php">Clique ici</a> pour revenir à la page de formulaire.</p>';
	}
}

else
{
	echo '<p>Tu dois rentrer un prénom. <a href="index.php">Clique ici</a> pour revenir à la page de formulaire.</p>';
}*/


$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['name']) AND $_POST['name']!='' AND isset($_POST['firstname']) AND $_POST['firstname']!='' AND isset($_POST['content']) AND $_POST['content']!='')
	{
			include 'appelBDD.php';
			//on définit les variables 'name' et 'firstname'
			$name = $_POST['name'];
			$firstname = $_POST['firstname'];
			if (isset($_POST['email']) AND $_POST['email']!='') {
				$email = $_POST['email'];
			} else {
				$email = "UNKNOWN";
			}
			$content = $_POST['content'];
			//on envoie notre requete à la table 'minichat'
			$requete=$bdd->prepare('INSERT INTO message (name, firstname, email, content) VALUES(:name, :firstname, :email, :content)');
			$requete->execute(array(
				'name' => $name,
				'firstname' => $firstname,
				'email' => $email,
				'content' => $content
			));

			/*header('Location: commentaires.php');*/
	}

	else
	{
		//echo '<p>Tu dois obligatoirement rentrer un nom, un prénom et un commentaire. <a href="commentaires.php#comment">Clique ici</a> pour revenir à la page des commentaires.</p>';
		$error = '<p>Vous devez obligatoirement rentrer un nom, un prénom et un commentaire.</p>';
	}
}


?>