<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$titre = $_POST["titre"];
$image = "";

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["image"]["error"] == 0) {
    $image = $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], "../../../uploads/" . $image);
}

// Insertion des données en BDD
insertPays($titre, $image);

// Redirection vers la liste
header("Location: index.php");
