<?php
if (isset($_SESSION["status"])) {
    if ($_SESSION["status"] == 1) {
        $menu = array(
            [hlien("tache", "index"), "Tâche"],
            [hlien("categorie", "index"), "Catégorie"],
            [hlien("utilisateur", "index"), "Utilisateur"],
            [hlien("database", "creer"), "RAZ BDD"],
            [hlien("database", "dataset"), "jeu de données"]
        );
    } else if ($_SESSION["status"] == 2) {
        $menu = array(
            [hlien("tache", "index"), "Vos tâches"]
        );
    }
} else {
    $menu = []; 
}

?>
<div class="myflexMenu">
    <?php affiche_menu($menu); ?>
</div>