<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST["id"];
$titre = $_POST["titre"];

$pays = getOneEntity("pays", $id);
$photo = !is_null($pays["photo"]) ? $pays["photo"] : ""; // Image présente avant update

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["photo"]["error"] == 0) {
    $photo = $_FILES["photo"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/" . $photo);
}

// Insertion des données en BDD
updatePays($id, $titre, $photo);

// Redirection vers la liste
header("Location: index.php");