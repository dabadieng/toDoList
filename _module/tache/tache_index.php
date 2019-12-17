<?php
require "../_include/inc_config.php";
require "../_entite/tache.php";

if($_SESSION["status"] == 1){
    $data = selectTache();
}else{
    $id = $_SESSION["id"]; 
    $data =  selectTacheByUtilisateur($id); 
}

$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
