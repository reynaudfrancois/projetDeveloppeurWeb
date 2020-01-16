<?php $title = "François REYNAUD - Récit de voayage"; ?>

<?php ob_start(); ?>

<?php include "header.inc.php" ?>

<main>

	<article>

		<p><a href="index.php?action=listPostsView&page=2">Retour à la liste des billets</a></p>

		<div><?= "<img src='" . $post["image"] . "' alt='image_" . $post["id"] . "' />" ?></div>

		<div>
			<h3><?= $post["location"] ?></h3>
			<h1><?= $post["title"] ?></h1>
			<h3><?= $post["period"] ?></h3>
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

		<p><a href="index.php?action=listPostsView">Retour à la liste des billets</a></p>

	</article>

	<div class="comments">
		<h4><em>Commentaires</em></h4>

		<?php
		while ($comment=$comments->fetch()) {
		?>
			<p><strong><?= htmlspecialchars($comments["firstname"] . " ") . htmlspecialchars($comments["name"]) ?>,</strong> le <?= $comments["dateComment"] ?></p>
			<p><?= nl2br(htmlspecialchars($comments["content"])) ?></p>
		<?php
		}
		?>
	</div>

	<p><a href="index.php?action=listPostsView">Retour à la liste des billets</a></p>

</main>

<?php include "footer.inc.php>" ?>

<?php $content = ob_get_clean() ?>

<?php require "template.php" ?>