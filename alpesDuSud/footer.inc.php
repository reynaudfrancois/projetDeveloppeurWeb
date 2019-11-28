		<footer>

			<form action="commentairePost.php" method="POST">
				<div>
					<label for="name">Votre nom *</label> 
					<input type="text" name="name" id="name" size="70" placeholder=" Nom *" value="" />
				</div>
				<div>
					<label for="firstname">Votre prénom *</label> 
					<input type="text" name="firstname" id="firstname" size="70" placeholder=" Prénom*" value="" />
				</div>
				<div>
					<label for="email">Votre email</label> 
					<input type="email" name="email" id="email" size="70" placeholder=" Email" value="" />
				</div>
				<div>
					<label for="comment">Votre commentaire *</label>
					<textarea name="comment" id="comment" placeholder=" Commentaire *"></textarea>
				</div>				
				<div>
					<input type="submit" value="Valider" />
				</div>
			</form>
			
			<div id="findMe">				
				<h3>RETROUVEZ-MOI</h3>
				<div>
					<a href="contact.php"><i class="fas fa-envelope"></i></a>
					<a href="https://www.facebook.com/fran.cisco.376043" target="new"><i class="fab fa-facebook-square"></i></a>
					<a href="https://www.instagram.com/n0mmade" target="new"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCnp9vbWd4sw0SnbX8Nw0EIQ" target="new"><i class="fab fa-youtube"></i></a>
				</div>				
			</div>

			<div id="copyright">
				<small>Copyright © 2019 François Reynaud</small>
			</div>

		</footer>

	</body>

</html>