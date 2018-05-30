<?php

function getAllOptionsByDestination(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT `option`.*
            FROM `option`
            INNER JOIN destination_has_option ON destination_has_option.option_id = `option`.id
            WHERE destination_has_option.destination_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
