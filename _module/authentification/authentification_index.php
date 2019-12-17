 <?php
	require "../_include/inc_config.php";
	require "../_entite/authentification.php";
	$data = "";
	$message = ""; // si besoin d'un message d'erreur
	//formulaire d'inscription
	if (isset($_POST["btSubmit"])) {
		extract($_POST);
		$uti_username = trim($uti_username);
		$uti_mot_de_passe = trim($uti_mot_de_passe);
		$data = findUtilisateurById($uti_username);


		var_dump($data);
		/*
	if ($data["uti_username"] == $uti_username && $data["uti_mot_de_passe"] == $uti_mot_de_passe) {
		header("location:" . hlien("accueil", "index"));
	} else {

		header("location:" . hlien("inscription", "index"));
	}
	*/
		if ($data["uti_username"] == $uti_username && password_verify($uti_mot_de_passe,$data["uti_mot_de_passe"])) {
			$_SESSION["id"] = $data["uti_id"]; 
			$_SESSION["username"] = $data["uti_username"]; 
			$_SESSION["status"] = $data["uti_status"]; 
			header("location:" . hlien("accueil", "index"));

		} else {

			header("location:" . hlien("inscription", "index"));
		}
	}

	$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
	require "../_include/gabarit.php";
