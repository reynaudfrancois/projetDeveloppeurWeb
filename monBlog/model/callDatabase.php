<?php
	try {
		$bdd  = new PDO("mysql:host=localhost;dbname=randonnee;charset=utf8", "freynaut", "admin2018");
	}
	catch(Exception $e) {
		die("Erreur : ".$e->getMessage());		
	}
?>