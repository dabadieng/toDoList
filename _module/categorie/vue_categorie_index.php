<table>
    <caption>
        <a href="<?= hlien("categorie", "edit", "&id=0") ?>">Créer une Catégorie</a>
    </caption>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <td>Editer</td>
        <td>supprimer</td>
    </tr>
    <?php
    foreach ($data as $row) {
        $row = array_map("cb_htmlentities", $row);
        extract($row);
        echo "<tr>";
        echo "<td>$cat_id</td>";
        echo "<td>$cat_nom</td>";
        echo "<td><a href='" . hlien("categorie", "edit", "&id=$cat_id") . "'>Editer</a></td>";
        echo "<td><a href='" . hlien("categorie", "del", "&id=$cat_id") . "'>Supprimer</a></td>";
        echo "</tr>";
    }
    ?>
</table>