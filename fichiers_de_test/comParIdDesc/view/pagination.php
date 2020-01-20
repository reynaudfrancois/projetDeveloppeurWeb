
<?php
//on choisit le nimbre de messages maximum par page
$nbMessagesParPage = 10;

//on calcule le nombre de pages nécessaires en divisant le total des messages par le nombre de messages par page ; la fonction 'ceil' arrondit à l'entier supérieur
$nbPages=ceil($totalDesMessages/$nbMessagesParPage);

//on affiche les numéros de pages qui constituent les liens vers chaque page
echo 'page : ';
for ($i=1 ; $i <= $nbPages ; $i++)
{
	echo '<a href=".//index.php?page=' . $i . '">' . $i . '</a> ';
}

if(!empty($_GET['page']) AND $_GET['page']<=$nbPages AND $_GET['page']>=1)
{
	$page=$_GET['page'];
}
else
{
	$_GET['page']=1;
	$page=1;
}

?>