<?php 
	include "header.inc.php";
	include "appelBDD.php";
?> 

<main class="general" id="commentaires">

	<div>		
			
		<h2>COMMENTAIRES</h2>				

		<button class="button" id="addComment">AJOUTER UN COMMENTAIRE<br><i class="fas fa-angle-down" id="faAngle"></i></button>

		<form id="commentForm" action="minichatPOST.php" method="post" role="form">
		
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
				<label for="comment">Votre commentaire *</label>
				<textarea name="comment" rows="20px" cols="100px" id="comment"></textarea>
			</div>

			<div id="required">				
				<p><strong>* Ces informations sont requises.</strong></p>
			</div>
			
			<div><input type="submit" class="button" value="Envoyer" /></div>

		</form>

		<script type="text/javascript" src="view/javascript/comments.js"></script>
					
	</div>

</main>	

<?php include "affichageDesMessages.php"; ?>

<?php include "footer.inc.php"; ?>