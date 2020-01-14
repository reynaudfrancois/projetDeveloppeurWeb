<?php
//appel de la BDD "test"
try
	{
		$db  = new PDO("mysql:host=localhost;dbname=comments;charset=utf8", "freynaut", "admin2018");
	}
	/*message d"erreur au cas où il n"y ait pas de lignes (entrées) trouvées avec fetch()*/
catch(Exception $e)
	{
		die("Erreur : ".$e->getMessage());		
	}