<?php

$premierMessageAffiche = 10*($page-1);


	//NE PAS OUBLIER DE METTRE DES DOUBLES GUILLEMETS QUAND ON UTILISE LE SYMBOLE $ DANS UNE REQUETE
	$reponse=$bdd->query("SELECT * FROM minichat ORDER BY id DESC LIMIT $premierMessageAffiche, $nbMessagesParPage");
	var_dump($reponse);
	var_dump($totalDesMessages);
	var_dump($premierMessageAffiche);
	var_dump($nbMessagesParPage);
	while ($donnees=$reponse->fetch())
	{
		echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
	}

	$reponse->closeCursor();

?>