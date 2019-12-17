<?php
require "../_include/inc_config.php";
require "../_entite/categorie.php";

extract($_GET);
delCategorie($id); 

header("location:" . hlien("categorie", "index"));