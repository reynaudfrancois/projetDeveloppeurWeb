<!-- Affichage -->

<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>

<?php
while($data=$posts->fetch()) {
?>
	<div class="news">
		<h4>
			<?= $data['id']; ?>
		</h4> 
		<h3>
			<?= htmlspecialchars($data['titre']); ?>
			<em>, le <?php echo $data['dateCreationFr']; ?></em>
		</h3>
		<p>
			<?= nl2br(htmlspecialchars($data['contenu'])); ?>
			<br />
			<em><a <?= 'href ="index.php?action=post&id=' . $data['id'] .'"'; ?>>Commentaires</a></em>
		</p>
	</div>
<?php
}
$posts->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>

<!-- A noter que les petites portions de codes en PHP, notamment les "echo" ne s'isolent pas dans un fichier dédié, sinon cela risque de faire beaucoup trop de fichiers dédiés.
Le code PHP n'est isolé que si on fait des opérations ou des calculs complexes, ou des requêtes SQL. -->