H<?php
require "../_include/inc_config.php";
require "../_entite/categorie.php";

if (isset($_POST["btsubmit"])) {
    extract($_POST);
    selectcategorie();
    $option[":cat_nom"] = $cat_nom;

    if ($cat_id == 0)
        insertCategorie($option);
    else
        updateCategorie($option, $cat_id);

    header("location:" . hlien("categorie", "index"));
} else {

    extract($_GET);
    if ($id > 0) { //UPDATE        
        $row = findCategorieById($id);
        extract($row);
    } else { //INSERT
        $cat_id = 0;
        $cat_nom = "";
    }
}

$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
