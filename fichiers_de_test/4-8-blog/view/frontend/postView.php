<?php $title='Commentaires'; ?>

<?php ob_start(); ?>

<h1>Mon super blog !</h1>
<p><a href="index.php?action=listPosts">Retour à la liste des billets</a></p>

<p>
	<?= $post['id'] ?>
</p>
<div>
	<h3>
		<?= htmlspecialchars($post['titre']) ?>,
		<em> le <?= $post['dateCreationFr'] ?></em>
	</h3>
	<p>
		<?= nl2br(htmlspecialchars($post['contenu'])) ?>
	</p>
</div>

<h4><em>Commentaires</em></h4>

<!-- $req->closeCursor(); -->

<?php
while($comment=$comments->fetch()) {
?>
	<p><strong><?= htmlspecialchars($comment['auteur']) ?>,</strong> le <?= $comment['dateCommentaireFr'] ?></p>
	<p><?= nl2br(htmlspecialchars($comment['commentaire'])) ?></p>
<?php
}
// $comments->closeCursor();
?>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
	<div>
		<label for="auteur">Auteur</label><br>
		<input type="text" id="auteur" name="auteur">
	</div>
	<div>
		<label for="commentaire">Commentaire</label><br>
		<textarea id="commentaire" name="commentaire"></textarea>
	</div>
	<div>
		<input type="submit" name="send">
	</div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php') ?>

