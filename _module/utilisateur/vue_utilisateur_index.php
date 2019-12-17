<table>
    <caption>
        <a href="<?= hlien("utilisateur", "edit", "&id=0") ?>">Créer un utilisateur</a>
    </caption>
    <tr>
        <th>id</th>
        <th>Username</th>
        <td>Mot de passe</td>
        <td>Status</td>
        <td>Editer</td>
        <td>supprimer</td>
    </tr>
    <?php
    foreach ($data as $row) {
        $row = array_map("cb_htmlentities", $row);
        extract($row);
        echo "<tr>";
        echo "<td>$uti_id</td>";
        echo "<td>$uti_username</td>";
        echo "<td>$uti_mot_de_passe</td>";
        echo "<td>$uti_status</td>";
        echo "<td><a href='" . hlien("utilisateur", "edit", "&id=$uti_id") . "'>Editer</a></td>";
        echo "<td><a href='" . hlien("utilisateur", "del", "&id=$uti_id") . "'>Supprimer</a></td>";
        echo "</tr>";
    }
    ?>
</table>