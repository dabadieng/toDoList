<?php
require "../_include/inc_config.php";
require "../_entite/tache.php";

extract($_GET);
delTache($id); 

header("location:" . hlien("tache", "index"));