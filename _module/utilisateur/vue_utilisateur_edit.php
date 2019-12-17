<form method="post">
    <input type='hidden' name='uti_id' id='uti_id' value='<?= $uti_id ?>'>

    <p>
        <label for='uti_username'>Entrer votre username</label>
        <input type='text' name='uti_username' id='uti_username' required placeholder='veuillez saisir votre uti_username' value='<?= $uti_username ?>'>
    </p>

    <p>
        <label for="uti_mot_de_passe">Entrer votre mot de passe</label>
        <input type='password' name='uti_mot_de_passe' id='uti_mot_de_passe' required placeholder='veuillez saisir votre mot de passe' value='<?= $uti_mot_de_passe ?>'>
    </p>

    <p>
        <label for='uti_status'>uti_status</label>
        <input type='text' name='uti_status' id='uti_status' required placeholder='veuillez saisir votre uti_status' value='<?= $uti_status ?>'>
    </p>

    <input type="submit" name="btsubmit" value="Enregistrer">
</form>