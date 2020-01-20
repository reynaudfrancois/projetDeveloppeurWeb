<?php



if (isset($_POST['pseudo']) AND $_POST['pseudo']!='')
{

	if (isset($_POST['message']) AND $_POST['message']!='')
	{
		include '../model/appelBDD.php';
		//on définit les variables 'pseudo' et 'message'
		$pseudo = $_POST['pseudo'];
		$message = $_POST['message'];
		//on envoie notre requete à la table 'minichat'
		$requete=$bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
		$requete->execute(array(
			'pseudo' => $pseudo,
			'message' => $message
		));
		var_dump($pseudo);
		var_dump($message);
		var_dump($bdd);

		header('Location: ../index.php');
	}
	else
	{
		echo '<p>Tu dois rentrer un message</p>';
		echo '<p><a href="../index.php">Clique ici</a> pour revenir à la page de formulaire.</p>';
	}
}

else
{
	echo '<p>Tu dois rentrer un prénom. <a href="../index.php">Clique ici</a> pour revenir à la page de formulaire.</p>';
}



?>