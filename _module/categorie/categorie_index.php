<?php
require "../_include/inc_config.php";
require "../_entite/categorie.php";

$data = selectCategorie();

$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
