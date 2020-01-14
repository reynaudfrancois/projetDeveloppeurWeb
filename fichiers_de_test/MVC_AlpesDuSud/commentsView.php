<?php require "header.inc.php"; ?>

<main class="general" id="comments">

	<div>		
			
		<h2 class="generalTitle">LES COMMENTAIRES</h2>				

		<button class="button" id="addComment">AJOUTER UN COMMENTAIRE<br /><i class="fas fa-angle-down" id="faAngle"></i></button>

		<form id="commentForm" action="comments.php" method="post" role="form">

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
				<textarea name="content" rows="20px" cols="100px" id="content"></textarea>
			</div>

			<div id="required">				
				<p><strong>* Ces informations sont requises.</strong></p>
			</div>
			
			<div><input type="submit" class="button" value="Envoyer" /></div>

		</form>

		<script type="text/javascript" src="view/javascript/comments.js"></script>
					
	</div>

	<?php
	if ($nbTotalComments == 0) { 
	?>
		<p class='justifyAlign' id='nbComments'><em><strong>Aucun commentaire</strong></em></p>
	<?php 
	} else {
		if ($nbTotalComments == 1) {
	?>
			<p class='justifyAlign' id='nbComments'><em><strong><?=  $nbTotalComments ?> commentaire</strong></em></p>
	<?php
		} else { 
	?>
			<p class='justifyAlign' id='nbComments'><em><strong><?=  $nbTotalComments ?> commentaires</strong></em></p>
	<?php 
		}
		while ($donnees=$reponse->fetch()) {
	?>
			<hr />
			<p class='justifyAlign'><strong><?= htmlspecialchars($donnees["firstname"]) . " " . htmlspecialchars($donnees["name"]) ?></strong><?= htmlspecialchars($donnees["dateCreationFr"]) ?></p>
			<p class='justifyAlign'><?= htmlspecialchars($donnees["content"]) ?></p>
	<?php 
		}
		$reponse->closeCursor();
	} 
	?>

	<img src='view/images/imageDeFond.JPG' alt='imgComments' />

</main>	

<?php require "footer.inc.php"; ?>
			
			

