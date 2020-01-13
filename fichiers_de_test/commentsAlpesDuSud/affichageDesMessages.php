<?php

//NE PAS OUBLIER DE METTRE DES DOUBLES GUILLEMETS QUAND ON UTILISE LE SYMBOLE $ DANS UNE REQUETE
$reponse=$bdd->query("SELECT name, firstname, comment, DATE_FORMAT(date_publi, 'le %d/%m/%Y à %H:%i') AS dateCreationFr  FROM minichat ORDER BY id DESC");

if ($totalDesMessages != 0 AND $totalDesMessages!= 1) {
	echo "<p class='justifyAlign' id='nbComments'><em><strong>" . $totalDesMessages . " commentaires</strong></em></p>";
} else if ($totalDesMessages == 0) {
	echo "<p class='justifyAlign' id='nbComments'><em><strong>Aucun commentaire</strong></em></p>";
} else {
	echo "<p class='justifyAlign' id='nbComments'><em><strong>" . $totalDesMessages . " commentaire</strong></em></p>";
}

while ($donnees=$reponse->fetch())
{
	echo 
		"<hr />
		<p class='justifyAlign'><strong>" . htmlspecialchars($donnees["firstname"]) . " " . htmlspecialchars($donnees["name"]) . "</strong>, " . htmlspecialchars($donnees["dateCreationFr"]) . "</p>
		<p class='justifyAlign'>" . htmlspecialchars($donnees["comment"]) . "</p>";
}

$reponse->closeCursor();

echo "<img src='view/images/imageDeFond.JPG' alt='imgComments' />";