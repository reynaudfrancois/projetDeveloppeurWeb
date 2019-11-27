<!--include 'view/formulaire.php';

include 'model/appelBDD.php';

include 'view/rafraichir.php';

include 'model/comptageDesMessages.php';

include 'view/pagination.php';

include 'model/affichageDesMessages.php';-->

<?php 
	include "model/callDatabase.php";
	include "controller/paging.php";
	
	include "header.inc.php";
	include "model/displayAbstractArticle.php";
	include "footer.inc.php";
?>