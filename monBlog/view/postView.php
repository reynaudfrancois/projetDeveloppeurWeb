<?php $title = "François REYNAUD - Récit de voyages"; ?>

<?php ob_start(); ?>

<?php include "header.inc.php" ?>

<main>

	<article>

		<p><a href="index.php?action=listPostsView"><small>Retour à la liste des billets</small></a></p>

		<div>
			<h1 class="title"><?= $post["title"] ?></h1>
			<h3 class="title"><?= $post["location"] ?></h3>
			<h3 class="title"><em><?= $post["period"] ?></em></h3>
		</div>

		<div id="imgCenter">
			<?= "<img class='imgArticle' src='" . $post["image"] . "' alt='image_" . $post["id"] . "' />" ?>
		</div>

		<div class="paragraph">
			<p><?= $post["paragraph1"] ?></p>
			<div class="imgParagraph">
				<?= "<img src='" . $post["image1"] . "' alt='image1_" . $post['id'] . "' />" ?>
				<h3><?= $post["title_image1"] ?></h3>
			</div>
			<div class="imgParagraph">
				<?= "<img src='" . $post["image2"] . "' alt='image2_" . $post['id'] . "' />" ?>
				<h3><?= $post["title_image2"] ?></h3>
			</div>
		</div>

		<div class="paragraph">
			<p><?= $post["paragraph2"] ?></p>
			<div class="imgParagraph">
				<?= "<img src='" . $post["image3"] . "' alt='image3_" . $post['id'] . "' />" ?>
				<h3><?= $post["title_image3"] ?></h3>
			</div>
			<div class="imgParagraph">
				<?= "<img src='" . $post["image4"] . "' alt='image4_" . $post['id'] . "' />" ?>
				<h3><?= $post["title_image4"] ?></h3>
			</div>
		</div>

		<div class="paragraph">
			<p><?= $post["paragraph3"] ?></p>
			<div class="imgParagraph">
				<?= "<img src='" . $post["image5"] . "' alt='image5_" . $post['id'] . "' />" ?>
				<h3><?= $post["title_image5"] ?></h3>
			</div>
			<div class="imgParagraph">
				<?= "<img src='" . $post["image6"] . "' alt='image6_" . $post['id'] . "' />" ?>
				<h3><?= $post["title_image6"] ?></h3>
			</div>
		</div>

		<div class="paragraph">
			<p><?= $post["paragraph4"] ?></p>
			<div class="imgParagraph">
				<?= "<img src='" . $post["image7"] . "' alt='image7_" . $post['id'] . "' />" ?>
				<h3><?= $post["title_image7"] ?></h3>
			</div>
			<div class="imgParagraph">
				<?= "<img src='" . $post["image8"] . "' alt='image8_" . $post['id'] . "' />" ?>
				<h3><?= $post["title_image8"] ?></h3>
			</div>
		</div>

		<div class="paragraph">
			<p><?= $post["paragraph5"] ?></p>
		</div>

		<h4><?= $post["dated"] ?></h4>

	</article>

	<div id="comments">

		<h2 class="generalTitle">LES COMMENTAIRES</h2>
		
		<button class="button" id="addComment">AJOUTER UN COMMENTAIRE<br /><i class="fas fa-angle-down" id="faAngle"></i></button>

		<?= "<form action='index.php?action=addComment&id=" . $post['id'] . "' method='post' role='form' id='commentForm'>" ?>
			<div id="error" style="color: <?php if ($error != '') {echo 'red;';} ?>">
				<?= $error ?>
			</div>
			<div class="field contactInformations">
				<label for="name">Votre nom *</label><br>
				<input type="text" id="name" name="name" value="">
			</div>
			<div class="field contactInformations">
				<label for="firstname">Votre prénom *</label><br>
				<input type="text" id="firstname" name="firstname" value="">
			</div>
			<div class="field contactInformations">
				<label for="name">Votre email</label><br>
				<input type="email" id="email" name="email" value="">
			</div>
			<div class="field">
				<label for="content">Votre commentaire *</label><br>
				<textarea id="content" rows="20px" cols="100px" name="content"></textarea>
			</div>
			<div id="required">
				<p><strong>* Ces informations sont requises.</strong></p>
			</div>
			<div>
				<input type="submit" name="send" value="Envoyer" class="button">
			</div>
		<?= "</form>" ?>

		<script type="text/javascript" src="public/javascript/script.js"></script>

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
			<p class="justifyAlign"><strong><?= htmlspecialchars($data["firstname"]) . " " . htmlspecialchars($data["name"]) ?></strong><?= htmlspecialchars($data["dateComment"]) ?></p>
			<p class="justifyAlign"><?= htmlspecialchars($data["content"]) ?></p>
	<?php 
		}
		$reqAllComments->closeCursor();
	}
	?>

	<p><a href="index.php?action=listPostsView"><small>Retour à la liste des billets</small></a></p>

</main>

<?php include "footer.inc.php>" ?>

<?php $content = ob_get_clean() ?>

<?php require "template.php" ?>