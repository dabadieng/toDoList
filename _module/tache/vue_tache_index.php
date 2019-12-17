<table>
    <caption>
        <a href="<?= hlien("tache", "edit", "&id=0") ?>">Créer une tâche</a>
    </caption>
    <tr>
        <th>id</th>
        <th>Catégorie</th>
        <td>Libellé</td>
        <td>Date</td>
        <td>Statut</td>
        <td>Editer</td>
        <td>supprimer</td>
    </tr>
    <?php
    foreach ($data as $row) {
        $row = array_map("cb_htmlentities", $row);
        extract($row);
        echo "<tr>";
        echo "<td>$tac_id</td>";
        echo "<td>$tac_categorie</td>";
        echo "<td>$tac_libelle</td>";
        echo "<td>$tac_date_heure</td>";
        if ($tac_etat == "") {
            echo "<td><a href='" . hlien("tache", "edit", "&id=$tac_id&etat=1") . "'>Actualiser</a></td>";
        } else {
            echo "<td>$tac_etat</td>";
        }
        echo "<td><a href='" . hlien("tache", "edit", "&id=$tac_id") . "'>Editer</a></td>";
        echo "<td><a href='" . hlien("tache", "del", "&id=$tac_id") . "'>Supprimer</a></td>";
        echo "</tr>";
    }
    ?>
</table>