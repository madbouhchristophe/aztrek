<?php

function insertPays(string $titre, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO pays (titre, photo)
                VALUES (:titre, :photo);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":photo", $picture);
    $stmt->execute();
}

function updatePays(int $id, string $titre, string $photo) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE pays
                SET titre = :titre,
                photo = :photo
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":photo", $photo);
    $stmt->execute();
}
