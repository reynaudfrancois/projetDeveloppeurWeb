<?php
	try {
		$db  = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "freynaut", "admin2018");
	}
	catch(Exception $e) {
		die("Erreur : ".$e->getMessage());		
	}
?>