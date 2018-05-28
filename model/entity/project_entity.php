<?php

function getAllProjects(int $limit = 999) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                project.id,
                project.title,
                project.picture,
                project.price,
                DATE_FORMAT(project.date_start, '%d-%m-%Y') AS date_start,
                category.label AS category,
                COUNT(DISTINCT(project_has_member.member_id)) AS nb_members,
                AVG(notation.grade) AS grade
            FROM project
            INNER JOIN category ON project.category_id = category.id
            LEFT JOIN project_has_member ON project_has_member.project_id = project.id
            LEFT JOIN notation ON notation.project_id = project.id
            GROUP BY project.id
            ORDER BY project.date_start DESC
            LIMIT :limit;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOneProject(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                project.*,
                DATE_FORMAT(project.date_start, '%e %M %Y') AS date_start_format,
                DATEDIFF(project.date_end, project.date_start) AS days,
                category.label AS category
            FROM project
            INNER JOIN category ON category.id = project.category_id
            WHERE project.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}