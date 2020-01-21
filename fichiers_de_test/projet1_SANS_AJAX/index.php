<?php

	$firstname = $name = $email = $phone = $message = "";
	$firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
	$isSuccess = false;
	$emailTo = "freynaut@laposte.net";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$firstname = verifyInput($_POST["firstname"]); // on récupère le texte de l'input ayant pour name "firstname"
		$name = verifyInput ($_POST["name"]);
		$email = verifyInput ($_POST["email"]);
		$phone = verifyInput ($_POST["phone"]);
		$message = verifyInput ($_POST["message"]);
		$isSuccess = true;
		$emailText = "";

		if (empty($firstname)) {
			$firstnameError = "Je veux connaître ton prénom !";
			$isSuccess = false;
		} else {
			$emailText .= "Firstname: $firstname\n"; // "\n" signifie retour à la ligne
		}

		if (empty($name)) {
			$nameError = "Et oui je veux tout savoir. Même ton nom !";
			$isSuccess = false;
		} else {
			$emailText .= "Name: $name\n";
		}

		if (!isEmail($email)) { // si l'email n'est pas valide (false)
			$emailError = "T'essaies de me rouler ? C'est pas un email ça !";
			$isSuccess = false;
		} else {
			$emailText .= "Email: $email\n";
		}

		if (!isPhone($phone)) {
			$phoneError = "Que des chiffres et des espaces, stp !!!";
			$isSuccess = false;
		} else {
			$emailText .= "Phone: $phone\n";
		}

		if (empty($message)) {
			$messageError = "Qu'est-ce que tu veux me dire ?????";
			$isSuccess = false;
		} else {
			$emailText .= "Message: $message\n";
		}

		if ($isSuccess) {
			$headers = "From: $firstname $name <$email>\r\nReply-To: $email";
			mail($emailTo, "Un message de votre site", $emailText, $headers);
			// la fonction mail permet d'envoyer l'email
			// les arguments sont : destinataire, sujet du mail, contenu du mail, les en-tête du mail (from, reply)
			$firstname = $name = $email = $phone = $message = ""; // permet de vider les input des champs une fois le message envoyé
		}
	}

	function verifyInput($var) { // vérification de la sécurité des input
		$var = trim($var);
		$var = stripslashes($var);
		$varv = htmlspecialchars($var);
		return $var;
	}

	function isEmail($var) {
		return filter_var($var, FILTER_VALIDATE_EMAIL); // true si l'email est valide, false sinon
	}

	function isPhone($var) {
		return preg_match("/^[0-9 ]*$/", $var);
		// une expression régulière commence par un / et un chapeau, puis ici entre crochets "0-9" signifie qu'on demande un chiffre entre 0 et 9 ; ensuite il y a un espace : cela signifie que les caractères admis dans le champ du téléphone sonr les chiffres entre 0 et 9 et les espaces ; on ferme le crochet, puis l'étoile sihnifie qu'on peut avoir 0 caractère dans le champ, il peut être vide ;  si je veux forcer l'utilisateur à mettre au moins 1 caractère dans le champ (y compris un espace), je dois changer l'étoile en + ; l'étoile permet aussi de répéter autant de fois que le souhaite l'utilisateur les caractères spécifiés comme admis
		// preg_match me dit si $var, cad le phone rentré par l'utilisateur, respecte bien l'expression régulière qui suit(^[0-9]*$)
		// return preg_match renvoie donc true ou false
		// il existe plein d'expressions régulières pour vérfier que l'utilisateur rentre bien dans l'input ceratins types de carctères à tel ou tel endroit
	}

?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>CONTACTEZ-MOI</title>
	</head>

	<body>

		<div class="container">
			
			<div class="divider"></div>
			<div class="heading">
				<h2>CONTACTEZ-MOI</h2>
			</div>

			<div class="row">

				<div class="col-lg-10 col-lg-offset-1">
				<!-- Ici on prend 10 colonnes pour notre div et on laisse 1 colonne à droite et à gauche pour les marges-->

					<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">

						<div class="row">

							<div class="col-md-6">
								<label for="firstname">Prénom<span class="blue"> *</span></label>
								<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>">
								<p class="comment"><?php echo $firstnameError; ?></p>
							</div>

							<div class="col-md-6">
								<label for="name">Nom<span class="blue"> *</span></label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>">
								<p class="comment"><?php echo $nameError; ?></p>
							</div>

							<div class="col-md-6">
								<label for="email">Email<span class="blue"> *</span></label>
								<input type="text" id="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $email; ?>">
								<!-- Ici on remplace type="email par type="text", sinon des pop-up interfèrent avec les messages d'erreur que j'ai programmés -->
								<p class="comment"><?php echo $emailError; ?></p>
							</div>

							<div class="col-md-6">
								<label for="phone">Téléphone</label>
								<input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="<?php echo $phone; ?>">
								<p class="comment"><?php echo $phoneError; ?></p>		
							</div>

							<div class="col-md-12">
								<label for="message">Message<span class="blue"> *</span></label>
								<textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"><?php echo $message; ?></textarea>
								<p class="comment"><?php echo $messageError; ?></p>
							</div>

							<div class="col-md-12">				
								<p class="blue"><strong>* Ces informations sont requises.</strong></p>
							</div>

							<div class="col-md-12">
								<input type="submit" class="button1" value="Envoyer" name="envoi">
							</div>
						</div>

						<p class="thank-you" style="display: <?php if($isSuccess) echo 'block'; else echo 'none'; ?>">Votre message a bien été envoyé. Merci de m'avoir contacté :))</p>

					</form>
					
				</div>

			</div>

		</div>

	</body>

</html>