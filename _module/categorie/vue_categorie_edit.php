<form method="post">
    <input type='hidden' name='cat_id' id='cat_id' value='<?= $cat_id ?>'>


    <?php
    if (isset($_GET["id"]) && $cat_id > 0) { ?>
        <p>
            <label for="cat_nom">cat_nom : </label>
            <select id="cat_nom" name="cat_nom">

                <?php HTMLselect($link, "select cat_id id,cat_nom label from categorie", $cat_id); ?>
            </select>
        </p>
    <?php
    } else { ?>

        <p>
            <label for='cat_nom'>cat_nom</label>
            <input type='text' name='cat_nom' id='cat_nom' required placeholder='veuillez saisir le nom de la categorie' value='<?= $cat_nom ?>'>
        </p>
    <?php
    }
    ?>

    <input type="submit" name="btsubmit" value="Enregistrer">
</form>