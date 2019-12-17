<form method="post">
    <input type='hidden' name='uti_id' id='uti_id' value='<?= $uti_id ?>'>

    <p>
        <label for='uti_username'>Entrer l'username</label>
        <input type='text' name='uti_username' id='uti_username' required placeholder='veuillez saisir votre uti_username' value='<?= $uti_username ?>'>
    </p>

    <p>
        <label for="uti_mot_de_passe">Entrer le mot de passe</label>
        <input type='password' name='uti_mot_de_passe' id='uti_mot_de_passe' required placeholder='veuillez saisir votre mot de passe' value='<?= $uti_mot_de_passe ?>'>
    </p>

    <p>Choisir le statut de l'utilisateur: </p>
    <p>
        <label for="admin">Admin</label>
        <input type="radio" id="admin" name="uti_status" value="1" <?= ($uti_status == "1") ? "checked='checked'" : "" ?> />

        <label for="non_admin">Non Admin</label>
        <input type="radio" id="non_admin" name="uti_status" value="2" <?= ($uti_status == "2") ? "checked='checked'" : "" ?> />
    </p>

    <input type="submit" name="btsubmit" value="Enregistrer">
</form>