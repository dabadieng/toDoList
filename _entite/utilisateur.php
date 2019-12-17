<?php

/**
 * requete permettant de recuperer les données de la table utilisateur 
 */
function selectUtilisateur()
{
    global $link;

    $sql = "select * from utilisateur";
    $result = $link->query($sql);
    return $result->fetchAll();
}

function selectUtilisateurByUtilisateur($id)
{
    global $link;

    $sql = "select * from utilisateur where uti_id =$id";
    $result = $link->query($sql);
    return $result->fetchAll();
}

/**
 * insert un nouvel utilisateur
 */
function insertUtilisateur($option) {    
    global $link;

    $sql = "insert into utilisateur values (null,:uti_username, :uti_mot_de_passe, :uti_status)";
    $statement = $link->prepare($sql);        
    $statement->execute($option); 
}

/**
 * Maj d'une leçon
 */
function updateUtilisateur($option,$uti_id) {
    global $link;

    $sql = "update utilisateur set 
    uti_username =:uti_username, uti_mot_de_passe = :uti_mot_de_passe, uti_status= :uti_status,
    where uti_id=:uti_id";
    $statement = $link->prepare($sql);
    $option[":uti_id"]=$uti_id;
    $statement->execute($option); 
}


function findUtilisateurById($id) {
    global $link;

    $sql = "select * from utilisateur where uti_id=:id";
    $statement = $link->prepare($sql);
    $statement->execute([":id"=>$id]);
    return $statement->fetch();    
}

/**
 * requete pour supprimer un utilisateur 
 */
function delUtilisateur($id) {
    global $link;
    $sql="delete from utilisateur where uti_id=:id";
    try {
        $statement = $link->prepare($sql);
        $statement->execute([":id"=>$id]); 
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}