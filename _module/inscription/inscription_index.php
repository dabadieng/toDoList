<?php

require "../_include/inc_config.php";
require "../_entite/authentification.php";
$message = ""; // si besoin d'un message d'erreur

if (isset($_POST["btSubmit"])) {
	extract($_POST);
	$uti_username = trim($uti_username); 
	$uti_mot_de_passe = trim($uti_username); 
	$uti_mot_de_passe = password_hash($uti_username,PASSWORD_DEFAULT); 
	$option[":uti_username"] = $uti_username; 
	$option["uti_mot_de_passe"] = $uti_mot_de_passe; 

	// inscription d'un nouvel utilisateur
	insertUtilisateur($option); 

	header("location:" . hlien("authentification", "index"));
}

$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
