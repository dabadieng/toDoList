<form method="post">
    <input type='hidden' name='tac_id' id='tac_id' value='<?= $tac_id ?>'>

    <?php
    if (!isset($_GET["etat"])){ ?>

        <p>
            <label for='tac_libelle'>tac_libelle</label>
            <input type='text' name='tac_libelle' id='tac_libelle' required placeholder='veuillez saisir votre tac_libelle' value='<?= $tac_libelle ?>'>
        </p>

        <p>
            <label for='tac_date'>tac_date</label>
            <input type='date' name='tac_date' id='tac_date' value='<?= $tac_date_heure ?>'>
        </p>

        <p>
            <label for='tac_heure'>tac_heure</label>
            <input type='time' name='tac_heure' id='tac_heure' value='<?= $tac_date_heure ?>'>
        </p>

        <p>
            <label for="tac_memo">Entrer votre mémo</label>
            <textarea id="tac_memo" name="tac_memo" cols="30" rows="5"><?= $tac_memo ?></textarea>
        </p>

        <p>
            <label for="tac_categorie">tac_categorie : </label>
            <select id="tac_categorie" name="tac_categorie">

                <?php HTMLselect($link, "select cat_id id,cat_nom label from categorie", $tac_categorie); ?>
            </select>
        </p>


        <p>
            <label for='tac_utilisateur'>tac_utilisateur</label>
            <input type='text' name='tac_utilisateur' id='tac_utilisateur' required placeholder='veuillez saisir votre tac_utilisateur' value='<?= $tac_utilisateur ?>'>
        </p>

    <?php   } ?>

    <?php
    if ($tac_id > 0) { ?>
        <p>Veuillez choisir le statut de votre tâche: </p>
        <p>
            <label for="archiver">archiver</label>
            <input type="radio" id="archiver" name="tac_etat" value="archiver" <?= ($tac_etat == "archiver") ? "checked='checked'" : "" ?> />

            <label for="non_archiver">non_archiver</label>
            <input type="radio" id="non_archiver" name="tac_etat" value="" <?= ($tac_etat == "non_archiver") ? "checked='checked'" : "" ?> />
        </p>
    <?php
    } ?>



    <input type="submit" name="btsubmit" value="Enregistrer">
</form>