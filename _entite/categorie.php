<?php

/**
 * requete permettant de recuperer les données de la table categorie 
 */
function selectcategorie()
{
    global $link;

    $sql = "select * from categorie";
    $result = $link->query($sql);
    return $result->fetchAll();
}

/**
 * insert une nouvelle categorie
 */
function insertCategorie($option) {    
    global $link;

    $sql = "insert into categorie values (null,:cat_nom)";
    $statement = $link->prepare($sql);        
    $statement->execute($option); 
}

/**
 * Maj d'une categorie
 */
function updateCategorie($option,$cat_id) {
    global $link;

    $sql = "update categorie set cat_nom=:cat_nom where cat_id=:cat_id";
    $statement = $link->prepare($sql);
    $option[":cat_id"]=$cat_id;
    $statement->execute($option); 
}


function findCategorieById($id) {
    global $link;

    $sql = "select * from categorie where cat_id=:id";
    $statement = $link->prepare($sql);
    $statement->execute([":id"=>$id]);
    return $statement->fetch();    
}

/**
 * requete pour supprimer une categorie 
 */
function delcategorie($id) {
    global $link;
    $sql="delete from categorie where cat_id=:id";
    try {
        $statement = $link->prepare($sql);
        $statement->execute([":id"=>$id]); 
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}