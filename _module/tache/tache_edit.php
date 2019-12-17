<?php
require "../_include/inc_config.php";
require "../_entite/tache.php";

if (isset($_POST["btsubmit"])) {
    extract($_POST);
    selectTache();
    $option[":tac_libelle"] = $tac_libelle;
    // vérification de l'existance d'une date et heure
    if ($tac_date == "" && $tac_heure == "")
        $option[":tac_date_heure"] = null;
    else
        $option[":tac_date_heure"] = $tac_date . " " . $tac_heure;

    $option[":tac_memo"] = $tac_memo;
    $option[":tac_categorie"] = $tac_categorie;
    $option[":tac_utilisateur"] = $tac_utilisateur;
    $option[":tac_etat"] = "";

    if ($tac_id == 0)
        insertTache($option);
    else
        updateTache($option, $tac_id, $tac_etat);

    header("location:" . hlien("tache", "index"));
} else {

    extract($_GET);
    if ($id > 0) { //UPDATE        
        $row = findTacheById($id);
        extract($row);
    } else { //INSERT
        $tac_id = 0;
        $tac_libelle = "";
        $tac_date_heure = "";
        $tac_memo = "";
        $tac_categorie = "";
        $tac_utilisateur = "";
        $tac_etat = "";
        $etat = false; 
    }
}

$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
