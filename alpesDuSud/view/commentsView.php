<?php  
ob_start();
require"header.inc.php";
$header = ob_get_clean();
?>

<?php ob_start(); ?>

<main id="comments">

	<div>		
			
		<h2 class="generalTitle">LES COMMENTAIRES</h2>				

		<button class="button" id="addComment">AJOUTER UN COMMENTAIRE<br /><i class="fas fa-angle-down" id="faAngle"></i></button>

		<form id="commentForm" action="comments.php?action=addComment" method="post" role="form">

			<div id="error" style="color: <?php if ($error != '') {echo 'red;';} ?>">
				<?= $error ?>
			</div>
		
			<div class="field contactInformations">
				<label for="name">Votre nom *</label>
				<input type="text" name="name" id="name" value="" />
			</div>

			<div class="field contactInformations">
				<label for="firstname">Votre prénom *</label>
				<input type="text" name="firstname" id="firstname" value="" />
			</div>

			<div class="field contactInformations">
				<label for="email">Votre email</label>
				<input type="email" name="email" id="email" value="" />
			</div>

			<div class="field">
				<label for="content">Votre commentaire *</label>
				<textarea name="content" rows="20px" cols="100px" id="content" value=""></textarea>
			</div>

			<div id="required">				
				<p><strong>* Ces informations sont requises.</strong></p>
			</div>
			
			<div><input type="submit" class="button" value="Envoyer" /></div>

		</form>

		<script type="text/javascript" src="../public/javascript/comments.js"></script>
					
	</div>

	<?php
	if ($nbComments == 0) { 
	?>
		<p class="justifyAlign" id="nbComments"><em><strong>Aucun commentaire</strong></em></p>
	<?php 
	} else {
		if ($nbComments == 1) {
	?>
			<p class="justifyAlign" id="nbComments"><em><strong><?=  $nbComments ?> commentaire</strong></em></p>
	<?php
		} else { 
	?>
			<p class="justifyAlign" id="nbComments"><em><strong><?=  $nbComments ?> commentaires</strong></em></p>
	<?php 
		}
		while ($data=$reqAllComments->fetch()) {
	?>
			<hr />
			<p class="justifyAlign"><strong><?= htmlspecialchars($data["firstname"]) . " " . htmlspecialchars($data["name"]) ?></strong><?= htmlspecialchars($data["creationDate"]) ?></p>
			<p class="justifyAlign"><?= htmlspecialchars($data["content"]) ?></p>
	<?php 
		}
		$reqAllComments->closeCursor();
	}
	?>

	<img src="../public/images/imageDeFond.JPG" alt="Névé" />

</main>	

<?php $main = ob_get_clean(); ?>

<?php
ob_start();
require "footer.inc.php";
$footer = ob_get_clean();
?>

<?php require "commentsTemplate.php"; ?>