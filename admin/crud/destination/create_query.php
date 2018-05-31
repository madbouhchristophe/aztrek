<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$titre = $_POST["titre"];
$description = $_POST["description"];
$prix = $_POST["prix"];
$au_top = isset($_POST["au_top"]) ? 1 : 0;
$nb_jours = $_POST["nb_jours"];
$commercial_id = $_POST["commercial_id"];
$pays_id = $_POST["pays_id"];


$photo = "";

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["photo"]["error"] == 0) {
    $photo = $_FILES["photo"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/" . $photo);

}
// Insertion des données en BDD
insertDestination($titre, $photo, $description, $prix, $au_top, $nb_jours, $commercial_id, $pays_id);

// Redirection vers la liste
header("Location: index.php");