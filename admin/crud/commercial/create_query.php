<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$photo = "";

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["photo"]["error"] == 0) {
    $photo = $_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/" . $photo);
}

// Insertion des données en BDD
insertCommercial($nom, $prenom, $photo);

// Redirection vers la liste
header("Location: index.php");
