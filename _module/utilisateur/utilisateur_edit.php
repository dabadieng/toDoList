<?php
require "../_include/inc_config.php";
require "../_entite/utilisateur.php";

if (isset($_POST["btsubmit"])) {
    extract($_POST);
    selectUtilisateur();
    $option[":uti_username"] = $uti_username;
    $option[":uti_mot_de_passe"] = $uti_mot_de_passe;
    $option[":uti_status"] = $uti_status;

    if ($uti_id == 0)
        insertUtilisateur($option);
    else
        updateUtilisateur($option, $uti_id);

    header("location:" . hlien("utilisateur", "index"));
} else {

    extract($_GET);
    if ($id > 0) { //UPDATE        
        $row = findUtilisateurById($id);
        extract($row);
    } else { //INSERT
        $uti_id = 0;
        $uti_username = "";
        $uti_mot_de_passe = "";
        $uti_status = "";
    }
}

$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
