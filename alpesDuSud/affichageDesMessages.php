<?php




	//NE PAS OUBLIER DE METTRE DES DOUBLES GUILLEMETS QUAND ON UTILISE LE SYMBOLE $ DANS UNE REQUETE
	$reponse=$bdd->query("SELECT name, firstname, comment, DATE_FORMAT(date_publi, 'le %d/%m/%Y à %H:%i') AS dateCreationFr  FROM minichat ORDER BY id DESC");
	
	while ($donnees=$reponse->fetch())
	{
		echo 
			'<p><strong>' . htmlspecialchars($donnees['firstname']) . ' ' . htmlspecialchars($donnees['name']) . '</strong>, ' . htmlspecialchars($donnees['dateCreationFr']) . '</p>
			<p>' . htmlspecialchars($donnees['comment']) . '</p>
			<hr>';
	}

	$reponse->closeCursor();

?>