<?php

/**
 * requete permettant de recuperer les données de la table tache 
 */
function selectTache()
{
    global $link;

    $sql = "select * from tache";
    $result = $link->query($sql);
    return $result->fetchAll();
}

function selectTacheByUtilisateur($id)
{
    global $link;

    $sql = "select * from tache where tac_utilisateur =$id";
    $result = $link->query($sql);
    return $result->fetchAll();
}

/**
 * insert une nouvelle leçon
 */
function insertTache($option) {    
    global $link;

    $sql = "insert into Tache values (null,:tac_libelle, :tac_date_heure, :tac_memo, :tac_categorie, :tac_utilisateur, :tac_etat )";
    $statement = $link->prepare($sql);        
    $statement->execute($option); 
}

/**
 * Maj d'une leçon
 */
function updateTache($option,$tac_id,$tac_etat) {
    global $link;

    $sql = "update tache set 
    tac_libelle =:tac_libelle, tac_date_heure = :tac_date_heure, tac_memo= :tac_memo,
    tac_categorie= :tac_categorie, tac_utilisateur=:tac_utilisateur, tac_etat= :tac_etat 
    where tac_id=:tac_id";
    $statement = $link->prepare($sql);
    $option[":tac_id"]=$tac_id;
    $option[":tac_etat"] = $tac_etat;
    $statement->execute($option); 
}


function findTacheById($id) {
    global $link;

    $sql = "select * from tache where tac_id=:id";
    $statement = $link->prepare($sql);
    $statement->execute([":id"=>$id]);
    return $statement->fetch();    
}

/**
 * requete pour supprimer une tache 
 */
function delTache($id) {
    global $link;
    $sql="delete from tache where tac_id=:id";
    try {
        $statement = $link->prepare($sql);
        $statement->execute([":id"=>$id]); 
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}