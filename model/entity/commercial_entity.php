<?php

function insertCommercial(string $nom, string $prenom, string $photo) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO commercial (nom, prenom, photo)
                VALUES (:nom, :prenom, :photo);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":photo", $photo);
    $stmt->execute();
}

