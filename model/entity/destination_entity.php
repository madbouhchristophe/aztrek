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
function getAllDestinationsAuTop() {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM destination
            WHERE au_top = 1;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertDestination(string $titre, string $photo, string $description, int $prix, int $au_top, string $nb_jours, string $commercial_id, string $pays_id) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO destination (titre, description, photo, prix, au_top, nb_jours, commercial_id, pays_id)
                VALUES (:titre, :description, :photo, :prix, :au_top, :nb_jours, :commercial_id, :pays_id);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":nb_jours", $nb_jours);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":commercial_id", $commercial_id);
    $stmt->bindParam(":au_top", $au_top);
    $stmt->bindParam(":prix", $prix);
    $stmt->execute();
}

function updateDestinations(int $id, string $titre, string $photo, string $description, int $prix, int $au_top, string $nb_jours, string $commercial_id, string $pays_id) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE destination
                SET firstname = :firstname,
                lastname = :lastname,
                picture = :picture
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}
