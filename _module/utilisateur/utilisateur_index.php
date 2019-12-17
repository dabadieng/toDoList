<?php
require "../_include/inc_config.php";
require "../_entite/utilisateur.php";

if($_SESSION["status"] == 1){
    $data = selectUtilisateur();
}else{
    $id = $_SESSION["id"]; 
    $data =  selectUtilisateurByutilisateur($id); 
}

$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
