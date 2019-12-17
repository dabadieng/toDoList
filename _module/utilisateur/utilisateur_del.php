<?php
require "../_include/inc_config.php";
require "../_entite/utilisateur.php";

extract($_GET);
delUtilisateur($id); 

header("location:" . hlien("utilisateur", "index"));