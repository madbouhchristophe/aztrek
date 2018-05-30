<?php

function getOneDestination(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                destination.*,
                commercial.nom AS commercial_nom,
                commercial.prenom AS commercial_prenom,
                commercial.photo AS commercial_photo,
                commercial.telephone AS commercial_telephone
            FROM destination
            INNER JOIN commercial ON commercial.id = destination.commercial_id
            WHERE destination.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function getAllDestinationsByPays(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
                
            FROM destination
            WHERE destination.pays_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}