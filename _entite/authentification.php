<?php

/**
 * requete permettant de recuperer les données de la table Utilisateur 
 */
function selectUtilisateur()
{
    global $link;

    $sql = "select * from utilisateur";
    $result = $link->query($sql);
    return $result->fetchAll();
}

/**
 * insert un nouvel utilisateur
 */
function insertUtilisateur($option)
{
    global $link;

    $sql = "insert into utilisateur values (null,:uti_username, :uti_mot_de_passe,2)";
    $statement = $link->prepare($sql);
    $statement->execute($option);
}

/**
 * Maj du utilisateur
 */
function updateUtilisateur($option, $uti_id)
{
    global $link;

    $sql = "update Utilisateur set 
    uti_username =:uti_username, uti_mot_de_passe = :uti_mot_de_passe
    where uti_id=:uti_id";
    $statement = $link->prepare($sql);
    $option[":uti_id"] = $uti_id;
    $statement->execute($option);
}


function findUtilisateurById($uti_username)
{
    global $link;

    $sql = "select * from utilisateur where uti_username=:id";
    $statement = $link->prepare($sql);
    $statement->execute([":id" => $uti_username]);
    return $statement->fetch();
}

/**
 * requete pour supprimer un Utilisateur 
 */
function delUtilisateur($id)
{
    global $link;
    $sql = "delete from Utilisateur where uti_id=:id";
    try {
        $statement = $link->prepare($sql);
        $statement->execute([":id" => $id]);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

/**
 * vérification authentifiation par username 
 */
function findUtilisateurByUsername($uti_username)
{
    global $link;

    $sql = "select * from utilisateur where uti_username=:uti_username";
    $statement = $link->prepare($sql);
    $statement->execute([":uti_username" => $uti_username]);
    return $statement->fetch();
}
