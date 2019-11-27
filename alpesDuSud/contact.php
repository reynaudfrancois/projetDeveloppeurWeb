<?php

	$name = $firstname = $email = $message = $comment = "";
	$success = false;
	$emailTo = "freynaut@laposte.net";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = securityOfInput($_POST["name"]); // on récupère le texte de l'input ayant pour attribut name "name"
		$firstname = securityOfInput ($_POST["firstname"]);
		$email = securityOfInput ($_POST["email"]);
		$message = securityOfInput ($_POST["message"]);
		$success = true;
		$emailText = "";

		if (empty($name) || empty($firstname) || empty($email) || empty($message)) {
			$comment = "Tous les champs sont obligatoires !";
			$success = false;
		} else if (!validEmail($email)) { // si l'email n'est pas valide ($email=false)
			$comment = "Votre email doit être valide !";
			$success = false;
		} else {
			$emailText .= "Name : $name\n"; // "\n" signifie retour à la ligne
			$emailText .= "Firstname : $firstname\n";
			$emailText .= "Email : $email\n\n";
			$emailText .= "Message :\n$message\n";
		}

		if ($success == true) {
			$headers = "From: $name $firstname <$email>\r\nReply-To: $email";
			mail($emailTo, "Un message de votre site", $emailText, $headers);
			// la fonction mail permet d'envoyer l'email
			// les arguments sont : destinataire, sujet du mail, contenu du mail, les en-tête du mail (from, reply)
			$name = $firstname = $email = $message = ""; // permet de vider les input des champs une fois le message envoyé
			$comment = "Votre message a bien été envoyé.\n";
		}
	}

	function securityOfInput($input) { // vérification de la sécurité des input
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}

	function validEmail($mail) { // true si l'email est valide, false sinon
		return filter_var($mail, FILTER_VALIDATE_EMAIL);
	}

?>

<?php include "header.inc.php"; ?> 

<main class="general" id="contact">

	<div>		
			
		<h2>CONTACT</h2>				

		<form id="contactForm" method="post" action="/alpesDuSud0/contact.php#thanks" role="form">

			<div class="field contactInformations">
				<label for="name">Votre nom *</label>
				<input type="text" id="name" name="name" size="70" placeholder=" NOM *" value="<?php echo $name; ?>">
			</div>

			<div class="field contactInformations">
				<label for="firstname">Votre prénom *</label>
				<input type="text" id="firstname" name="firstname" size="70" placeholder=" Prénom *" value="<?php echo $firstname; ?>">
			</div>

			<div class="field contactInformations">
				<label for="email">Votre email *</label>
				<input type="text" id="email" name="email" size="70" placeholder=" Email *" value="<?php echo $email; ?>">
			</div>

			<div class="field">
				<label for="message">Votre message *</label>
				<textarea id="message" name="message" placeholder=" Message *"><?php echo $message; ?></textarea>
			</div>

			<div id="required">				
				<p><strong>* Ces informations sont requises.</strong></p>
			</div>

			<div>
				<input type="submit" id="send" value="Envoyer">
			</div>

			<p id="thanks" style="color: <?php if ($success == false) {echo 'red;';} ?>" >
				<?php echo $comment; ?>
			</p>

		</form>
					
	</div>

</main>	

<?php include "footer.inc.php"; ?>