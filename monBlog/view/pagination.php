<?php

	//on affiche les numéros de pages qui constituent les liens vers chaque page
	echo "<nav class='center'>PAGES : ";
	for ($i=1 ; $i<=$nbPages ; $i++) {
		echo "<a href='index.php?page=" . $i . "'>" . $i . "</a> ";
	}
	echo "</nav>";

	// ctype_digit vérifie si tous les carctères de la chaine sont des chiffres
	if(!empty($_GET["page"]) AND ctype_digit($_GET["page"]) AND $_GET["page"]<=$nbPages AND $_GET["page"]>=1) {
		$page=$_GET["page"];
	} else {
		$_GET["page"]=1;
		$page=$_GET["page"];
	}

	echo "<h3>Page " . $page . "</h3>";
	var_dump(is_numeric($_GET["page"]));
	

	var_dump(ctype_digit($_GET["page"]));
	

?>