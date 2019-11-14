<?php // Je dois démarrer ma session
session_start();
// Je vide les sessions j'en crée une autre
	unset($_SESSION['success']);
	unset($_SESSION['errors']);
// Vérifie si l'utilisateur peut accéder aux films
if(isset($_POST) && !empty($_POST)){
	// Si l'email est valide
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		// Si l'email est valide, je teste le password
		if(!empty($_POST['password'])){
			// J'ouvre la connexion avec PDO
			require_once 'bdd.php';
			// Je crée une requête pour vérifier si l'utilisateur existe
			// Je prépare la requête
			$sql = $connexion->prepare("SELECT * FROM user WHERE email=:email AND password=:password");
			// J'exécute la requête
			$sql->execute(
				[
					'email' => $_POST['email'],
					'password' => $_POST['password']
				]
			); 
			// Je récupère le résultat
			$user = $sql->fetch();


			// Si j'ai bien l'utilisateur alors je le fais passer
			// à la suite
			if(!empty($user)){
				// Je peux aussi faire une vérification supplémentaire
				// Pour voir si l'utilisateur correspond bien (optionnel)
				// Je redirige vers mon compte
				$_SESSION['success'] = 'Connexion réussie';
				// Je donne la permission d'accéder à mon utilisateur
				$_SESSION['access'] = true;
				header('Location: ../list-films.php');
			}else{
				// Si il n'est pas trouvé je renvoie une erreur
				$_SESSION['errors'] = 'Identifiants incorrects';
				//!\\ Retourne à la page précédente
				header('Location: ' . $_SERVER['HTTP_REFERER']);
			}
		}else{
			//!\\ Retourne à la page précédente
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}else{
		//!\\ Retourne à la page précédente
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}else{
	//!\\ Retourne à la page précédente
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

