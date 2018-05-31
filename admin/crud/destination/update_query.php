<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$titre = $_POST["titre"];
$photo = $_POST["photo"];
$description = $_POST["description"];
$prix = $_POST["prix"];
$au_top = $_POST["au_top"];
$nb_jours = $_POST["nb_jours"];

$photo = "";




$destinations = getOneEntity("destinations", $id);
$photo = !is_null($destinations["photo"]) ? $destinations["photo"] : ""; // Image présente avant update

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["photo"]["error"] == 0) {
    $picture = $_FILES["photo"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/" . $picture);
}

// Insertion des données en BDD
updateDestinations($id, $titre, $photo, $description, $prix, $au_top, $nb_jours);

// Redirection vers la liste
header("Location: index.php");