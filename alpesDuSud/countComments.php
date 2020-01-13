<?php

$retour=$bdd->prepare("SELECT COUNT(*) AS nbMessages FROM minichat");

//on execute la requete
$retour->execute();
//on renvoie le résultat sous forme de tableau
$donnees=$retour->fetch();
//var_dump($donnees);

//on récupère la donnée "nbMessages" du tableau, cad le nombre de messages total
$totalDesMessages=$donnees["nbMessages"];
//var_dump($totalDesMessages);